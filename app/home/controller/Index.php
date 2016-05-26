<?php
namespace home\controller;

class Index
{
    public function index()
    {
        I('username', 'testset');
        var_dump(I('username'));die;
    }
    public function test()
    {
        return 'index_test';
    }
}
