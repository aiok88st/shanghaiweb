<?php
namespace app\ch\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index extends Common{

    public function index(){

        //首页顶部banner
        $ad = db('ad');
        $top = $ad->where('type_id',1)->order('sort asc')->select();
        $this->assign('top',$top);
        //首页关于我们轮播
        $about = $ad->where('type_id',14)->order('sort asc')->select();
        $this->assign('about',$about);
        //首页产品中心导航
        $cat = db('category');
        $productNav = $cat->where('lang',1)->where('parentid',10)->field("catname,id,parentid,url")->order('listorder asc')->select();
        $this->assign('productNav',$productNav);
        //首页推荐产品
        $product = db('product');
        $pArr = $product->where('status',2)->order('listorder asc')->limit(6)->select();
        $this->assign('pArr',$pArr);
        //首页展会
        $art = db('article');
        $artArr = $art->where('status',2)->where('catid',3)->order('listorder asc')->limit(3)->select();
        foreach($artArr as $k=>$v){
            $artArr[$k]['time'] = explode('-',date('Y-m-d',$v['createtime']));
        }
        $this->assign('artArr',$artArr);
        //底部信息
        $system = db('system');

        $sArr = $system->where('id',1)->find();

        $abus=$cat->where('id',2)->field('title,description')->find();
        $this->assign('abus',$abus);
        $this->assign('arr',$sArr);

        $this->assign('catid','');
        return $this->fetch();
    }

    public function product(){
        $catid = input('id');
        $where = array();  // 空的where条件
        if($catid){
            $where['catid'] = $catid;
        }
        $where['status']=2;
        $data = Db::name('product')->where($where)->order("listorder asc")->paginate(6);//返回的是对象
        $page = $data->render();//获取分页
        $list = $data->all();//获取数组;
        $pArr = [
            'list'=>$list,
            'page'=>$page
        ];
        return json($pArr);
    }


    public function search(Request $request){
        $ad = db('ad');
        $top = $ad->where('type_id',5)->order('sort asc')->find();
        $this->assign('top',$top);

        $where=1;

        $key=$request->param()['key'];

        $data = Db::name('product')->where(['title'=>['LIKE','%'.$key.'%']])->order("listorder asc")->paginate(12);//返回的是对象
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
            
        $this->assign('catid','10');
        return $this->fetch();
    }
}