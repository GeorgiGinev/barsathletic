<?php
include_once('tgm-plugin-activation.php');

add_action('tgmpa_register', 'setup_plugins');

function setup_plugins()
{
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name' => 'Contact Form 7', // The plugin name.
            'slug' => 'contact-form-7', // The plugin slug (typically the folder name).
            'source' => 'https://wordpress.org/plugins/contact-form-7/', // The plugin source. It can be an external link, wordpress plugin repository or a GITHUB repository.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
            'is_callable' => '', // If set, this callable will be checked for availability to determine if a plugin is active.
        ),
        array(
            'name' => 'MailOptin', // The plugin name.
            'slug' => 'mailoptin', // The plugin slug (typically the folder name).
            'source' => 'https://wordpress.org/plugins/mailoptin/', // The plugin source. It can be an external link, wordpress plugin repository or a GITHUB repository.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
            'is_callable' => '', // If set, this callable will be checked for availability to determine if a plugin is active.
        ),
        array(
            'name' => 'Paid Memberships Pro', // The plugin name.
            'slug' => 'paid-memberships-pro', // The plugin slug (typically the folder name).
            'source' => 'https://wordpress.org/plugins/paid-memberships-pro/', // The plugin source. It can be an external link, wordpress plugin repository or a GITHUB repository.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
            'is_callable' => '', // If set, this callable will be checked for availability to determine if a plugin is active.
        ),
    );
    $config = array( /* To configure TGM Plugin Activation - Optional */);

    tgmpa($plugins, $config);
}