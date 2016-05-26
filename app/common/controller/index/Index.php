<?php
// 规范 默认全部路由到controller
//模块/文件名/方法名    app\controller\模块/文件名/方法名
namespace app\controller\index;

class Index
{
    public function index()
    {
        I();
    }
    public function test()
    {
        return 'index_test';
    }
}
