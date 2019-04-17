<?php

function pjg_remove_cat_placeholder() {
    ?>
		<script>
		jQuery(document).ready(function() {
	
			jQuery('.product-category img').each ( function (index) {
				
				placeholder_src = jQuery(this).attr('src');
		
				if (placeholder_src.indexOf('images/placeholder.png') >= 0 )
				{
					jQuery(this).hide();
				}
				
			});		

	}); 
        </script>
    <?php
}

add_action('wp_head', 'pjg_remove_cat_placeholder');
  
?>
