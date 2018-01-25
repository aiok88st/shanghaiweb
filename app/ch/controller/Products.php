<?php
namespace app\ch\controller;
use think\Controller;
use think\Db;
use think\Request;

class Products extends Common{
//    public function _initialize(){
////        parent::_initialize();
//    }
    public function index(){
        $ad = db('ad');
        $top = $ad->where('type_id',5)->order('sort asc')->find();
        $this->assign('top',$top);
        $catid=input('catid','');
        $where=1;
        if($catid){
            $where=[
                'catid'=>$catid
            ];
        }
        $data = Db::name('product')->where($where)->order("listorder asc")->paginate(12);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        $cat = db('category');
        $arr = $cat->where('id',10)->field("title,keywords,description")->find();
        $productNav = $cat->where('lang',1)->where('parentid',10)->field("catname,id,parentid,url")->order('listorder asc')->select();
        $this->assign('productNav',$productNav);
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('data',$list);
        $this->assign('page',$page);
        $this->assign('chiID',$catid);
        $this->assign('catid','10');
        return $this->fetch();
    }

    public function product(){

        $catid = input('catId');

        $where = array();  // 空的where条件
        if($catid){
            $where['catid'] = $catid;
        }
        $where['status']=2;
        $data = Db::name('product')->where($where)->order("listorder asc")->paginate(12);//返回的是对象

        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;

        $pArr = [
            'list'=>$list,
            'page'=>$page
        ];
        return json($pArr);
    }

    public function productDetails(){
        $id = input('id');
        $enarticle = db('product');
        $list = $enarticle->where('id',$id)->find();
        if($list){
            $arrs['title'] = $list['title'];
            $arrs['key'] = $list['keywords'];
            $arrs['des'] = $list['description'];
            $this->assign('arr',$arrs);
            $images = explode(';',rtrim($list['images'],';'));
            $this->assign('images',$images);
            $this->assign('list',$list);
            $other = $enarticle->where('catid',$list['catid'])->order("listorder asc")->limit(3)->select();
            $this->assign('other',$other);
            $this->assign('catid','10');
            return $this->fetch();
        }else{
            throw new \think\Exception('页面丢失');
        }
    }


}