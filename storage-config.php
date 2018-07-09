<?php

// Video storage dir
define('VIDEO_STORAGE_DIR', '/data/storage');

// Karaoke storage dir
define('KARAOKE_STORAGE_DIR', '/data/karaoke');

// Records storage dir
define('RECORDS_DIR', '/data/records');

// Nfs home path. Are deprecated
define('NFS_HOME_PATH', '/data/nfs');
// Use login and password from the configuration file. (api_auth_login and api_auth_password in server/custom.ini)
define('API_URL', 'http://'.(getenv('MINISTRA_AUTH_LOGIN') ?: 'ministra').':'.(getenv('MINISTRA_AUTH_PASSWORD') ?: 'ministra').'@'.(getenv('MINISTRA_HOST')?:'ministra').'/stalker_portal/api/');
// Stalker portal url
define('PORTAL_URL', 'http://'.getenv('MINISTRA_HOST').'/stalker_portal/');
//Storage name
define('STORAGE_NAME', 'bb3');
define('ASTRA_RECORDER', false);
define('DUMPSTREAM_BUFFERING', 1); // set -1 for system default
