<?php
/*
Template Name: Links Page
*/
// shows all the links from Links and resources section
?>
<?php get_header(); ?>

<div id="main">


<h1>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
</h1>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
  <?php the_title(); ?>
</a></h1>
<p><span class="contenttext">
  <ul><?php wp_list_bookmarks('title_li=&category=2&categorize=0'); ?></ul>
  <?php the_content(''); ?>
</span></p>

  <?php //comments_template(); ?>
              <?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>
</div>

<?php //get_sidebar(); ?>

<!-- content-wrap ends here -->
</div>

<!-- footer starts here -->
<?php get_footer(); ?>
<!-- footer ends here -->

<!-- wrap ends here -->
</div>

</body>
</html>
