<?php
namespace app\ch\controller;
use think\Controller;
use think\Db;
use clt\Bootstrap;

class Exhibition extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
        //历届展会
        $ad = db('ad');
        $top = $ad->where('type_id',11)->order('sort asc')->find();
        $this->assign('top',$top);
        $data = Db::name('article')->where("open",1)->where("catid",3)->order("listorder asc")->paginate(9);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        foreach($list as $k=>$v){
            $list[$k]['time'] = explode('-',date('Y-m-d',$v['createtime']));
        }
        $cat = db('category');
        $arr = $cat->where('id',3)->field("title,keywords,description")->find();
        $arrs['title'] = $arr['title'];
        $arrs['key'] = $arr['keywords'];
        $arrs['des'] = $arr['description'];
        $this->assign('arr',$arrs);
        $this->assign('list',$list);
        $this->assign('page',$page);
        $this->assign('catid','3');
        return $this->fetch();
    }

    public function detail(){

        $id = input('id');

        $enart = db('article')->where('id',$id)->find();

        $prev=db('article')
            ->where('catid',3)
            ->where('listorder','<',$enart['listorder'])

            ->order('listorder asc,id desc')
            ->field('title,id')
            ->limit(1)
            ->find();
        $next=db('article')
            ->where('catid',3)
            ->where('listorder','>',$enart['listorder'])

            ->order('listorder asc,id desc')
            ->field('title,id')
            ->limit(1)
            ->find();

        $this->assign('prev',$prev);
        $this->assign('next',$next);

        $time = date('Y-m-d',$enart['createtime']);
        $timeArr = explode('-',$time);
        $tArr = [
            'date'=>$timeArr[1],
            'day'=>$timeArr[2],
        ];
        $this->assign('tArr',$tArr);
        $arrs['title'] = $enart['title'];
        $arrs['key'] = $enart['keywords'];

        $arrs['des'] = $enart['description'];
        $this->assign('arr',$arrs);
        $this->assign('detail',$enart['content']);
        $ad = db('ad');
        $top = $ad->where('type_id',11)->order('sort asc')->select();
        $this->assign('catid','3');
        $this->assign('top',$top);

        return $this->fetch();
    }

}


