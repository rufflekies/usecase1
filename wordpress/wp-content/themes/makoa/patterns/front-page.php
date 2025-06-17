<?php
/**
 * Title: front-page
 * Slug: makoa/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
    
<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Cover"},"className":"mobile\u002d\u002dno-padding-top","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center mobile--no-padding-top" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"300px","className":"mobile-order-1"} -->
<div class="wp-block-column is-vertically-aligned-center mobile-order-1" style="flex-basis:300px"><!-- wp:image {"width":"300px","aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"mobile-align-none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized mobile-align-none"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/makoa-photo.jpg" alt="" style="aspect-ratio:3/4;object-fit:cover;width:300px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"mobile-order-2"} -->
<div class="wp-block-column is-vertically-aligned-center mobile-order-2"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"0","top":"0"}}},"fontSize":"huge-mobile"} -->
<h1 class="wp-block-heading has-huge-mobile-font-size" style="margin-top:0;margin-bottom:0"><?php echo __('Hi, I’m Makoa!<br>Independent creator<br>who simplifies things.', 'makoa'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"mobile-no-br","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.5","fontSize":"20px"}}} -->
<p class="mobile-no-br" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40);font-size:20px;line-height:1.5"><?php echo sprintf( __('I create %1$sapps%2$s and %3$swebsites%4$s, write books,<br>and publish a “Catch the Wave”<br>newsletter every week.', 'makoa'), '<a href="#">', '</a>', '<a href="#">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contacts"><?php echo __('Contacts', 'makoa'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"My superpowers"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('My superpowers', 'makoa'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-column has-background-secondary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('UI\UX design', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('I design intuitive interfaces that enhance user experience and engagement', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-column has-background-secondary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('Web Apps', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('I develop fast, responsive, and user-friendly web applications tailored to client needs', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-column has-background-secondary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('Photography', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('I create impactful visuals that tell compelling stories and elevate digital content', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-secondary"} -->
<div class="wp-block-column has-background-secondary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('Writing', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('I craft clear, engaging, and impactful content that connects with audiences and drives results', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Biography"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Biography', 'makoa'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><?php echo __('I specialize in creating seamless digital experiences through UI/UX design, building intuitive interfaces that captivate users. I develop web applications that are fast, responsive, and tailored to meet unique client needs.', 'makoa'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><?php echo __('With a passion for photography, I craft impactful visuals that tell stories and enhance digital content. I also focus on writing clear and engaging content that connects with audiences and delivers results.', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Projects"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Projects', 'makoa'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#portfolio"><?php echo __('Go to projects', 'makoa'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="border-radius:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Minimal-Elegance.jpg" alt="" class="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('Minimal Elegance', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><?php echo __('#design', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('A design project exploring subtle white and gray tones with delicate, flowing forms.', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="border-radius:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Timeless-Gray.jpg" alt="" class="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo __('Timeless Gray', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><?php echo __('#design', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10);margin-right:0;margin-bottom:0;margin-left:0;line-height:1.5"><?php echo __('A project showcasing depth and sophistication through soft, flowing gray tones.', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Blog', 'makoa'); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":8,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more →","style":{"spacing":{"margin":{"bottom":"0","top":"var:preset|spacing|30"}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results.","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-link-color has-small-font-size"><?php echo __('No posts', 'makoa'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Contacts"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Contacts', 'makoa'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px"><?php echo __('Email', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><a href="mailto:hello@makoa.com"><?php echo __('hello@makoa.com', 'makoa'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px"><?php echo __('Phone', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
<p style="font-size:18px"><a href="mailto:hello@makoa.com"><?php echo __('+1 (111) 222-33-44', 'makoa'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px"><?php echo __('Address', 'makoa'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:18px"><?php echo __('60 29th Street San Francisco', 'makoa'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->