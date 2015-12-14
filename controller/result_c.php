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
// 专有渲染函数
private function my_render($view, $data = null) {
    $this->view->insert_css('resultlist');
    $this->view->insert_js('result/result');
    $this->render('result/'.$view, $data);
}
}