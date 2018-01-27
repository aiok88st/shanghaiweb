<?php
namespace app\mobile\controller;
use think\Controller;
use think\Db;
class Contact extends Common{
    public function _initialize(){
        parent::_initialize();
        $nav = db('category')->where('id',61)->field("catname,keywords,description")->find();
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
        $art = db('picture')->where('catid=61')->order('listorder asc,id desc')->limit(1)->select();
        foreach($art as $k=>$v){
            $art['k'.$k] = $v;
            $img = explode(';',rtrim($v['images'],';'));
        }
        $this->assign('art',$art);
        $this->assign('img',$img);
        return $this->fetch();
    }


}