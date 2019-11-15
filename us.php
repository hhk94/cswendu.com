<?php
$title = '关于我们'; // 模块页标题，每个页面自定义
$page_path = dirname(__FILE__); // 项目index的根目录
include $page_path.'/common/head.php';
include $page_path.'/common/nav.php';
?>

<!--开始-模块页内容-->
<section class="view-section clear" id="view-main">

    <!--导航区-->
    <div class="dir-div">

    </div>

    <!--功能区-->
    <div class="user-list-tab-div">
        <div class="float-left">
            <div class="tab-item select-none tab-item-active">example</div>

        </div>

        <div class="clear"></div>
    </div>

    <div class="tab-div">
        example
    </div>



</section>
<!--结束-模块页内容-->


<!--开始-页面js-->
<script>

</script>
<script>
    // 页面数据入口，如有动态数据渲染，请以此函数为调用作为开始
    function page_data_init(){
        console_log("开始渲染数据");

    }
</script>
<!--结束-页面js-->


<?php
include $page_path.'/common/must.php';
include $page_path.'/common/foot.php';
?>

