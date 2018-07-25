<!--加载全局配置文件-->
<?php include 'config/blogConfig.php'; ?>
<!--加载公共头部-->
<?php include 'view/inc/header_inc.php'; ?>
<!--加载当前页面模板-->
<?php auto_load_tpl($tplName);  ?>
<!--加载公共底部-->
<?php include 'view/inc/footer_inc.php' ?>

<!--<div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
            Friends
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
    </nav>
</div>-->


