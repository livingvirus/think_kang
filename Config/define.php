<?php
return [
	'THINK_START_TIME' => microtime(true),
	'THINK_START_MEM' => memory_get_usage(),
	'EXT' => '.php',
	'CONF_EXT' => '',
	'ENV_PREFIX' => 'PHP_',
	'DS' => DIRECTORY_SEPARATOR,
	'THINK_PATH' => __DIR__,
	'APP_PATH' => '',
	'RUNTIME_PATH' => '',
	'LOG_PATH' => '',
	'CACHE_PATH' => '',
	'TEMP_PATH' => '',
	'ENV_PREFIX' => '',
	'EXTEND_PATH' => '',
	'IS_CLI' => PHP_SAPI == 'cli' ? true : false,
	'IS_WIN' => strpos(PHP_OS, 'WIN') !== false,
];
