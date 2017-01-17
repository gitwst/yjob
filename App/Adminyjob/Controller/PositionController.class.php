<?php
namespace Adminyjob\Controller;
use Think\Controller;
use Adminyjob\RemoteModel\JobRemoteModel;
class PositionController extends PublicController{
//	职位列表
	public function job_listings(){
		$data = [
			'company_id' => '1001',
			'status' => '100',
			'create_time' => time(),
			'refurbish_time' => time(),
			'page' => '4',
			'size' => '20'
		];
		$data = json_encode($data);
//		print_r($data);exit;
//		从接口得到数据
		$JobRemoteModel = new JobRemoteModel();
		$jobList = $JobRemoteModel->jobList($data);
//		print_r($jobList);exit;
		$this->display();
  }


//public function job_update(){
//	for($i;$i<$count;$i++){
//		$a = $list[$i]['id'];
//		$c = $list[$i];	
//	}
//	$jobid 	= intval($_GET['id']);
//	$this->display();
//}
    
//职位分类
  public function job_class(){
  	$this->display();
  }
  
//添加子分类
  public function add_childe_class(){
  	$this->display();
  }
  
//编辑
	public function alter_job_class(){
		$this->display();
	}
	
}