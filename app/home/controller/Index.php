<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Common{

    public function _initialize(){
        parent::_initialize();
        $nav = db('category')->where('id',57)->field("catname,keywords,description")->find();
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
        $art = db('picture')->where('catid=57')->order('listorder asc,id desc')->select();
        $this->assign('art',$art);
        return $this->fetch();
    }


}