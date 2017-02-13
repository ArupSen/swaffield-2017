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
			  <?php the_content(''); ?>
			</span></p>  

<!--			<p class="post-footer"><a href="<?php //comments_link(); ?>"></a>
			<span class="date"><?php //the_time('F jS, Y') ?> </span> 
-->			
<!--			<span class="comment"><a href="<?php //comments_link(); ?>">Comments (
            <?php //comments_number('0','1','%'); ?>
            )</a></span></p>
-->										
<!--		  <p>&nbsp;</p>
-->			<!--<p>-->
			  <?php //comments_template(); ?>
              <?php endwhile; else: ?>
<!--</p>-->
			<p>No matching entries found.</p>
			<?php endif; ?>
<!--<p>&nbsp; </p>
			<p>&nbsp;</p>
			<p><a name="SampleTags"></a></p>
			<h1><br />		
	  </h1>
--></div>	
			
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
