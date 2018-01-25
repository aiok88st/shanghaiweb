<?php
namespace app\ch\controller;
use think\Controller;
use think\Db;
class Shop extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        $ad = db('ad');
        $top = $ad->where('type_id',13)->order('sort asc')->find();
        $this->assign('top',$top);
        $article = db("article");
        $data = $article->where("open",1)->where("catid",11)->order("listorder asc")->find();
        $cat = db('category');
        $arr = $cat->where('id',$data['catid'])->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('data',$data);
        $this->assign('catid','11');
        return $this->fetch();
    }


}