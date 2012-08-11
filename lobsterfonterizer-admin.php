<?php

// Admin Page Content

function lobsterfonterizer_admin() {

	// Globalize options

	global $lobsterfonterizer_options;

	ob_start(); ?>
		
		<div class="wrap">
			<div id="icon-options-general" class="icon32"><br /></div>
			<h2>Lobsterfonterizer Options</h2>

			<form method="post" action="options.php">
 
				<?php settings_fields('lobsterfonterizer_settings_group'); ?>
	 
				<h4><?php _e('Enable / Disable The Lobsterfonterification', 'lobsterfonterizer_domain'); ?></h4>
				<p>
					<input id="lobsterfonterizer_settings[enabled]" name="lobsterfonterizer_settings[enabled]" type="checkbox" value="1" <?php checked($lobsterfonterizer_options['enabled'], 1); ?> />
					<label class="description" for="lobsterfonterizer_settings[enabled]"><?php _e('Lobsterfonterize', 'lobsterfonterizer_domain'); ?></label>
				</p>
	 
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Lobster Me!', 'lobsterfonterizer_domain'); ?>" />
				</p>
 
			</form>

		</div>

	<?php echo ob_get_clean();

}

// Admin Menu Creation

function lobsterfonterizer_add_menu() {

	add_options_page('Lobsterfonterizer', 'Lobsterfonterizer', 'manage_options', 'lobsterfonterizer', 'lobsterfonterizer_admin');

}

add_action('admin_menu', 'lobsterfonterizer_add_menu');

// Register Plugin Settings

function lobsterfonterizer_register_settings() {

	register_setting('lobsterfonterizer_settings_group', 'lobsterfonterizer_settings');

}
add_action('admin_init', 'lobsterfonterizer_register_settings');
