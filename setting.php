<?php

!defined('DEBUG') AND exit('Access Denied.');

$ckeditor_config = kv_get('ckeditor_config');

if($method == 'GET') {
    $style = form_textarea('css_style',$ckeditor_config['style'],'100%','200px');

    include _include(APP_PATH.'plugin/ph_ckeditor/setting.htm');
} else {
    $ckeditor_config['style'] = param('css_style');
    kv_set('ckeditor_config', $ckeditor_config);
    
    message(0, '修改成功');

}