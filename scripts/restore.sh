#!/bin/bash
set -e
source /root/usecase1/.env

BACKUP_DIR="/root/usecase1/backup"
TIMESTAMP=$(date +"%Y-%m-%d %H:%M")

log() {
  echo -e "\033[0;32m[$TIMESTAMP]\033[0m $1"
}

echo "Daftar backup WordPress & Database:"
ls -1d $BACKUP_DIR/wordpress_backup_* | sed 's|.*/wordpress_backup_||'
ls -1 $BACKUP_DIR/mysql_backup_*.sql.gz | sed 's|.*/mysql_backup_||;s|.sql.gz||'

echo -n "Pilih tanggal backup (contoh: 2025-06-17_1510): "
read DATE

log "Mulai proses restore."
log "Stop container wordpress..."
docker stop wordpress
log "Container wordpress stopped."

log "Start container mysql supaya bisa restore database..."
docker start mysql
log "Container mysql started."

log "Restore WordPress files..."
if [ -d "$BACKUP_DIR/wordpress_backup_$DATE" ]; then
  rm -rf /root/usecase1/wordpress
  cp -r "$BACKUP_DIR/wordpress_backup_$DATE" /root/usecase1/wordpress
  log "Restore WordPress dari folder backup sukses."
elif [ -f "$BACKUP_DIR/wordpress_backup_$DATE.tar.gz" ]; then
  rm -rf /root/usecase1/wordpress
  tar -xzf "$BACKUP_DIR/wordpress_backup_$DATE.tar.gz" -C /root/usecase1/
  log "Restore WordPress dari file tar.gz sukses."
else
  log "Backup WordPress gak ketemu, skip restore WordPress."
fi

log "Restore MySQL database..."
if [ -f "$BACKUP_DIR/mysql_backup_$DATE.sql.gz" ]; then
  gzip -d "$BACKUP_DIR/mysql_backup_$DATE.sql.gz" -c > "$BACKUP_DIR/mysql_backup_$DATE.sql"
  cat "$BACKUP_DIR/mysql_backup_$DATE.sql" | docker exec -i mysql mysql -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE"
  rm "$BACKUP_DIR/mysql_backup_$DATE.sql"
  log "Restore database MySQL sukses."
else
  log "Backup MySQL gak ketemu, skip restore MySQL."
fi

log "Restart container mysql & start wordpress..."
docker restart mysql
docker start wordpress
log "Container mysql dan wordpress sudah dijalankan ulang."

log "Kirim email notifikasi restore berhasil..."
echo -e "Subject: Restore WordPress & Database Berhasil\n\nRestore selesai pada: $TIMESTAMP\nBackup yang digunakan: $DATE\n\nSalam, Sistem Backup." | msmtp "$NOTIF_EMAIL"
log "Email notifikasi restore terkirim ke $NOTIF_EMAIL."

log "Restore selesai semua!"
