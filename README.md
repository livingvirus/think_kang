主要是把thinkphp5分离到vendor中作为一个独立的框架使用
调用https://github.com/livingvirus/framework
此仓库是引用现用以及上面的。尽可能兼容

引用一个define  CONF 配置文件路径
配置文件中定义runtime  apppath 等等 IS_WIN

Controller 作为外面可以访问的
View 作为模板


代码规范遵循 PSR2 PSR3 自动加载遵循 PSR4
Input 类
全部在 $GLOBALS 中  包含所有输入数据，全部从这里读取。

Response  统一输出数据

开发测试环境
wampserver3
sublime text 3+ phpfmt
phpfmt 配置
{
 "version": 4,
 "psr2": true,
 "psr1": true,
 "autocomplete": true,
 "enable_auto_align": true,
 "format_on_save": true,
 "indent_with_space": true,
 "php_bin":"D:/wamp64/bin/php/php7.0.0/php.exe",
}
