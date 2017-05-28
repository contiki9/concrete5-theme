<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Header element for all pages
 */

?>
<!doctype html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta charset="UTF-8">
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : '')); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/css/uikit.min.css"/>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/style.css"/>
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">