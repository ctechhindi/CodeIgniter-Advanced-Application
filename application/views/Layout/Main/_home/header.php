<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= $shortcut_icon; ?>">
    <meta name="description" content="<?= $meta_description; ?>"/>
    <meta name="keywords" content="<?= $meta_keywords; ?>"/>
    <meta name="author" content="<?= $meta_author; ?>">
    <meta name="copyright" content="<?= $meta_copyright; ?>"/>

    <meta property="og:title" content="<?= $meta_title; ?>">
    <meta property="og:description" content="<?= $meta_description; ?>">
    <meta property="og:image" itemprop="image primaryImageOfPage" content="<?= $meta_image; ?>" />
    <meta property="og:type" content="<?= $meta_type; ?>"/>
    <meta property="og:url" content="<?= $meta_url; ?>"/>
    <!-- for Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="<?= $meta_title; ?>"/>
    <meta name="twitter:description" content="<?= $meta_description; ?>"/>
    <meta name="twitter:image" content="<?= $meta_image; ?>"/>
    <title><?= $title; ?></title>
    <?php
        echo link_tag('assets\css\bootstrap.min.css');
    ?>
    <script src="<?= base_url("assets\js\jquery-3.3.1.slim.min.js") ?>"></script>
</head>
<body>