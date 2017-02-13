<?php get_header(); ?>

<div id="main">	
			
		
			<h1>
			  <?php if (have_posts()) : ?>
  </h1>
			<h1>Search results</h1>
			<h1>
			  <?php while (have_posts()) : the_post(); ?>
  </h1>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
			  <?php the_title(); ?>
			</a></h1>
			<p><span class="contenttext">
			  <?php the_excerpt() ?>
			</span></p>  

						<p class="post-footer"><a href="<?php comments_link(); ?>"></a>
			<span class="date"><?php the_time('F jS, Y') ?> </span> <span class="category"> <?php the_category(', ') ?> </span>
			
			<span class="comment"><a href="<?php comments_link(); ?>">Comments (
            <?php comments_number('0','1','%'); ?>
            )</a></span></p>
										
		  <p>&nbsp;</p>
			<p>
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
            <h2>Search results</h2>
            <p>No matches. Please try again, or use the navigation menus to find what you search for.</p>
            <?php endif; ?>
<p>&nbsp; </p>
			<p>&nbsp;</p>
			<p><a name="SampleTags"></a>
  </p>
			<h1><br />		
	  </h1>
</div>	
			
		<div id="rightbar">
			
			<?php //get_sidebar(); ?>	
			
		</div>			
			
	<!-- content-wrap ends here -->		
	</div>

<!-- footer starts here -->	
<?php get_footer(); ?>
<!-- footer ends here -->
	
<!-- wrap ends here -->
</div>

</body>
</html>
