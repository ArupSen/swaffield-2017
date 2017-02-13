<div id="rightbar" >
<h1>News Menu</h1>
<ul class="sidemenu">
<li><a href="<?php bloginfo('url'); ?>/?p=4199" title="View all posts filed under NEWS & LETTERS">NEWS & LETTERS</a></li>
  <li>
    <?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=0&exclude=6,17'); ?>
  </li>
<li><a href="<?php bloginfo('url'); ?>/?p=40#comments" title="Post your comments and suggestions here">COMMENTS</a></li>
</ul>
<!--<h1>Swaffield News</h1>
<ul class="sidemenu">
  <li>
    <?php //wp_list_pages('include=38&title_li='); ?>
  </li>
</ul>-->
  <h1>Links & Resources</h1>
  <ul class="sidemenu">
    <li>
      <?php get_links('-1', '<li>', '</li>', ' ', FALSE, 'id', FALSE, FALSE, -1, FALSE, TRUE); ?>
    </li>
</ul>
<h1>Link to Publications</h1>
<ul class="sidemenu">
  <li>
    <?php wp_list_pages('include=532&title_li='); ?>
  </li>
  </ul>
	

</div>