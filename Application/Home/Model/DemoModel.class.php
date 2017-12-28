<?php
namespace Home\Model;
class DemoModel extends PublicModel 
{
    protected $autoCheckFields = false; //虚拟模型关闭自动检测

    /**
     * 查询business_tbl表中的一条数据
     */
    public function getUseInfo1($id)
    {
        return $this->think_select_one('business_tbl', array('id' => $id));
    }

    /**
     * 查询business_tbl表中的多条数据
     */
    public function getUseInfo2($status)
    {
        return $this->think_select_all('business_tbl', array('status' => $status));
    }

    /**
     * 查询business_tbl表中的多条数据
     */
    public function getUseInfo2_s()
    {
        return $this->think_select_all('business_tbl');
    }

    /**
     * 查询business_tbl表中的一条数据
     */
    public function getUseInfo3($id)
    {
        $sql = "SELECT *FROM business_tbl WHERE id = :id";
        $param = array(
            'id' => $id
        );
        return $this->native_select_one($sql, $param);
    }

    /**
     * 查询business_tbl表中的多条数据
     */
    public function getUseInfo3_s($status)
    {
        $sql = "SELECT *FROM business_tbl WHERE status = :status";
        $param = array(
            'status' => $status
        );
        return $this->native_select_all($sql, $param);
    }

    /**
     * 往business_tbl表中插入数据
     */
    public function insertUseInfo($data)
    {
        $sql = "INSERT INTO business_tbl (id,name,status,create_time,qq) VALUES (:id,:name,:status,:create_time,:qq)";
        $param = array(
            'id' => $this->last_sequence_id('business_tbl'),
            'name' => $data['post_name'],
            'status' => 0,
            'create_time' => time(),
            'qq' => $data['post_qq']
        );
        return $this->native_execute($sql, $param);
    }

    /**
     * 事务操作
     */
    public function executeUseInfo($data)
    {
        $sqlArr[] = "UPDATE business_tbl SET name = :name WHERE id = :id";
        $paramArr[] = array(
            'name' => $data['post_name_1'],
            'id' => $data['post_id_1']
        );

        $sqlArr[] = "INSERT INTO business_tbl (id,name,status,create_time,qq) VALUES (:id,:name,:status,:create_time,:qq)";
        $paramArr[] = array(
            'id' => $this->last_sequence_id('business_tbl'),//若sql数组执行错误，last_sequence_id方法发生的改变因在事务之外不会回滚
            'name' => $data['post_name_2'],
            'status' => 0,
            'create_time' => time(),
            'qq' => $data['post_qq_2']
        );

        return $this->native_transaction($sqlArr, $paramArr);
    }

    /**
     * 更新business_tbl表中的某条数据
     */
    public function updateUseInfo($data)
    {
        return $this->think_update('business_tbl', array('name' => $data['post_name']), array('id' => $data['post_id']));
    }

    /**
     * business_tbl表中插入一条数据
     */
    public function insertUseInfoS($data)
    {
        $param = array(
            'name' => $data['post_name'],
            'status' => 0,
            'create_time' => time(),
            'qq' => $data['post_qq']
        );
        return $this->think_insert('business_tbl', $param, false);
    }

    public function FunctionName1(Type $var = null)
    {
        //$this->think_delete(); 与think_update方法使用方式一样
    }

    public function FunctionName(Type $var = null)
    {
        //$this->think_count();统计总数 与think_select_one方法使用方式一样
    }
}
