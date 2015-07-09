<?php

function remove_margin_padding_from_photo_gallery(){
	?>
	<script type="text/javascript">
		// script dependent on jQuery
		jQuery(document).ready(function(){
			var $ = jQuery;
			
			var $spun1 = $('.bwg_standart_thumb_spun1_0');
			$spun1.css({'margin' : '0px', 'padding' : '0px'});			
			$spun1.removeProp('width');
			$spun1.removeProp('height');
			
			var $spun2 = $('.bwg_standart_thumb_spun2_0');
			$spun2.removeProp('width');
			$spun2.removeProp('height');
			
			var $spun_img = $('.bwg_standart_thumb_img_0');
			$spun_img.css({'max-width' : '100%', 'max-height' : '100%'});	
			$spun_img.removeProp('width');
			$spun_img.removeProp('height');			
		});
	</script>
	<?php
}
add_action( 'wp_footer', 'remove_margin_padding_from_photo_gallery');

?>