<?php

// Add custom sections and settings to the Admin Customizer
class My_customizer
{

    public function __construct()
    {
        add_action("customize_register", array($this, 'register_customize_sections'));
    }


    public function register_customize_sections($wp_customize)
    {
        // Initialize sections

        $this->header_section($wp_customize);

        $this->hero_section($wp_customize);

        $this->service_section($wp_customize);
    }

    // Header section, settings and controls
    private function header_section($wp_customize)
    {
        // New section panel
        $wp_customize->add_section("header-section", array(
            "title" => "Header",
            "priority" => 2,
            "description" => __("Modify the website header", "landingtheme")
        ));

        // // Add Setting
        // $wp_customize-> add_setting("basic-author-callout-display", array(
        //     "default" => "No",
        //     "sanitize_callback" => array($this, "sanitize_custom_option")
        // ));

        // // Add control
        // $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "basic-author-callout-display-control", array(
        //     "label"=> "Display this section?",
        //     "section" => "header-section",
        //     "settings" => "basic-author-callout-display",
        //     "type" => "select",
        //     "choices" => array("No" => "No", "Yes" => "Yes")
        // )));


        // Add Author image
        $wp_customize->add_setting("header-logo-image", array(
            "default" => "",
            "type" => "theme_mod",
            "capability" => "edit_theme_options",
            "sanitize_callback" => array($this, "sanitize_custom_url")
        ));

        // Image control
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "basic-author-collout-image-control", array(
            "label" => "Logo",
            "section" => "header-section",
            "settings" => "header-logo-image",
            "width" => 500,
            "height" => 310
        )));



        // Display Before number text
        $wp_customize->add_setting("header-before-num", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        // before number control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "header-before-num-control", array(
            "label" => "Before Phone Number",
            "section" => "header-section",
            "settings" => "header-before-num",
            "type" => "text",
        )));


        // Display Phone Number
        $wp_customize->add_setting("header-num", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));
        // number control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "header-num-control", array(
            "label" => "Phone Number",
            "section" => "header-section",
            "settings" => "header-num",
            "type" => "text"
        )));
    }




    // Hero section
    private function hero_section($wp_customize)
    {
        // register section
        $wp_customize->add_section("hero-section", array(
            "title" => "Hero",
            "priority" => 2,
            "description" => __("The first part of the page", "landingtheme"),
        ));


        // Add rating text
        $wp_customize->add_setting("hero-rating-text", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "hero-rating-text-control", array(
            "label" => "Rating Text",
            "section" => "hero-section",
            "settings" => "hero-rating-text",
            "type" => "text"
        )));

        // Add hero title
        $wp_customize->add_setting("hero-title", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "hero-title-control", array(
            "label" => "Main Title",
            "section" => "hero-section",
            "settings" => "hero-title",
            "type" => "text"
        )));


        // Add we help you
        $wp_customize->add_setting("hero-help", array(
            "sanitize_callback" => "customizer_repeater_sanitize"
        ));


        $wp_customize->add_control(new Customizer_Repeater($wp_customize, "hero-help-control", array(
            'label'   => esc_html__('We Help You Section', 'customizer-repeater'),
            "section" => "hero-section",
            "settings" => "hero-help",
            'customizer_repeater_text_control' => true,
        )));

        // Add form title
        $wp_customize->add_setting("hero-form-title", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "hero-form-title-control", array(
            "label" => "Form Title",
            "section" => "hero-section",
            "settings" => "hero-form-title",
            "type" => "text"
        )));
    }


    private function service_section($wp_customize)
    {
        // register section
        $wp_customize->add_section("service-section", array(
            "title" => "Service Section",
            "priority" => 2,
            "description" => __("The Service Section", "landingtheme"),
        ));


        // Add service title - red part
        $wp_customize->add_setting("service-title-red", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "service-title-red-control", array(
            "label" => "Title - Red Part",
            "section" => "service-section",
            "settings" => "service-title-red",
            "type" => "text"
        )));
        
        // Add service title
        $wp_customize->add_setting("service-title", array(
            "default" => "",
            "sanitize_callback" => array($this, "sanitize_custom_text")
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, "service-title-control", array(
            "label" => "Title",
            "section" => "service-section",
            "settings" => "service-title",
            "type" => "text"
        )));


        // Add service cards
        $wp_customize->add_setting("service-cards", array(
            "sanitize_callback" => "customizer_repeater_sanitize"
        ));


        $wp_customize->add_control(new Customizer_Repeater($wp_customize, "service-cards-control", array(
            'label'   => esc_html__('Cards', 'customizer-repeater'),
            "section" => "service-section",
            "settings" => "service-cards",
            // 'customizer_repeater_image_control' => true,
            'customizer_repeater_icon_control' => true,
            'customizer_repeater_title_control' => true,
            'customizer_repeater_subtitle_control' => true
        )));

    }



















    // private function footer_section($wp_customize)
    // {
    //     // register section
    //     $wp_customize->add_section("footer_section", array(
    //         "title" => "Footer",
    //         "priority" => 2,
    //         "description" => __("Modify the website footer", "landingtheme"),
    //     ));


    //     // Add rating text
    //     $wp_customize->add_setting("hero-rating-text", array(
    //         "default" => "",
    //         "sanitize_callback" => array($this, "sanitize_custom_text")
    //     ));

    //     $wp_customize->add_control(new WP_Customize_Control($wp_customize, "hero-rating-text-control", array(
    //         "label" => "Rating Text",
    //         "section" => "footer_section",
    //         "settings" => "hero-rating-text",
    //         "type" => "text"
    //     )));    
    // }

    // Sanitize
    public function sanitize_custom_option($input)
    {
        return ($input === "No") ? "No" : "Yes";
    }

    public function sanitize_custom_text($input)
    {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function sanitize_custom_url($input)
    {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
}
