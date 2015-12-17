<?php
// 该文件定义所有常量

/* 库目录
 * 控制器目录
 * 模型目录
 * 图片目录
 */
$constant = array ('LIB'         => 'lib/',
                   'SYSLIB'      => 'lib/system/',
				   'CON'         => 'controller/',
				   'MOD'         => 'model/',
				   'IMG'         => 'public/img/',
				   'ATT'         => 'public/att/',
				   'TITLE'       => 'Ziku 专利查询系统',
				   'CSS'         => 'public/css/',
				   'JS'          => 'public/js/',
				   'VIEW'        => 'view/',
				   'FLATUI'      => 'public/flat/',
				   "PUBLIC"      => 'public/',
                   'DEFAULT_CSS' => 'base,common,jquery-ui',
                   'DEFAULT_JS'  => 'jquery,bootstrap,hz',
                   'PAGE_NUM'    =>8,
                   'PAGE_MAX'    =>12);

/* 当LOCAL_FLAG为true时，使用本地SQL配置，反之使用服务器配置，默认为SAE
 * 网址
 * CSS目录
 * JavaScript目录
 * 视图目录
 * 数据库类型
 * 主机
 * 端口号
 * 数据库名称
 * 用户名
 * 密码
 */
define("LOCAL_FLAG", true);
if (LOCAL_FLAG) {
	$change_constant = array ('URL' => 'http://localhost/ziku/');
	$db_setting      = array (
						      'DB_TYPE' => 'mysql',
						      'DB_HOST' => 'localhost',
						 	  'DB_PORT' => '3306',
						 	  'DB_NAME' => 'ziku',
						 	  'DB_USER' => 'root',
						 	  'DB_PASS' => '');
} else {
	$change_constant = array ('URL' => 'http://huangzhen.sinaapp.com/',);
	$db_setting      = array ('DB_TYPE' => 'mysql',
						 	  'DB_HOST' => SAE_MYSQL_HOST_M,
						 	  'DB_PORT' => SAE_MYSQL_PORT,
						 	  'DB_NAME' => SAE_MYSQL_DB,
						 	  'DB_USER' => SAE_MYSQL_USER,
						 	  'DB_PASS' => SAE_MYSQL_PASS);
}
// 将数组合并并进行常量定义
$merge_array = array_merge($constant, $change_constant, $db_setting);
foreach ($merge_array as $key => $value) {
	define($key, $value);
}