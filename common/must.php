<?php
/*
 * 展示也面前的一些必要校验
 * */
?>


<script>

    var token = "";
	window.token = "";
    let page_url = window.location.href;
   
    (function () {

        // 获取接口验证的token
        if (!app_class || !page_url){
            alert_txt("参数不全，无法继续访问", "long");
            return;
        }else {

            // 开始-POST请求，POST跨域
            const post_api = api_url + "app/get_app_token";
            const map = new Map([ // 要提交数据
                ["app_class", app_class],
                ["url", page_url],
            ]);
            // 拼装post要提交的数据
            let body = "";
            for (let [k, v] of map) { body += k+"="+v+"&"; }
            fetch(post_api, {
                method: "post",     // get/post
                mode: "cors",       // same-origin/no-cors/cors
                cache: "no-cache",  // 不缓存
                headers: {
                    "Content-type": "application/x-www-form-urlencoded; charset=UTF-8",
                },
                body: body,         // 格式："key1=val1&key2=val2"
            }).then(function (response){
                if (response.status === 200){
                    return response;
                }
            }).then(function (data) {
                return data.text();
            }).then(function(text){
                // 格式校验
                let back = null;
                let res = null;
                if (typeof text === "string"){
                    back = text;
                    res = JSON.parse(text);
                }else if (typeof text === "object"){
                    back = JSON.stringify(text);
                    res = text;
                }
                console_log("类型：" + typeof text + "\n数据：" + back);

                // 解析与渲染数据 res
                if (res.state === 0){
                    console_log(res.msg);
                    alert_txt(res.msg, 2000);
                }else if (res.state === 1){
                    console_log(res);

                    token = res.content.user_token;
					window.token = token;
					
					
					// console.log(window.token)
					
					
                    // wx.set_data("token", token);

                    // 其他操作
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

                }else{
                    console.log("超范围的state(state="+ res.state +")");
                }

            }).catch(function(error){
                console.log("Fetch错误：" + error);
                alert_txt("网络不通或接口请求错误", 3000);
            });
            // 结束

        }

    })();

</script>
