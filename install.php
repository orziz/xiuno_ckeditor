<?php
!defined('DEBUG') AND exit('Forbidden');

$ckeditor_config = array(
    "language"=>"zh-cn", 
    "style"=>"
        /* 编辑框最低高度 */
        .ck-editor__editable { min-height: 150px; }
    "
);
kv_set("ckeditor_config", $ckeditor_config);

?>