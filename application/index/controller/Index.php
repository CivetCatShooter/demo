<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return time();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function demo1()
    {
        $event = \think\facade\App::controller('Blog','event');
        echo $event->update(5); // 输出 update:5
        echo $event->delete(5); // 输出 delete:5
    }
}
