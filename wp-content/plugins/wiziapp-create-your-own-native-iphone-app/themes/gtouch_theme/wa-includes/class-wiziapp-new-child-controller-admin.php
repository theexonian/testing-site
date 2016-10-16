<?php
	class WiziappNewChildControllerAdminCallback
	{
		var $wp_customize;
		var $setting;
		var $method;
		var $type;

		function init($wp_customize, $setting, $method, $type = '')
		{
			$this->wp_customize = $wp_customize;
			$this->setting = $setting;
			$this->method = $method;
			$this->type = $type;
			add_action('customize_preview_'.$setting, array($this, 'preview'));
			add_action('customize_update_'.$setting, array($this, 'update'));
			add_action('customize_value_'.$setting, array($this, 'value'));
		}

		function update($value)
		{
			if ($this->type === 'boolean') {
				$value = !empty($value);
			}
			$method = 'set'.$this->method;
			wiziapp_new_child_settings()->$method($value);
		}

		function preview()
		{
			$value = $this->wp_customize->get_setting($this->setting)->post_value();
			$method = 'set'.$this->method;
			wiziapp_new_child_settings()->setPreview();
			wiziapp_new_child_settings()->$method($value);
		}

		function value()
		{
			$method = 'get'.$this->method;
			return wiziapp_new_child_settings()->$method();
		}
	}

	class WiziappNewChildControllerAdmin
	{
		/**
		 * To add new sections and controls to the Theme Customize screen.
		 *
		 * @see add_action('customize_register',$func)
		 * @param \WP_Customize_Manager $wp_customize
		 */
		function register($wp_customize)
		{
			$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

			$wp_customize->remove_section('title_tagline');

			$this->add_header_section($wp_customize);
			$this->add_color_section($wp_customize);
		}

		function add_header_section($wp_customize)
		{
			$wp_customize->add_section('wiziapp_new_child_header_customizing', array(
				'title' => __('App Header'),
				'priority' => 1,
				'capability' => 'edit_theme_options',
				'description' => __('Customize your App Header settings'),
			));
			
			/**
			 * 	Added Layout field
			 *
			 *  @author 1do
			 *  @date	17/07/2016
			 *
			 */
			$wp_customize->add_setting('wiziapp_new_child_theme_settings_header_type', array(
				'type' => 'wiziapp_new_child_theme_settings_header_type',
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
			));
			$wp_customize->add_control('wiziapp_new_child_theme_settings_header_type', array(
				'label' => 'Layout',
				'section' => 'wiziapp_new_child_header_customizing',
				'type'           => 'radio',
				'choices'        => array(
					'text'   => __('Text Header'),
					'image'  => __('Image Header'),
				),
			));
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_theme_settings_header_type', 'AppHeaderType');
			
			$wp_customize->add_setting('wiziapp_new_child_settings_header_title', array(
				'type' => 'wiziapp_new_child_settings_header_title',
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
			));
			$wp_customize->add_control('wiziapp_new_child_settings_header_title', array(
				'label' => 'Title',
				'section' => 'wiziapp_new_child_header_customizing',
			));
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_settings_header_title', 'AppHeaderTitle');

			$wp_customize->add_setting('wiziapp_new_child_settings_header_image', array(
			'type' => 'wiziapp_new_child_settings_header_image',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage',
			));
			$icon_select = new WP_Customize_Image_Control($wp_customize, 'wiziapp_new_child_settings_header_image', array(
			'label' => 'Choose Image (320/44 pixel)',
			'section' => 'wiziapp_new_child_header_customizing',
                            'description' => 'The header size should be 320*44 (center any image you add in), also if you have created an image header with a light color like white or transparent, make sure the “BackGround” color on the “App Header” settings (Text Header) will provide the required contradiction. ',
			));
			$wp_customize->add_control($icon_select);
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_settings_header_image', 'AppHeaderImage');
			
			/**
			 * 	Added Title Color field
			 *
			 *  @author 1do
			 *  @date	14/07/2016
			 *
			 */
			$wp_customize->add_setting('wiziapp_new_child_theme_settings_header_color', array(
			'type' => 'wiziapp_new_child_theme_settings_header_color',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage',
			));
			$background_select = new WP_Customize_Color_Control($wp_customize, 'wiziapp_new_child_theme_settings_header_color', array(
				'label' => 'Title Color',
				'section' => 'wiziapp_new_child_header_customizing',
			));
			$wp_customize->add_control($background_select);
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_theme_settings_header_color', 'AppHeaderColor');
			
			/**
			 * 	Added Title Background Color field
			 *
			 *  @author 1do
			 *  @date	17/07/2016
			 *
			 */
			 $wp_customize->add_setting('wiziapp_new_child_theme_settings_header_background', array(
			'type' => 'wiziapp_new_child_theme_settings_header_background',
			'capability' => 'edit_theme_options',
			'transport' => 'postMessage',
			));
			$background_select = new WP_Customize_Color_Control($wp_customize, 'wiziapp_new_child_theme_settings_header_background', array(
				'label' => 'Background Color',
				'section' => 'wiziapp_new_child_header_customizing',
			));
			$wp_customize->add_control($background_select);
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_theme_settings_header_background', 'AppHeaderBackground');
		}

		function add_color_section($wp_customize)
		{
			$wp_customize->add_section('wiziapp_new_child_color_customizing', array(
				'title' => __('Colors'),
				'priority' => 2,
				'capability' => 'edit_theme_options',
				'description' => __('Customize your App colors'),
			));

			$wp_customize->add_setting('wiziapp_new_child_settings_content_color', array(
				'type' => 'wiziapp_new_child_settings_content_color',
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
			));
			add_action('customize_render_control_' . 'wiziapp_new_child_settings_content_color', array($this, 'show_edit_css_link'));
			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wiziapp_new_child_settings_content_color', array(
				'label' => __('Text Color'),
				'section' => 'wiziapp_new_child_color_customizing',
			)));
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_settings_content_color', 'AppContentColor');

			$wp_customize->add_setting('wiziapp_new_child_settings_start_background_color', array(
				'type' => 'wiziapp_new_child_settings_start_background_color',
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
			));
			$background_select = new WP_Customize_Color_Control($wp_customize, 'wiziapp_new_child_settings_start_background_color', array(
				'label' => 'Start Background Color',
				'section' => 'wiziapp_new_child_color_customizing',
			));
			$wp_customize->add_control($background_select);
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_settings_start_background_color', 'AppContentStartBackground');

			$wp_customize->add_setting('wiziapp_new_child_settings_end_background_color', array(
				'type' => 'wiziapp_new_child_settings_end_background_color',
				'capability' => 'edit_theme_options',
				'transport' => 'postMessage',
			));
			$background_select = new WP_Customize_Color_Control($wp_customize, 'wiziapp_new_child_settings_end_background_color', array(
				'label' => 'End Background Color',
				'section' => 'wiziapp_new_child_color_customizing',
			));
			$wp_customize->add_control($background_select);
			$callback = new WiziappNewChildControllerAdminCallback();
			$callback->init($wp_customize, 'wiziapp_new_child_settings_end_background_color', 'AppContentEndBackground');
		}

		function show_edit_css_link()
		{
?>
			<li>
				<a href="<?php echo add_query_arg(array('theme' => 'gtouch_theme',), get_admin_url(get_current_blog_id(), 'theme-editor.php')); ?>">
					Edit CSS
				</a>
			</li>
<?php
		}

		function theme_deactivation()
		{
			wiziapp_new_child_settings()->deleteAll();
		}
	}

	$wiziapp_new_child_admin = new WiziappNewChildControllerAdmin();
	add_action('customize_register', array($wiziapp_new_child_admin, 'register'));
	add_action('switch_theme', array($wiziapp_new_child_admin, 'theme_deactivation'));
