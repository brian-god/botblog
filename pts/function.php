<?php
/**
 * Created by PhpStorm.
 * User: Txk
 * Date: 2018/7/25
 * Time: 16:33
 */
function blog_load_tpl($tplName)
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
    include 'view/tpl/'.$tplName.'.php';
}
//连接数据库，使用频繁，每次调用数据，就会使用。
// TP3 查询语句写法。
// M('Forum_bbs')->field(true)->where(array('status'=>1))->find();
function db_connect($db)
{
    // 创建连接
    $conn  = new mysqli($db['db_host'], $db['db_user'], $db['db_pass'], $db['db_name']);

    // 检测连接
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
/**
 * 查询所有的贴子
 */
function findAll($db,$actionName){
    //获取数据库连接
    $mysql =db_connect($db);
    //SQL语句
    $sql ='select * from ' . $actionName .' where dr=0 limit 0,5';
    //定义储存数据的数组s
    $rows=[];
    //执行查询
    if($result=mysqli_query($mysql,$sql)){
        /**
         *函数从结果集中取得一行作为关联数组。
         * 返回根据从结果集取得的行生成的关联数组，如果没有更多行，则返回 false
         */
        while($row = mysqli_fetch_assoc($result)){
            //将返回的行数组放入到待返回数组
            $rows[] = $row;
        }
        /**
         * mysql_free_result() 函数释放结果内存。
         * 如果成功，则返回 true，如果失败，则返回 false。
         */
        mysqli_free_result($result);
    }
    /**
     * 关闭MySQL数据连接
     */
    $mysql->close();
    /**
     * 返回查询的结果集
     */
    return $rows;
}