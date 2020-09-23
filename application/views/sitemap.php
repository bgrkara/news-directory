<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <url>
        <loc><?= base_url();?></loc> 
        <priority>1.0</priority>
    </url>
    
    <!-- Gazetebul Sitemap Generation -->
    <?php foreach($generalsettings as $url) { ?>
    <url>
        <loc><?= base_url("/yerel/").$url->sehir_url; ?></loc>
        <lastmod><?= date('Y-m-d', time());?></lastmod>
        <priority>0.6</priority>
    </url>
    <?php } ?>
    <?php foreach($sayfa as $url) { ?>
    <url>
        <loc><?= base_url("/sayfa/").$url->sayfa_url; ?></loc>
        <lastmod><?= date('Y-m-d', time());?></lastmod>
        <priority>0.2</priority>
    </url>
    <?php } ?>
    <url>
        <loc><?= base_url("iletisim");?></loc> 
        <priority>0.2</priority>
    </url>
</urlset>