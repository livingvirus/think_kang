<?php

namespace home\controller;

class Index {

    public function index() {
        $test = new \home\model\activity;
        $test->index();
        //var_dump(\think\Config::get());
        echo 111;
        return 1222222;
    }

    public function test() {
        return 'index_test';
    }

}
