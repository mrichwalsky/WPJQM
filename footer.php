	<div data-role="footer" class="ui_bar">
		<?php 
			if( is_front_page()){ ?>
				
			<!--<h6>You can use this for your site's copyright info. </h6>-->
				
		<?php	}else{ ?>
				<a href="<?php bloginfo(url); ?>" data-role="button" data-icon="home">Home</a>
		<a href="#top" data-role="button" data-rel="back" data-icon="arrow-l">Back</a>	
		<!--<a href="#top" data-role="button" data-icon="arrow-u">Top</a>-->
		<?php }?>
	</div><!-- /footer -->
	
      
    
</div><!-- /page -->

</body>
</html>