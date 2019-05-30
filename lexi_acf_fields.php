<?php

// Is ACF installed and activated?
if (function_exists('get_field')) {
    // Yes? Run our ACF function.
    lexi_acf_setup();
} else {
    // No? Lets notify the user using a Wordpress action.
    add_action('admin_notices', 'acf_admin_notice__error');
}

// Function to notify Users if ACF isn't installed.
function acf_admin_notice__error()
{
    $class = 'notice notice-error';
    $message = __('Hey! We noticed ACF isn\'t installed. Though it\'s not required, Lexi works best with ACF PRO installed.', 'sample-text-domain');

    printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_html($message));
}

// Function to run when ACF is installed.
function lexi_acf_setup()
{

  // Add the options page.
    if (function_exists('acf_add_options_page')) {
        $option_page = acf_add_options_page(array(
        'page_title' 	=> 'Lexi',
        'menu_title' 	=> 'Lexi',
        'menu_slug' 	=> 'lexi-settings',
        'capability' 	=> 'edit_posts',
        'redirect' 	=> false,
    'icon_url' => 'dashicons-admin-appearance'
    ));

        // Add in our fields
        if (function_exists('acf_add_local_field_group')):

        acf_add_local_field_group(array(
            'key' => 'group_5ceec6f0ac96b',
            'title' => 'Lexi Theme Settings',
            'fields' => array(
                array(
                    'key' => 'field_5ceec6fd52c1a',
                    'label' => 'Use Bootstrap?',
                    'name' => 'use_bootstrap',
                    'type' => 'true_false',
                    'instructions' => 'Enable/disable the included version of Bootstrap. Disable this if you plan on using a different version of bootstrap through a child theme. Warning: Core theme templates rely on Bootstrap!',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_5ceec77c52c1b',
                    'label' => 'Use FontAwesome?',
                    'name' => 'use_fontawesome',
                    'type' => 'true_false',
                    'instructions' => 'Enable/disable the included version of FontAwesome. Disable this if you plan on using a different version of bootstrap through a child theme, or simply want to avoid the added weight of FontAwesome.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'lexi-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));

        endif;
    }
}
