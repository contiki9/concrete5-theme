<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 * Default Page Template.
 */

$this->inc('elements/header.php');

/*
 * This is the main area for the theme you 
 * will see when editing a page .
 */
$a = new Area('Main');

/* 
 * $a->enableGridContainer();
 */

$a->display($c);

$this->inc('elements/footer.php');