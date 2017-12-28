<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller 
{
    public function testDemo1()
    {
        $model = D('Demo');
        $info = $model -> getUseInfo1('1');
        pr($info);
    }

    public function testDemo2()
    {
        $model = D('Demo');
        
        $info = $model -> getUseInfo2('1');
        pr($info);

        $info_s = $model -> getUseInfo2_s();
        pr($info_s);
    }

    public function testDemo3(Type $var = null)
    {
        $model = D('Demo');
        
        $info = $model -> getUseInfo3('1');
        pr($info);

        $info_s = $model -> getUseInfo3_s();
        pr($info_s);
    }

    public function testDemo4(Type $var = null)
    {
        $model = D('Demo');
        $data = array(
            'post_name' => '你好啊',
            'post_qq' => '100861111'
        );

        $result = $model -> insertUseInfo($data);
        var_dump($result);
    }

    public function testDemo5(Type $var = null)
    {
        $model = D('Demo');
        $data = array(
            'post_id_1' => '2',
            'post_name_1' => '测试2事务',
            'post_name_2' => '事务插入',
            'post_qq_2' => '100101111'
        );

        $result = $model -> executeUseInfo($data);
        var_dump($result);
    }

    public function testDemo6(Type $var = null)
    {
        $model = D('Demo');
        $data = array(
            'post_id' => '3',
            'post_name' => '测试3_333'
        );

        $result = $model -> updateUseInfo($data);
        var_dump($result);
    }

    public function testDemo7(Type $var = null)
    {
        $model = D('Demo');
        $data = array(
            'post_name' => 'haha',
            'post_qq' => '5555555'
        );

        $result = $model -> insertUseInfoS($data);
        var_dump($result);
    }
}
