<?php
/*
-- The tab headings should only be headings and they should not be clickable
-- there are six columns and each one is 820 / 6 which is 136 px including 1px border



*/
?>
<ul id="main_menu">
<!-- the home button / tab -->
  <li><a href="<?php bloginfo('url'); ?>">home</a></li>
<!-- our school drop-down start -->
  <li onmouseover=""><a>our school</a>
    <ul>
<?php wp_list_bookmarks('title_li=&category=21&categorize=0'); ?>
    </ul>
  </li>
  <li onmouseover=""><a>parents</a>
<!-- parents drop-down start -->
    <ul>
<?php wp_list_bookmarks('title_li=&category=18&categorize=0'); ?>
    </ul>
  </li>
  <li onmouseover=""><a>learning</a>
<!-- learning drop-down starts -->
    <ul>
<?php wp_list_bookmarks('title_li=&category=19&categorize=0'); ?>
    </ul>
  </li>
<!-- the curriculum  button / tab -->
  <li onmouseover=""><a>curriculum</a>
    <ul>
<?php wp_list_bookmarks('title_li=&category=22&categorize=0'); ?>
    </ul>
  </li>
  <li onmouseover=""><a>News</a>
    <ul>
<?php wp_list_bookmarks('title_li=&category=23&categorize=0'); ?>
    </ul>
  </li>
</ul>
