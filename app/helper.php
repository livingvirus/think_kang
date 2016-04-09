<?php
namespace app;

class Helper extends AnotherClass
{
    public static function getpage($count, $pagesize = 10)
    {
        $p = new \app\common\Page($count, $pagesize);
        $p->setConfig('header', '<div class="page-info">共<span>%TOTAL_ROW%</span>条记录 共<span>%TOTAL_PAGE%</span>页</div>');
        $p->setConfig('prev', '<i class="icon icon-page-prev"></i>');
        $p->setConfig('next', '<i class="icon icon-page-next"></i>');
        $p->setConfig('last', '<i class="icon icon-page-last"></i>');
        $p->setConfig('first', '<i class="icon icon-page-first"></i>');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;
        return $p;
    }
}
