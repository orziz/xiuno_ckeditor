<?php

!defined('DEBUG') AND exit('Access Denied.');

$tablepre = $db->tablepre;

db_exec("ALTER TABLE {$tablepre}kv DROP COLUMN ckeditor_config;");
db_exec("ALTER TABLE {$tablepre}post DROP COLUMN message_cache;");

kv_delete('ckeditor_config');