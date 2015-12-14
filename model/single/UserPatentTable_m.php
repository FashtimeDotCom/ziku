<?php
Class UserPatentTable extends Model {

function __construct(){
	parent::__construct();
}

// 专利
public function selectByTitle($Title) {
    $cmd = 'SELECT * FROM userpatent WHERE Title=:Title';
    $param = array('Title' => $Title);
    $result = $this->run($cmd, $param);
    if ($result->rowCount() == 1) {
        return $result->fetch();
    } else {
        return false;
    }
}
//根据申请人查询
public function selectByApplicantName($ApplicantName) {
    $cmd = 'SELECT * FROM userpatent WHERE ApplicantName=:ApplicantName';
    $param = array('ApplicantName' => $ApplicantName);
    $result = $this->run($cmd, $param);
    if ($result->rowCount() == 1) {
        return $result->fetch();
    } else {
        return false;
    }
}
//根据申请人查询
public function selectByPubNumber($PubNumber) {
    $cmd = 'SELECT * FROM userpatent WHERE PubNumber=:PubNumber';
    $param = array('PubNumber' => $PubNumber);
    $result = $this->run($cmd, $param);
    if ($result->rowCount() == 1) {
        return $result->fetch();
    } else {
        return false;
    }
}
public function selectByKeyword($keyword,$startNum){
    $cmd = 'SELECT * FROM userpatent WHERE Abstract LIKE "%'.$keyword.'%" OR ApplicantName LIKE "%'.$keyword.'%" LIMIT '.$startNum.','.PAGE_NUM;
    $result = $this->run($cmd);
    if ($result->rowCount() >= 1) {
        return $result->fetchAll();
    } else {
        return false;
    }
}
public function selectCount($keyword){
    $cmd = 'SELECT COUNT(*) AS count FROM userpatent WHERE Abstract LIKE "%'.$keyword.'%" OR ApplicantName LIKE "%'.$keyword.'%"';
    $result = $this->run($cmd);
    if ($result->rowCount() == 1) {
        return $result->fetch();
    } else {
        return false;
    }
}
// 获取所有数据
public function select_all() {
    $cmd = 'SELECT * FROM userpatent';
    $result = $this->run($cmd);
    return $result->fetchAll();
}
}