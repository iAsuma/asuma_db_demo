<?php
/**
 * 美化输出print_r
 */
function pr($param)
{
    header('Content-Type:text/html; charset=utf-8');
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

/**
 * 实例化Logic模型
 */
function LG($model){
    empty($model) && throw_exception('实例化Logic模型错误');
    $logic = D($model, 'Logic');
    return $logic;
}