<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use clt\Leftnav;
use app\admin\model\System as SysModel;
class System extends Common
{
    /********************************站点管理*******************************/
    //站点设置
    public function system($sys_id=1){
        $table = db('system');
        if(request()->isPost()) {
            $datas = input('post.');
            if($table->where('id',$datas['id'])->update($datas)!==false) {
                savecache('System');
                return json(['code' => 1, 'msg' => '站点设置保存成功!', 'url' => url('system/system')]);
            } else {
                return json(array('code' => 0, 'msg' =>'站点设置保存失败！'));
            }
        }else{
            $system = $table->field('id,name,url,title,key,des,bah,copyright,ads,tel,youbian,logo,wxpic,fax,email,phone,wchat')->find($sys_id);
            $this->assign('sys_id',$sys_id);
            $this->assign('system', $system);
            return $this->fetch();
        }
    }
    public function systemEn($sys_id=2){
        $table = db('system');
        if(request()->isPost()) {
            $datas = input('post.');
            if($table->where('id',$datas['id'])->update($datas)!==false) {
                savecache('System');
                return json(['code' => 1, 'msg' => '站点设置保存成功!', 'url' => url('system/system')]);
            } else {
                return json(array('code' => 0, 'msg' =>'站点设置保存失败！'));
            }
        }else{
            $system = $table->field('id,name,url,title,key,des,bah,copyright,ads,tel,youbian,logo,wxpic,fax,email,phone')->find($sys_id);
            $this->assign('sys_id',$sys_id);
            $this->assign('system', $system);
            return $this->fetch('system');
        }
    }



}
