<?php
namespace app\index\model;
use think\Model;
class ApplogModel extends Model{
    protected $tableName = 'app_log';
    protected $pk = 'id';

    public $_auto = array (
    );
    
    public function __construct() {
        parent::__construct();
    }

    public function getErrorList($where = "", $page = 15){
        $order="error_log_id desc";
        return $this->where($where)->select();  //查询满足要求的总记录数
    }
}
