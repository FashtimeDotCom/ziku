<?php
//默认控制器，即主页面
class Index extends Controller {

function __construct(){
	parent::__construct();
}

public function index(){
    $asso_table = new AssociationTable;
    $asso_name = $asso_table->get('association_name');
    $asso_intro = $asso_table->get('association_intro');

    $notify_table = new NotifyTable;
    $notifications = $notify_table->select_ten(0);

    $news_table = new NewsTable;
    $news = $news_table->select_ten(0);

    $view_data = array(
        'asso_name' => $asso_name,
        'asso_intro' => $asso_intro,
        'notifications' => $notifications,
        'news' => $news
        );
	$this->my_render('index', $view_data);
}
public function CateSearch(){
    $categoryQuerystring = util::fetch_post("categoryQuerystring");
    util::go(URL.'result/index?q='.$categoryQuerystring);
}
// 专有渲染函数
private function my_render($view, $data = null) {
    $this->view->insert_css('index');
    $this->render('index/'.$view, $data);
}

}