<?php

// Main Index Page

get_header();

?>
	
<div data-role="page" class="theme-preview" data-theme="a">

	<div data-role="header" data-theme="a">
		<h1><?php the_title(); ?></h1>
		<a href="<?php echo get_bloginfo('home'); ?>" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-left jqm-home">Home</a>
	</div><!-- /header -->

	<div data-role="content">	
	<?php
	
	if( is_front_page()){
	
		global $post;
	
		?>
		
    
        
        <ul data-role="listview" data-inset="true" data-filter="false">
			<?php
			
			$args = array(
				'depth' => 1,
				'echo' => 1,
				//'exclude' => $post->ID,
				//'child_of' => $post-ID,
				'sort_column' => 'menu_order',
				'title_li' => '',
				//'link_before => 'rel="external"',
				
			);
			
			$external = "rel=\"external\"";
		
			wp_list_pages('echo=1&sort_column=menu_order&exclude='.$post->ID.'&title_li=&depth=1');
			?>
		</ul>
		
		<?php
		wp_reset_query();
		
	}else{
	?>
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<a id="top"></a>
      
		
		<?php the_content(); ?>
	
		 <ul data-role="listview" data-inset="true" data-filter="false">
				<?php

				$args = array(
					'depth' => 1,
					'echo' => 1,
					//'exclude' => $post->ID,
					//'child_of' => $post-ID,
					'sort_column' => 'menu_order',
					'title_li' => '',
					//'link_before => 'rel="external"',

				);

			
				wp_list_pages('echo=1&sort_column=menu_order&child_of='.$post->ID.'&title_li=&depth=1');
				?>
			</ul>
	
	
	<?php endwhile; endif; }?>
	
    
   
    </div><!-- /content -->
	


<?php get_footer(); ?>