<?php
namespace app\home\controller;
use think\Db;
use think\Controller;
class Common extends Controller{
    protected $site_config = null;
    //导航和底部信息
    public function _initialize(){
        if(isMobile()){
            header('location:'.url('mobile/index/index'));
        }

        //顶部导航
        $cat = db('category');
        $nav = $cat->where('parentid',0)->field("catname,id,parentid,url")->order('listorder asc')->select();
        foreach($nav as $k=>$v){
            $nav[$k]['url'] = url("{$v['url']}");
        }
        $this->assign('nav',$nav);
        //底部信息
        $system = db('system');
        $site_config = $system->where('id',1)->find();
        $this->assign('sArr',$site_config);

    }

}