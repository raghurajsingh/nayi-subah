<?php
define("DB_HOST",'localhost');
define("DB_USER",'root');
define("DB_PASSWORD",'');
define("DB_NAME",'nayi-subah');
define("MEMCACHE_PORT",'11211');
define("SITE_PATH",'localhost/nayi-subah');
//define("SITE_PATH",'http://nayisubah.in');

mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysql_select_db(DB_NAME);

?>