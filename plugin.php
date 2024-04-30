<?php

/**
 * @package chamilo.plugin adv_oel_convert
 * @author Damien Renou / 
*/
/* Plugin config */

require_once __DIR__.'/../../main/inc/global.inc.php';

$lib_url = __DIR__.'/chamilo_boost_stats_times.php';

if (file_exists($lib_url)) {

    require_once $lib_url;

    $plugin_info = chamilo_boost_stats_times::create()->get_info();

    $plugin_info['title'] = 'adv_oel_convert';
    $plugin_info['comment'] = "adv_oel_convert";
    $plugin_info['version'] = '1.0';
    $plugin_info['author'] = 'Damien RENOU';

    // The plugin configuration
    $form = new FormValidator('form');

    $defaults = array();

    $url_id = api_get_current_access_url_id();

    $form->addButtonSave(get_lang('Save'));

    $plugin_info['settings_form'] = $form;

    $plugin_info['templates'] = array('inc/template.tpl');

} else {
    
    
}
