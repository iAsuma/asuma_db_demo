<?php
namespace Home\Controller;
use Think\Controller;
/**
 *  不使用PublicModel
 *  先执行demo.sql文件里的sql
 */
class Demo2Controller extends Controller 
{
	public function testDemo()
    {
        $model = D('Demo2');
        $info = $model -> getUseInfoS('1');
        pr($info);
    }
}