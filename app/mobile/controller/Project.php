<?php
namespace app\mobile\controller;
use think\Controller;
use think\Request;
use think\Db;
class Project extends Common{

    public function _initialize(){
        parent::_initialize();
        $nav = db('category')->where('id',60)->field("catname,keywords,description")->find();
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
        $art = db('picture')->where('catid=60')->order('listorder asc,id desc')->select();
        $this->assign('art',$art);
        return $this->fetch();
    }

    public function detail(){
        $id = input('id');
        $data = db('picture')->where('id',$id)->find();
        $img = explode(';',rtrim($data['images'],';'));
        $this->assign('data',$data);
        $this->assign('img',$img);
        return $this->fetch();
    }


}