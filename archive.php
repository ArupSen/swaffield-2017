<?php get_header(); ?>

<div id="main">	
			
			
			<h1>
			 <?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>

<?php if (is_category()) { ?><h2>'<?php echo single_cat_title(); ?>' starting with most recent</h2>
<?php } elseif (is_day()) { ?><h2>Archive for <?php the_time('F jS, Y'); ?></h2>
<?php } elseif (is_month()) { ?><h2>Archive for <?php the_time('F, Y'); ?></h2>
<?php } elseif (is_year()) { ?><h2>Archive for the year <?php the_time('Y'); ?></h2>
<?php } elseif (is_search()) { ?><h2>Search results</h2>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2>Archives</h2>
<?php } ?>
<?php while (have_posts()) : the_post(); ?>
  </h1>
  <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
			  <?php the_title(); ?>
			</a></h1>
			<p><span class="contenttext">
			  <?php the_excerpt() ?>
			</span></p>  

<!--			<p class="post-footer"><a href="<?php comments_link(); ?>"></a>
			<span class="date"><?php the_time('F jS, Y') ?> </span> <span class="category"> <?php the_category(', ') ?> </span>
			
			<span class="comment"><a href="<?php comments_link(); ?>">Comments (
            <?php comments_number('0','1','%'); ?>
            )</a></span></p>
-->										
		    <p>&nbsp;</p>
			<p>
			  <?php endwhile; ?>
			</p>
			<?php if (is_category('6')) { ?> <p><span class="comment"><a href="<?php comments_link(); ?>">Comments (
            <?php comments_number('0','1','%'); ?>
            )</a></span></p>
			<?php } ?>
			<div class="navigation">
			  <p align="center"><span class="prevlink">
			    <?php next_posts_link('&laquo; Previous entries') ?>
			    </span> <span class="nextlink">
			      <?php previous_posts_link('Next entries &raquo;') ?>
			      </span></p>
		  </div>
			<?php else : ?>
            <h2>Page not found!</h2>
            <p>The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.</p>
            <?php endif; ?>
<p>&nbsp; </p>
			<p>&nbsp;</p>
			<p><a name="SampleTags"></a>
  </p>
			<h1><br />		
	  </h1>
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
