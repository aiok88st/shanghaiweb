<?php
namespace app\ch\controller;
use think\Controller;
use think\Db;
class Contact extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){

        $article = db("article");
        $data = $article->where("open",1)->where("catid",8)->order("listorder asc")->select();

        $cat = db('category');
        $arr = $cat->where('id',8)->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('data',$data);
        $this->assign('catid','8');
        return $this->fetch();
    }


}