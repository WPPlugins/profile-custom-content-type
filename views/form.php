<h2>Form Builder</h2>
<div id="notify">
		<span id="spinner" class="update"><img src="<?php echo admin_url(); ?>/images/wpspin_light.gif" alt="spinner" /> thinking...</span>	
</div>
<p class="info">Drag and drop the fields into place, just the way you want to. Don't forget to click the edit button for some customization. Also you don't have to click a save button. Enjoy</p>
<div id="col-container">
	
	<div id="col-right">
		<div class="col-wrap">
		
		<h3>Inactive Fields</h3>
		<ul id="bench" class="sort">
			<?php 
			$action = 'edit';
			$fields = $this->get_option('form','fields','bench');		 				
	 		if( is_array( $fields  ) ):
		 		foreach($fields  as $field):
		 			if( function_exists('profile_cct_'.$field['type'].'_field_shell') ):
		 				call_user_func('profile_cct_'.$field['type'].'_field_shell',$action,$field);
		 			else:
		 				do_action( 'profile_cct_field_shell_'.$field['type'], $action, $field, $user_data[ $field['type'] ] );
		 			endif;
		 		endforeach;
	 		endif;
			?>
		</ul>
		<p class="info"><em>Place fields that you don't want to display on the page above.</em></p>
			
		</div>
	</div><!-- /col-right -->

	<div id="col-middle">
		<div id="preview-form" class="col-wrap">
		<h3>Preview</h3>
		
		<?php
			$data = array();
			do_action('profile_cct_form',$action,$data,"form");
		?>
		</div>
	</div><!-- /col-left -->

</div>
