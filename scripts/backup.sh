#!/bin/bash
set -e
source /root/usecase1/.env

BACKUP_DIR="/root/usecase1/backup"

# Timestamp buat log & nama file
TIMESTAMP=$(date +"%Y-%m-%d %H:%M")
DATE_SAFE=$(date +"%Y-%m-%d_%H%M")

mkdir -p "$BACKUP_DIR"

log() {
  echo -e "\033[0;32m[$TIMESTAMP]\033[0m $1"
}

log "Mulai backup WordPress (uncompressed)..."
cp -r /root/usecase1/wordpress "$BACKUP_DIR/wordpress_backup_$DATE_SAFE"
log "Selesai backup WordPress (uncompressed)."

log "Mulai backup WordPress (tar.gz)..."
tar -czf "$BACKUP_DIR/wordpress_backup_$DATE_SAFE.tar.gz" -C /root/usecase1 wordpress
log "Selesai backup WordPress (tar.gz)."

log "Mulai backup MySQL database dari container..."
docker exec mysql sh -c "exec mysqldump -u'$MYSQL_USER' -p'$MYSQL_PASSWORD' $MYSQL_DATABASE" > "$BACKUP_DIR/mysql_backup_$DATE_SAFE.sql"
log "Selesai dump database MySQL."

log "Kompres file SQL..."
gzip -c "$BACKUP_DIR/mysql_backup_$DATE_SAFE.sql" > "$BACKUP_DIR/mysql_backup_$DATE_SAFE.sql.gz"
rm "$BACKUP_DIR/mysql_backup_$DATE_SAFE.sql"
log "Selesai kompres SQL."

log "Kirim email notifikasi..."
echo -e "Subject: Backup WordPress & Database Berhasil\n\nBackup tersimpan di direktori:\n$BACKUP_DIR\n\nTanggal backup: $(date +'%Y-%m-%d')\nJam backup: $(date +'%H:%M')" | msmtp "$NOTIF_EMAIL"
log "Email notifikasi terkirim ke $NOTIF_EMAIL."

log "Backup selesai semua!"
