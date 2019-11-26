<?php
/*
 * 展示也面前的一些必要校验
 * */
?>


<script>

    let token = "";
    let page_url = window.location.href;

    (function () {

        // 获取接口验证的token
        if (!app_class || !page_url){
            alert_txt("参数不全，无法继续访问", "long");
            return;
        }else {

            // 开始-Fetch-请求数据-ES6
            const post_api = api_url + "app/get_app_token"; // 接口
            const map = new Map([ // 要提交数据
                ["app_class", app_class],
                ["url", page_url],
            ]);
            let body = "";
            for (let [k, v] of map) { body += k+"="+v+"&"; } // 拼装数据，限制2MB最佳
            fetch(post_api, {
                method: "post",     // get/post
                mode: "cors",       // same-origin/no-cors/cors
                cache: "no-cache",
                headers: {
                    "Content-type": "application/x-www-form-urlencoded; charset=UTF-8",
                },
                body: body,         // body示例格式："key1=val1&key2=val2"
            }).then(function (response){
                if (response.status === 200){return response;}
            }).then(function (data) {
                return data.text();
            }).then(function(text){ // 返回接口数据
                // 统一格式校验
                let back = null;
                let res = null;
                if (typeof text === "string"){
                    back = text;
                    res = JSON.parse(text);
                }else if (typeof text === "object"){
                    back = JSON.stringify(text);
                    res = text;
                }else {console.log("未知类型=" + typeof text)}
                console_log("类型：\n" + typeof text + "\n数据：\n" + back);

                // 解析与渲染数据 res
                if (res.state === 0){
                    console_log(res.msg);
                    alert_txt(res.msg, 5000);
                    refresh_page(3000);
                }else if (res.state === 1){
                    token = res.content.user_token;
					window.token = token;
                    // wx.set_data("user_token", token);

                    // 其他操作
                    try {
                        page_style_init(); // 初始化页面动态样式
                    }catch (e) {
                        console.log("%c"+"page_style_init()为必须设置的函数", "color:coral;font-size:13px;");
                    }
                    try {
                        page_data_init(); // 登录校验完成后开始执行页面数据渲染
                    }catch (e) {
                        console.log("%c"+"page_data_init()为必须设置的函数", "color:coral;font-size:13px;");
                    }

                }else{
                    console.log("超范围的state(state="+ res.state +")");
                    alert_txt("超范围的state(state="+ res.state +")", 5000);
                    refresh_page(5000);
                }

            }).catch(function(error){
                let error_info = "Fetch遇到错误：" + error;
                console.log("%c"+error_info, "color:red;font-weight:bold;font-size:20px;");
                alert_txt(error_info, 3000);
            });
            // 结束-Fetch


        }

    })();

</script>
