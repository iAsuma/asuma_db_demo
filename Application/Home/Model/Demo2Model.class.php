<?php
namespace Home\Model;
use Think\Model;
/**
 * 这里没有继承PublicModel
 */
class Demo2Model extends Model {
	protected $autoCheckFields = false; //虚拟模型关闭自动检测

	public function getUseInfoS($id)
	{
		return $this->table('business_tbl')->field('id,name')->where("id = $id")->find();
	}
}