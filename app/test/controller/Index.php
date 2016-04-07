<?php
namespace app\test\controller;
class Index
{
    public function index()
    {
    	S('name','asdfasd');
    	$ApplogModel = new \app\index\model\ApplogModel;
    	var_dump($ApplogModel->getErrorList());exit;
    }
    public function test()
    {
    	return 'test_test';
    }
}
