<?php
namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Request;

class About extends Common{
    public function _initialize()
    {
        parent::_initialize();
        $nav = db('category')->where('id',58)->field("catname,keywords,description")->find();
        $site = db('system')->where('id',1)->find();
        if($nav['keywords']){
            $site['key'] = $nav['keywords'].'-'.$site['key'];
        }
        if($nav['description']){
            $site['des'] = $nav['description'].'-'.$site['des'];
        }
        $site['title'] = $nav['catname'].'-'.$site['title'];
        $this->assign('info',$site);
    }

    public function index(){
        $art = db('picture')->where('catid=62')->order('listorder asc,id desc')->limit(1)->select();
        foreach($art as $k=>$v){
            $art['k'.$k] = $v;
            $img = explode(';',rtrim($v['images'],';'));
        }
        $this->assign('art',$art);
        $this->assign('img',$img);
        //team
        $team = db('picture')->where('catid=63')->order('listorder asc,id desc')->select();
        $this->assign('team',$team);
        //合作企业
        $hz_team = db('picture')->where('catid=64')->order('listorder asc,id desc')->select();
        $this->assign('hz_team',$hz_team);

        return $this->fetch();
    }


}