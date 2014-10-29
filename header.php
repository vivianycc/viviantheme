<!DOCTYPE html>

<html <?php language_attributes(); ?>> <!--language_attribites() sets languages-->
<head>
<meta charset="<?php bloginfo('charset');?>" />
<title><?php

if (is_home()) {
bloginfo('name');  
//bloginfo() gives a variety of information. see http://codex.wordpress.org/Function_Reference/bloginfo
echo ' - ';
bloginfo('description');
} else {
wp_title(' - ', true, 'right');
//wp_title() sets the website title. see http://codex.wordpress.org/Function_Reference/wp_title

bloginfo('name');
} ?></title>

<?php wp_head(); ?>
<!--wp_head() - WordPress 頭部的 Hook。某些外掛會利用此處將外掛需要的
Javascript 檔案載入,我們也可以利用此處載入需要載入的檔案。-->	

<meta name="viewport" 
content="width=device-width, initial-scale=1" />

<link rel="pingback" href="<?php 
bloginfo( 'pingback_url' ); ?>" />

<!--bloginfo('pingback_url') - 網站 Pingback 的網址。-->

<link href="<?php 
bloginfo('template_directory') ?>/style.css" 
media="screen" rel="stylesheet" type="text/css" />

<!--bloginfo('template_directory') - 網站套用中佈景之路徑,如「http://網址
/wp-content/themes/fundesigner」-->


</head>

<body>

<div class="container">

<header class="header">

<h1 class="title"><a href="<?php bloginfo('url'); ?>">樂在設計</a></h1>
<!--wp_nav_menu() 這個函式。這個函式說穿了就是把在控制台→外觀→選單中所設定的選單叫出來。-->
<nav>
<?php 
wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
<!--'theme_location' 則是告訴系統要的是哪一個選單。-->
</nav>

</header>