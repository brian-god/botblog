<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/25
 * Time: 16:33
 */
function auto_load_tpl($tplName)
{
    global $bbsList;    //论坛帖子列表
    global $bbsListPage;//论坛帖子列表分页html
    global $bbsListHot; //论坛热门帖子列表
    global $bbsType;    //论坛帖子类型 1最新 2热门
    global $details;    //论坛帖子详情
    global $comment;    //论坛评论列表
    global $userList;   //论坛当前用户信息
    global $pUserList;  //论坛发帖人用户信息

    //自动加载模板
    include 'view/tpl/'.$tplName.'_tpl.php';
}