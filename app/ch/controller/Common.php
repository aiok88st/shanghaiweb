<?php
namespace app\ch\controller;
use think\Db;
use think\Controller;
class Common extends Controller{
    public $title;
    //导航和底部信息
    public function _initialize(){
        //顶部导航
        $cat = db('category');
        $nav = $cat->where('lang',1)->where('parentid',0)->field("catname,id,parentid,url")->order('listorder asc')->select();

        $this->assign('nav',$nav);
        //底部信息
        $system = db('system');
        $sArr = $system->where('id',1)->find();

        $this->assign('sArr',$sArr);

    }

}