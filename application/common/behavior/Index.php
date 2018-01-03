<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3 0003
 * Time: 15:38
 */
namespace app\common\behavior;
use think\facade\Log;

class Index
{
    public function run()
    {
        $content=request()->header();
        $msg=json_encode($content);
        Log::record(111,'notice');
    }
}