<?php
//控制器模板
class Result extends Controller {
function __construct(){
	parent::__construct();
}
public function index(){
	$userpatent_table = new UserPatentTable;
	$q = Util::fetch_get("q") ? Util::fetch_get("q") : Util::fetch_post("q");
	$page = Util::fetch_get("page") ? Util::fetch_get("page") : Util::fetch_post("page");
	if(!isset($page)){
		$page = 1;
	}
	if(isset($q)){
		$q = ltrim($q);
		$count = $userpatent_table->selectCount($q)["count"];
		$result = $userpatent_table->selectByKeyword($q,($page-1)*PAGE_NUM);
		// echo json_encode($result);	
		// die();	
	}else{
		$result = false;
		$count = 0;
	}
	$title = $q.' 专利搜索结果';
	$json = json_encode($result);
	$view_data = array ('title' => $title,"result" => $result,"searchText" => $q,"pageCount" => ceil($count/PAGE_NUM),"pageIndex" => $page,"count" => $count);
	$this->my_render("result", $view_data);
}
public function PrjDetail($PubNumber = null){
	if($PubNumber == null){
		Util::go(URL."/error/0");
	}else{

	}
	echo $PubNumber;
}
public function getPrjDetail(){
	$userpatent_table = new UserPatentTable;
	$pubNumber = Util::fetch_post("PubNumber");
	$result = array("Status" => false,"Data" => array());
	if(isset($pubNumber)){
		$data = $userpatent_table->selectByPubNumber($pubNumber);
		if($data != false){
			$result["Status"] = true;
			foreach ($data as $key => $value) {
				if(is_numeric($key)){
				}else{
					$result["Data"][$key] = $value;
				}	
			}
		}
	}
	echo json_encode($result);
}
// 专有渲染函数
private function my_render($view, $data = null) {
    $this->view->insert_css('tab,bootstrap.min,bootstrap-reset,style,style-responsive,resultlist');
    $this->view->insert_js('jquery.scrollTo,jquery.dcjqaccordion.2.7,jquery.nicescroll,respond.min,,common-scripts,tab,result/result');
    $this->render('result/'.$view, $data);
}
}