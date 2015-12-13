<?php
//控制器模板
class Result extends Controller {
function __construct(){
	parent::__construct();
}

public function index(){
	$userpatent_table = new UserPatentTable;
	$q = Util::fetch_get("q");
	$result = $userpatent_table->selectByApplicantName($q);
	$json = json_encode($result);
	$view_data = array ('title' => 'xx 专利检索结果',"result" => $result,"json" => $json);
	$this->my_render("result", $view_data);
}

// 专有渲染函数
private function my_render($view, $data = null) {
    $this->view->insert_css('resultlist');
    $this->render('result/'.$view, $data);
}
}