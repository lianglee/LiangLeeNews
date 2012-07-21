<?php
/* LiangLee News Manager
 * @website Link: http://community.elgg.org/pg/profile/arsalanlee/
 * @Package LiangLeeFramework
 * @Subpackage LiangLee News Manager
 * @author Liang Lee
 * @copyright All right reserved Liang Lee 2012.
 * @ide The Code is Generated by Liang Lee php IDE.
 * @File display.php
 */
LiangLee_include('LiangLeeNews','lib/LiangLeeNews');
/*
 * Calling a news lib
 *
 * @access public
 */
LiangLeeNews_lib();
/*
 * Register Global Variables for News.
 *
 * @access public
 */
global $leenews;
/*
 * Fetch Setting for News
 *
 * @access public
 */
$leenes_onoff = elgg_get_plugin_setting("LiangLee_news_onoff", "LiangLeeNews");

if($leenes_onoff == '1'){ 
echo "<div align=\"center\">\n"; 
echo "      <form id=\"LIANGLEECSSNEWS01\" method=\"get\">\n";
echo $leenews;
echo "</form>\n";
}
?>