<?php
namespace home\model;
use think\Model;
class Activity extends Model
{
	protected $table='activity';
    public function index()
    {
        var_dump($this->select());
    }
    public function test()
    {
        return 'index_test';
    }
}
