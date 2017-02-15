<?php get_header(); ?>

<div id="main">


<h1>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
</h1>
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
  <?php the_title(); ?>
</a></h1>

<div class="post">
<p><span class="contenttext">
  <?php the_content('Read more &raquo;'); ?>
</span></p>

<p class="post-footer"><a href="<?php comments_link(); ?>"></a>
<span class="date"><?php the_time('F jS, Y') ?> </span> <span class="category"> <?php the_category(', ') ?> </span>

<span class="comment"><a href="<?php comments_link(); ?>">Comments (
            <?php comments_number('0','1','%'); ?>
            )</a></span></p>
</div>


  <p>&nbsp;</p>
<p>
<?php //$withcomments = 1; ?>
<?php comments_template(); ?>
  <?php endwhile; ?>
</p>
<div class="navigation">
  <p align="center"><span class="prevlink">
    <?php next_posts_link('&laquo; Previous entries') ?>
    </span> <span class="nextlink">
      <?php previous_posts_link('Next entries &raquo;') ?>
      </span></p>
  </div>
<?php else : ?>
            <h2>Not found!</h2>
            <p>Could not find the requested page. Use the navigation menu to find your target, or use the search box below:</p>
            <?php endif; ?>
<p><a name="SampleTags"></a>
  </p>
</div>

<?php  //get_sidebar(); ?>

<!-- content-wrap ends here -->
</div>

<!-- footer starts here -->
<?php get_footer(); ?>
<!-- footer ends here -->

<!-- wrap ends here -->
</div>
</body>
</html>
