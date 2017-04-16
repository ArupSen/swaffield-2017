<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php wp_head(); ?>
<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('name'); wp_title(); ?>" />
<meta name="keywords" content="<?php bloginfo('name'); wp_title(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="http://www.swaffield.wandsworth.sch.uk/favicon.ico" type="image/x-icon" />
<meta name="robots" content="noindex, nofollow" />

<script type="text/javascript">
jQuery(function() {
// scrolling text for the main heading
var $scrollHeading = jQuery('.home #main').find('h1').eq(1);
var $welcomeText = jQuery('.home h3').next();
$scrollHeading.wrap('<marquee direction="left" behaviour="scroll"></marquee>');
$welcomeText.wrap('<div class="head-welcome">');
});
</script>

<title><?php bloginfo('name'); wp_title(); ?></title>

<!--[if lt IE 7.0]>
<style>
#wrap {position:relative;}
#main {margin-left:-17px;}
#rightbar {
position:absolute;
top:326px;
right:10px;
width: 21%;
padding: 0; margin: 0;
}
#sidebar ul.sidemenu ul li.page_item, #rightbar ul.sidemenu ul li.page_item {
    width:188%;
    white-space:normal;
    list-style-type:none;
    padding-left:-4px;
    margin-left:-31px;
}
#sidebar h1 {margin-bottom:-18px;}
#rightbar h1 {margin-bottom:-11px;}
#home_links table, #home_links p{font-size:0.85em;}
#home_links p{margin:3px 0;}
</style>
<![endif]-->

</head>

<body <?php body_class($class); ?>>
<!-- wrap starts here -->
<div id="wrap">

<div id="header">


<h1 id="logo"><a href="<?php bloginfo('url'); ?>" title="go back to the home page">Swaffield Primary School</a></h1>
<h2 id="slogan"><?php bloginfo('description'); ?></h2>
<p class="address">St Ann’s Hill <br>Wandsworth <br>SW18 2SA</p>
<p class="contact-details">Mrs C Lilley, Headteacher <br>
Telephone: 020 8874 2825 <br>
Email: swaffield@swaffield.wandsworth.sch.uk
</p>

<form method="get" class="searchform" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s"  class="textbox" />
  <input type="submit"  class="button" id="searchsubmit" value="Search" /></p>
</form>




<?php //include (TEMPLATEPATH. '/main_menu.php'); ?>
<?php
if (is_active_sidebar( 'custom-header-widget' )) : ?>
<div id="header-widget-area" class="chw-widget-area widget-area" role="comlementary">
<?php dynamic_sidebar( 'custom-header-widget' ); ?>
</div><!--end #header-widget-area -->
<?php endif; ?>
</div><!-- end #header -->

<!-- content-wrap starts here -->
<div id="content-wrap">

<div style="height:300px;position:relative;"><!-- wraps flashfader and stops page jumping up and down -->
<?php if (function_exists (ssg_show)) ssg_show(); ?>
<?php 
    echo do_shortcode("[metaslider id=11339]"); 
?>
<?php //include (ABSPATH.'wp-content/flashfader/flashfaderhtml.txt'); ?>
<?php //include (TEMPLATEPATH. '/newsBox.php'); ?>
</div>
<!-- <div id="sidebar" >
  <h1>Main Menu</h1>
  <ul class="sidemenu">
    <li><?php wp_list_pages('include=29&title_li='); ?></li>
    <li><?php// wp_list_pages('sort_column=menu_order&depth=0&exclude=17,19,23,24,25,27,29,38,96,105,106,107,111,112,113,114,115,116,121,122,123,124,126,127,128,129,130,131,132,133,134,135,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,163,171,176,178,179,217,225,226,230,231,240,256,277,428,481,532,583,821,1302,1319,1432,1510,1782,1974,2018,2072,2476,2659,2969&title_li='); ?></li>
  </ul>
</div> -->
<?php
// fetch bookmarks menu for each drop-down
$school_links = get_bookmarks(array('category' => 21)); // array of links in the our school category
$parent_links = get_bookmarks(array('category' => 18)); // array of links in the parents category
$learning_links = get_bookmarks(array('category' => 19)); // array of links in the learning category
$curriculum_links = get_bookmarks(array('category' => 22)); // array of links in the curriculum category
$news_links = get_bookmarks(array('category' => 23)); // array of links in the news category
$page = get_the_ID(); // the current pages id

// loop through array and see if id of link matches current page id
foreach ($school_links as $link) {
$link_id = preg_replace('/[^0-9]/','', $link->link_url);
if ($link_id == $page) {
include (TEMPLATEPATH. '/school_menu.php'); // include the side menu if there is a match
}
}
// loop through array and see if id of link matches current page id
foreach ($parent_links as $link) {
$link_id = preg_replace('/[^0-9]/','', $link->link_url);
if ($link_id == $page) {
include (TEMPLATEPATH. '/parents_menu.php'); // include the side menu if there is a match
}
}
// loop through array and see if id of link matches current page id
foreach ($learning_links as $link) {
$link_id = preg_replace('/[^0-9]/','', $link->link_url);
if ($link_id == $page) {
include (TEMPLATEPATH. '/learning_menu.php'); // include the side menu if there is a match
}
}
// loop through array and see if id of link matches current page id
foreach ($curriculum_links as $link) {
$link_id = preg_replace('/[^0-9]/','', $link->link_url);
if ($link_id == $page) {
include (TEMPLATEPATH. '/curriculum_menu.php'); // include the side menu if there is a match
}
}
// loop through array and see if id of link matches current page id
foreach ($news_links as $link) {
$link_id = preg_replace('/[^0-9]/','', $link->link_url);
if ($link_id == $page) {
include (TEMPLATEPATH. '/news_menu.php'); // include the side menu if there is a match
}
}
// side menu conditions for each smaller side menu to appear
/*
switch($page) {
case (is_page(2)):
case (is_page(9)):
case (is_page(10)):
case (is_page(42)):
case (is_page(97)):
case (is_page(4266)):
case (is_page(20)):
case (is_page(3060)):
case (is_page(175)):
case (is_page(173)):
case (is_page(1302)):
case (is_category(15)):
case (in_category(15)):
include (TEMPLATEPATH. '/school_menu.php');
break;

case(is_page(7)):
case(is_page(124)):
case(is_page(23)):
case(is_page(25)):
case(is_page(2018)):
case(is_page(17)):
case(is_page(126)):
case(is_page(96)):
case(is_page(14)):
case(is_page(24)):
case(is_page(1782)):
case(is_page(256)):
case(is_page(481)):
case(is_page(217)):
case(is_page(97)):
case(is_page(2476)):
case(is_page(19)):
include (TEMPLATEPATH. '/parents_menu.php');
break;
case(is_page(26)):
case(is_page(4854)):
case(is_page(4942)):
case(is_page(4903)):
case(is_page(4932)):
case(is_page(4839)):
case(is_page(4939)):
case(is_page(4890)):
case(is_page(4818)):
case(is_page(171)):
case(is_page(130)):
case(is_page(131)):
case(is_page(132)):
case(is_page(133)):
case(is_page(134)):
case(is_page(821)):
case(is_page(243)):
case(is_page(115)):
case(is_page(116)):
case(is_page(111)):
case(is_page(112)):
case(is_page(113)):
case(is_page(2476)):
case(is_page(121)):
case(is_page(5043)):
include (TEMPLATEPATH. '/learning_menu.php');
break;
default:
break;

}*/
?>
