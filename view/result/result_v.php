
<section id="container" class="sidebar-closed">
      <!--main content start-->
      <section id="main-content">
            <div class="inbox-head">
                  <h3><a href="<?php e(URL)?>/index">Ziku专利查询系统</a></h3>
                  <form class="pull-right position" action="<?php e(URL)?>result/index" method="get">
                      <div class="input-append">
                          <input type="text" placeholder="Search Mail" class="sr-input" name="q" value="<?php e($this->searchText)?>">
                          <button type="submit" class="btn sr-btn"><i class="icon-search"></i></button>
                      </div>
                  </form>
            </div>
            <section class="panel">                                             
                <div class="panel-body">                                
                    <div class="col-lg-4">                   
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <button type="button" class="btn btn-primary"><i class="icon-align-right"></i> 排序方式</button> 
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">请选择排序方式</p>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"></span>
                                    申请日升序                                   
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"></span>
                                    申请日降序                                   
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"></span>
                                    公开/公告日升序                                   
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"></span>
                                    公开/公告日降序                                   
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"></span>
                                    申请日升序                                   
                              </a>
                          </li>
                        </ul>
                        <a class="btn btn-primary" data-toggle="modal" href="#myModal">
                            <i class="icon-align-right"></i>
                            组合查询
                        </a>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h4 class="modal-title">组合查询</h4>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" role="form">
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">申请号</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">申请日</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="cc" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">公开（公告）号</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">公开（公告）日</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword3" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">专利名称</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">摘要</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword5" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">申请（专利权）人</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword6" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-4 control-label">发明（设计）人</label>
                                                  <div class="col-lg-8">
                                                      <input type="text" class="form-control" id="inputPassword7" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-lg-offset-4 col-lg-8">
                                                      <button type="submit" class="btn btn-block btn-send">Send</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div>                                                           
                    </div>                   
                    <p class="pull-right help-block">检索结果[<?php e($this->count) ?> ] (0.23 s) </p>
                </div>
            </section>
            <section class="wrapper">
                <!-- page start-->           
                <div class="row">
                    <div class="col-md-3">
                        <section class="panel">
                            <header class="panel-heading">
                                这里是右边框
                            <div class="panel-body">
                                <!-- <ul class="nav prod-cat">
                                    <li>
                                        <a href="#" class="active"><i class=" icon-angle-right"></i> Dress</a>
                                        <ul class="nav">
                                            <li class="active"><a href="#">- Shirt</a></li>
                                            <li><a href="#">- Pant</a></li>
                                            <li><a href="#">- Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Bags & Purses</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Beauty</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Coat & Jacket</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Jeans</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Jewellery</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Electronics</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Sports</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Technology</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Watches</a></li>
                                    <li><a href="#"><i class=" icon-angle-right"></i> Accessories</a></li> -->
                                </ul>
                            </div>
                        </section>                        
                    </div>
                    <div class="col-md-9">           
                           <div class="row product-list">
                            <?php 
                                if($this->result == false){
                                    echo("搜索结果为0");
                                }else{
                                    foreach ($this->result as $key => $value) {           
                            ?>
                              <div class="col-md-12">
                                <section class="panel">
                                  <h4>
                                      <span class="text-info">[发明专利]</span>
                                      <a class="srl-detail-ti f16 result-area">
                                         <?php e($value["Title"])?>
                                      </a>
                                      <span class="mlr6">
                                          -
                                      </span>
                                      <a class="srl-detail-an result-area">
                                          <?php e($value["PubNumber"])?>
                                      </a>
                                      <span class="label label-primary"><?php e($value["LawState"])?></span>                                     
                                  </h4>
                                  <p>
                                      <label>
                                          申请人：
                                      </label>
                                      <span>
                                          <a href="#" target="_blank" class="result-area">
                                             <?php e($value["ApplicantName"])?>
                                          </a>
                                      </span>
                                  </p>
                                  <p>
                                      <label>
                                          申请日：
                                      </label>
                                      <a href="#" target="_blank" class="result-area">
                                          <?php e($value["AppDate"])?>
                                      </a>
                                      <span class="mlr6">
                                          -
                                      </span>
                                      <label>
                                          主分类号：
                                      </label>
                                      <a href="#" target="_blank" class="result-area">
                                          <?php e($value["IPC"])?>
                                      </a>
                                  </p>
                                  <p>
                                      <label>
                                          摘要：
                                      </label>
                                      <span class="srl-detail-summary result-area">
                                          <?php e($value["Abstract"])?>
                                      </span>
                                  </p>
                                    <button class="btn btn-info" data-pubno="<?php e($value["PubNumber"])?>">查看更多</button>
                                  </section>
                              </div>                      
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <?php
                                    for($i = 1;$i<=$this->pageCount;$i++){
                                        if($i == $this->pageIndex){
                                ?>
                                <li><a href="javascript:void(0)" class="page-active"><?php e($i) ?></a></li>
                                <?php            
                                        }else{
                                ?>
                                <li><a href="<?php e(URL)?>result/index?q=<?php e($this->searchText)?>&amp;page=<?php e($i)?>"><?php e($i) ?></a></li>                            
                                <?php            
                                        }
                                    }
                                ?>                           
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- page end-->
            </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; ziku by huangzhen.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
</section>
<section id="prj-tab">
  <span class="icon-remove tab-close"></span>
  <div class="cd-tabs">
    <nav>
      <ul class="cd-tabs-navigation">
        <li><a data-content="inbox" class="selected" href="#0">基本信息</a></li>
        <li><a data-content="abstract" href="#0">摘要</a></li>
        <li><a data-content="claimspath" href="#0">权利要求书</a></li>
        <li><a data-content="instrpath" href="#0">说明书</a></li>
        <li><a data-content="other" href="#0">其他</a></li>
      </ul> <!-- cd-tabs-navigation -->
    </nav>
    <ul class="cd-tabs-content">
      <li data-content="inbox" class="selected">
        <div class="row">
          <div class="col-md-6">
            <p data-content="Title"><label>专利名称：</label><span class="tab-text"></span></p>
            <p data-content="AppNumber"><label>申请号：</label><span class="tab-text"></span></p>
            <p data-content="PubNumber"><label>公开号：</label><span class="tab-text"></span></p>
            <p data-content="PubDate"><label>公开日：</label><span class="tab-text"></span></p>
            <p data-content="AppDate"><label>申请日期：</label><span class="tab-text"></span></p>
            <p data-content="IPC"><label>分类号：</label><span class="tab-text"></span></p>
          </div>
          <div class="col-md-6">
            <p data-content="ApplicantName"><label>申请人：</label><span class="tab-text"></span></p>
            <p data-content="InventorName"><label>发明人：</label><span class="tab-text"></span></p>
            <p data-content="AgencyName"><label>代理机构：</label><span class="tab-text"></span></p>
            <p data-content="AgentName"><label>代理人：</label><span class="tab-text"></span></p>
            <p data-content="LawState"><label>法律状态：</label><span class="tab-text"></span></p>
          </div>
        </div>
      </li>
      <li data-content="abstract"></li>
      <li data-content="claimspath"></li>
      <li data-content="instrpath"></li>
      <li data-content="other"></li>
    </ul> <!-- cd-tabs-content -->
  </div> <!-- cd-tabs -->
</section>
<script type="text/javascript">
    var Model = {
        searchText : "<?php e($this->searchText)?>",
        prjDetailUrl:"<?php e(URL)?>/result/getPrjDetail"
    }
    var json = <?php e(json_encode($this->result))?>
</script>




