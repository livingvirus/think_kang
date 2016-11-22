<?php
return [
	// +----------------------------------------------------------------------
	// | 异常及错误设置
	// +----------------------------------------------------------------------
	// 异常页面的模板文件
	'exception_tmpl' => CONF_PATH . '../' . 'View/system/exception.php',
	// 错误显示信息,非调试模式有效
	'error_message' => '页面错误！请稍后再试～',
	// 显示错误信息
	'show_error_msg' => false,
	// 异常处理handle类 留空使用 \think\exception\Handle
	'exception_handle' => '',
	// 默认跳转页面对应的模板文件
	'dispatch_success_tmpl' => 'tpl/dispatch_jump.tpl',
	'dispatch_error_tmpl' => 'tpl/dispatch_jump.tpl',
	// 视图输出字符串内容替换
	'view_replace_str' => [],
	'page_trace' => CONF_PATH . '../' . 'View/system/Trace.php',
];
