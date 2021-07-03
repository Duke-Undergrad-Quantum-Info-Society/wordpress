<?php

namespace OCDI;

use \Fansee_Themes_Demo_Data\Base;

$ocdi = OneClickDemoImport::get_instance();
$importer = Base::get_instance()->get_module('importer');
$predefined_themes = $importer->import_files();
?>
<div class="wrap ftdd-importer-wrapper">
	<div class="ocdi ftdd-importer">

		<div class="ftdd-title-n-content">
			<h2 class="ocdi__title"><?php esc_html_e('Fansee Themes Demo Importer', 'fansee-themes-demo-data'); ?></h2>
			<p class="notice-text">Importing a demo site and customizing it is a great way to save your development time. The demo sites can be imported from the demo listing "import" button below.</p>
		</div>

		<?php
		// Display warrning if PHP safe mode is enabled, since we wont be able to change the max_execution_time.
		if (ini_get('safe_mode')) {
			printf(
				esc_html__('%sWarning: your server is using %sPHP safe mode%s. This means that you might experience server timeout errors.%s', 'fansee-themes-demo-data'),
				'<div class="notice  notice-warning  is-dismissible"><p>',
				'<strong>',
				'</strong>',
				'</p></div>'
			);
		}
		?>

		<div class="ocdi__gl-search-wrapper">
			<div class="ocdi__gl-search">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
					<path d="M225.474,0C101.151,0,0,101.151,0,225.474c0,124.33,101.151,225.474,225.474,225.474    c124.33,0,225.474-101.144,225.474-225.474C450.948,101.151,349.804,0,225.474,0z M225.474,409.323    c-101.373,0-183.848-82.475-183.848-183.848S124.101,41.626,225.474,41.626s183.848,82.475,183.848,183.848    S326.847,409.323,225.474,409.323z" />
					<path d="M505.902,476.472L386.574,357.144c-8.131-8.131-21.299-8.131-29.43,0c-8.131,8.124-8.131,21.306,0,29.43l119.328,119.328    c4.065,4.065,9.387,6.098,14.715,6.098c5.321,0,10.649-2.033,14.715-6.098C514.033,497.778,514.033,484.596,505.902,476.472z" />
				</svg>
				<input type="search" class="ocdi__gl-search-input  js-ocdi-gl-search" name="ocdi-gl-search" value="" placeholder="<?php esc_html_e('Search demos...', 'fansee-themes-demo-data'); ?>">
			</div>
		</div>

		<!-- OCDI grid layout -->
		<div class="ocdi__gl  js-ocdi-gl">
			<?php
			// Prepare navigation data.
			$categories = Helpers::get_all_demo_import_categories($predefined_themes);
			?>
			<?php if (!empty($categories)) : ?>

				<ul>
					<li class="active">
						<a href="#all" class="ocdi__gl-navigation-link  js-ocdi-nav-link">
							<?php esc_html_e('All', 'fansee-themes-demo-data'); ?>
							<span class="demo-count"><?php echo count($predefined_themes); ?></span>
						</a>
					</li>
					<?php foreach ($categories as $key => $name) : ?>
						<li><a href="#<?php echo esc_attr($key); ?>" class="ocdi__gl-navigation-link  js-ocdi-nav-link"><?php echo esc_html($name); ?></a></li>
					<?php endforeach; ?>
				</ul>

			<?php endif; ?>

			<div class="ocdi__gl-item-container  wp-clearfix  js-ocdi-gl-item-container">
				<?php foreach ($predefined_themes as $index => $import_file) : ?>
					<?php
					// Prepare import item display data.
					$img_src = isset($import_file['import_preview_image_url']) ? $import_file['import_preview_image_url'] : '';
					// Default to the theme screenshot, if a custom preview image is not defined.
					if (empty($img_src)) {
						$theme = wp_get_theme();
						$img_src = $theme->get_screenshot();
					}

					?>
					<div class="ocdi__gl-item js-ocdi-gl-item" data-categories="<?php echo esc_attr(Helpers::get_demo_import_item_categories($import_file)); ?>" data-name="<?php echo esc_attr(strtolower($import_file['import_file_name'])); ?>">
						<div class="ocdi__gl-item-image-container" style="background-image:url(<?php echo esc_url($img_src) ?>)">
							
						</div>
						<div class="ocdi__gl-item-footer<?php echo !empty($import_file['preview_url']) ? '  ocdi__gl-item-footer--with-preview' : ''; ?>">
							<h4 class="ocdi__gl-item-title" title="<?php echo esc_attr($import_file['import_file_name']); ?>">
								<?php echo esc_html($import_file['import_file_name']); ?>
							</h4>
							<div class="rt-builder-btn-wrapper">

								<?php if (!empty($import_file['preview_url'])) : ?>
									<a class="ocdi__gl-item-button  button preview-btn" href="<?php echo esc_url($import_file['preview_url']); ?>" target="_blank"><?php esc_html_e('Preview', 'fansee-themes-demo-data'); ?><!-- <span class="dashicons dashicons-welcome-view-site"></span> --></a>
								<?php endif; ?>

								<a class="ocdi__gl-item-button  button  button-primary" href="<?php echo $ocdi->get_plugin_settings_url(['step' => 'import', 'import' => esc_attr($index)]); ?>">
									<?php esc_html_e('Import', 'fansee-themes-demo-data'); ?><!-- <span class="dashicons dashicons-download"></span> -->
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<?php if( isset($importer->demos) && isset( $importer->demos[ 'pro' ] ) ): ?>
				<div class="fansee-goto-pro">
					<h2>Need more demos and support ?</h2>
					<a class="ocdi__gl-item-button  button" href="https://www.fanseethemes.com/downloads/<?php echo $importer->demos[ 'pro' ][ 'link' ]; ?>" target="_blank">Go to Pro</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>