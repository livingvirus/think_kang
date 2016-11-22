<?php
return [
	'CONF_EXT' => '',
	'ENV_PREFIX' => 'PHP_',
	'DS' => DIRECTORY_SEPARATOR,
	'APP_PATH' => '',
	'RUNTIME_PATH' => CONF_PATH . '../runtime/',
	'LOG_PATH' => CONF_PATH . '../runtime/log/',
	'CACHE_PATH' => CONF_PATH . '../runtime/cache/',
	'TEMP_PATH' => CONF_PATH . '../runtime/temp/',
	'VIEW_PATH' => '',
	'ENV_PREFIX' => 'PHP_',
	'EXTEND_PATH' => '',
	'IS_CLI' => (PHP_SAPI == 'cli' ? true : false),
	'IS_WIN' => (strpos(PHP_OS, 'WIN') !== false),
	'IS_AJAX' => (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? true : false),
];
