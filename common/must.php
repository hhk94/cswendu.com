<?php
/*
 * 展示也面前的一些必要校验
 * */
?>


<script>

    (function () {
        try {
            page_style_init(); // 初始化页面动态样式
        }catch (e) {
            console.log("page_style_init()为必须设置的函数");
        }
        try {
            page_data_init(); // 登录校验完成后开始执行页面数据渲染
        }catch (e) {
            console.log("page_data_init()为必须设置的函数");
        }

    })();

</script>
