<?php
/* LiangLee News Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package LiangLeeFramework
 * @Subpackage LiangLee News Manager
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File start.php
 */
elgg_register_event_handler('init', 'system', 'LiangLeeNews');
/*
 * Register Plugin Settings
 *
 * @access admin
 */
function LiangLeeNews() {
/*
 * Add A Css To Elgg
 *
 * @access Public
 */
elgg_extend_view('css/elgg', 'LiangLeeNews/css/css');
/*
 * Register Error if Framework is missing and Pluing is Enabled
 *
 * @access admin
 */
if (!elgg_is_active_plugin('LiangleeFramework')) {
 if (elgg_is_admin_logged_in()) {
 /*
 * Register Error to Admin if framework is missing.
 *
 * @access admin
 */
 register_error(elgg_echo('lianglee:framewrok:miss'));
 } else {
/*
 * Register Error to Users in Code if framework is missing.
 *
 * @access public
 */ 
 register_error(elgg_echo('lianglee:framewrok:miss:code'));	
     }
    }  
}
function LiangLeeNews_page(){
if(elgg_get_config('https_login')){$connection = 'https';} else {$connection ='http';}
$page = elgg_get_plugin_setting("LiangLee_news_page", "LiangLeeNews");
if(elgg_get_plugin_setting("LiangLee_news_page", "LiangLeeNews")){$getpage = $page; 
   if(LiangLee_url(array('connection' => $connection,'url' => $getpage))){
    return LiangLee_view('LiangLeeNews','news/display');}}
    return   LiangLee_view('LiangLeeNews','news/display');	
}
