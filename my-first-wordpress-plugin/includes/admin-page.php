<?php

function mfwp_options_page() {

	global $mfwp_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>My First WordPress Plugin Options</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('mfwp_settings_group'); ?>
		
			<h4><?php _e('Enable', 'mfwp_domain'); ?></h4>
			<p>
				<input id="mfwp_settings[enable]" name="mfwp_settings[enable]" type="checkbox" value="1" <?php checked(1, $mfwp_options['enable']); ?> />
				<label class="description" for="mfwp_settings[enable]"><?php _e('Display the Follow Me on Twitter link', 'mfwp_domain'); ?></label>
			</p>
			
			<h4><?php _e('Twitter Information', 'mfwp_domain'); ?></h4>
			<p>
				<input id="mfwp_settings[twitter_url]" name="mfwp_settings[twitter_url]" type="text" value="<?php echo $mfwp_options['twitter_url']; ?>"/>
				<label class="description" for="mfwp_settings[twitter_url]"><?php _e('Enter your Twitter URL', 'mfwp_domain'); ?></label>
			</p>
			
			<h4><?php _e('Theme', 'mfwp_domain'); ?></h4>
			<p>
				<?php $styles = array('blue', 'red'); ?>
				<select name="mfwp_settings[theme]" id="mfwp_settings[theme]">
					<?php foreach($styles as $style) { ?>
						<?php if($mfwp_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
						<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
					<?php } ?>
				</select>
			</p>
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'mfwp_domain'); ?>" />
			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}

function mfwp_add_options_link() {
	add_options_page('My First WordPress Plugin Options', 'My First Plugin', 'manage_options', 'mfwp-options', 'mfwp_options_page');
}
add_action('admin_menu', 'mfwp_add_options_link');

function mfwp_register_settings() {
	// creates our settings in the options table
	register_setting('mfwp_settings_group', 'mfwp_settings');
}
add_action('admin_init', 'mfwp_register_settings');