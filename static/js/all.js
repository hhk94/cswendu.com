
/*
*
* 共用函数，无所谓登不登录
*
* */


// 打印日志函数
const log = true;
function console_log(txt) {
    if (txt === 0 || txt === "0") {

    }else {
        if (!txt){
            txt = "空txt";
        }
    }
    log === true ? console.log(txt): "";
}

// cookie前缀
cookie_pre = "cswendu_";

var href_404 = "https://www.baidu.com";

// 删除加载动画
function del_loading_div(time=300) {
    $(".loading-div").fadeOut(time);
    setTimeout(function () {
        $(".loading-div").remove();

    }, time);
}
/*插入加载动画*/
function ajaxAnimate(){
	$('body').append(`<div class="loading-div flex-center select-none" id="loading-div">
    <div class="loading-hidden-bg"></div>
    <div class="loading-icon"></div>
</div>`)
}


// 返回首页
function back_home() {
    window.location.href = "home.php?user=home";
}


// 执行页面登录后的页面样式渲染//权限渲染
function page_style_init() {
	// console.log('bb')
    // 加载动画
    del_loading_div();
    // 渲染nav选中效果
    let that_nav = getThisUrlParam("", "nav");
    $(".nav-item-title").removeClass("nav-item-title-active");
    if (that_nav === ""){
        make_notice([{"msg": "网址参数错误(nav=?)"}], 60000);
    }else {
        $(".nav-"+that_nav).addClass("nav-item-title-active");
    }


}


// 刷新页面
function refresh_page(second_waiting) {
    var second = 0;
    var _second = second_waiting*1;
    if (_second){
        second = _second;
    }
    setTimeout(function () {
        window.location.reload();
    }, second);
}

// 返回上一级
function back_page(second_waiting){
    var second = 0;
    var _second = second_waiting*1;
    if (_second){
        second = _second;
    }
    setTimeout(function () {
        window.history.go(-1);
    }, second);
}


/**
 * 判断是否含有script非法字符]
 * @param  {[type]}  str [要判断的字符串]
 * @return {Boolean}     [true：含有，验证不通过；false:不含有，验证通过]
 */
function hasIllegalChar(str) {
    return new RegExp(".*?script[^>]*?.*?(<\/.*?script.*?>)*", "ig").test(str);
}

// 管理用户等级的功能显示
function user_level(level) {

    $(".level-"+level+"-not-do").remove();
}

// 处理分页-整页
// paginition(_limit, _total, _uri1, _uri2, class_append列表渲染类, class_only分页div的唯一类, word1网址中的key（一般叫做page）, num1当前第几页page=,)
/*
* // 处理分页
                    var page = datas.page;
                    var limit = datas.limit;
                    var count = datas.data_count;
                    var tab = 0;
                    var url1 = web_url+'app_user.php?nav=app_user'; // 路由
                    var url2 = '&nickname='+s_nickname+'&start_time='+s_start_time+'&end_time='+s_end_time+'&order='+s_order+'&openid='+s_openid+'&user_had_rewarded='+s_user_had_rewarded+"&phone="+s_phone+"#tab="+tab; // 参数集
                    setTimeout(function () {
                        paginition(limit, count, url1, url2, "navigation-div", "navigation-page", "page_app_user", s_page)
                    }, 200);
*
* */
function paginition(_limit, _total, _uri1, _uri2, class_append, class_only, word1, num1) {
    console_log("分页已经启动");
    $("."+class_only).remove();

    var limit = _limit; // 一页显示多少条数据
    var total = _total; // 数据总记录数
    var uri = _uri1; // 主页面地址（带参数）
    var now_page = num1; // 当前第几页
    if (!now_page){now_page=1}

    var first_page = 1; // 首页
    var end_page = (total-total%limit)/limit+1; // 最后一页
    var all_page = end_page; // 总共有多少页

    var before_page = 1; // 计算前一页
    var after_page = now_page*1+1;

    var div_total = '<span class="limit">共'+ _total +'条数据</span>';

    var first_url = uri+"&"+ word1 +"=" + first_page + _uri2;
    var first = '<a href="'+ first_url +'" class="first-a page-a"><span class="first-span">首页</span></a>';

    var before_url = uri+"&"+ word1 +"=" + before_page + _uri2;
    var before = '<a href="'+ before_url +'" class="before-a page-a"><span class="before-span">上页</span></a>';

    var now_url = uri+"&"+ word1 +"=" + now_page + _uri2;
    var now = '<a href="'+ now_url +'" class="now-a page-a"><span class="before-span">'+ now_page+ '/' + all_page +'</span></a>';

    var array_url = "";
    var array = '<a href="'+ array_url +'" class="before-a page-a"><span class="before-span">'+ 1 +'</span></a>';

    var after_url = uri+"&"+ word1 +"=" + after_page + _uri2;
    var after = '<a href="'+ after_url +'" class="after-a page-a"><span class="after-span">下页</span></a>';

    var end_url = uri+"&"+ word1 +"=" + end_page + _uri2;
    var end = '<a href="'+ end_url +'" class="end-a page-a"><span class="end-span">尾页</span></a>';

    var div = '<div class="pagination-div '+ class_only +'">'+ div_total + first + before + now + after + end +'</div>'

    //$("."+class_append).parent().parent().append(div);
    $("."+class_append).html("").parent().append(div);

    if (now_page <= 1){ // 前一页超范围
        $("."+class_only).find(".before-a").addClass("hide");
    }else{
        before_page = now_page-1;
    }

    if (now_page >= end_page){ // 后一页超范围
        console_log("超范围");
        $("."+class_only).find(".after-a").addClass("hide");
        $("."+class_only).find(".end-a").addClass("hide");
    }else{
        after_page = now_page+1;
    }

    if (end_page === 1){ // 只有一页
        // $("."+class_only).find(".first-a").addClass("hide");
        $("."+class_only).find(".after-a").addClass("hide");
        $("."+class_only).find(".before-a").addClass("hide");
        $("."+class_only).find(".end-a").addClass("hide");
    }

    // 初始化等级
    user_level(login_level);
}


function make_notice(_json, _show_time) {

    if (document.getElementsByClassName("kd-notice-div").length === 0) {
        $("body").append('<div class="kd-notice-div"><div class="kd-notice-content"></div></div>');
    }

    let json = _json;
    let show_time = _show_time?_show_time:3000; // ms

    for (let i=0; i<json.length; i++){
        let time = i*1500;
        setTimeout(function () {
            let clear = new Date().getTime(); // 微秒时间戳标记不同的div
            $(".kd-notice-content").before('<div class="kd-notice-cell clear-'+ clear +'">' +
                json[i]["msg"] +
                '<div class="kd-notice-close">X</div>' +
                '</div>');
            $(".clear-"+clear).animate({marginTop: 0}, 800, function () {
                setTimeout(function () {
                    $(".clear-"+clear).animate({marginTop: -($(".clear-"+clear).height()+16)}, 800, function () {
                        $(".clear-"+clear).remove();
                    });
                }, show_time);
            });
        }, time);
    }
}
$(document).on("click", ".kd-notice-close", function () {
    let that = $(this);
    that.parent().slideUp(300);
});



// 黑名单关键词匹配检测机制
// 短string中匹配
var black_keykword_state = 0; // 黑名单关键词出现次数
var check_black_times = 0; // 运行函数黑名单关键词次数
function check_input_black_keyword(string, black_keyword_array){
    console_log("check_black_times-0="+check_black_times);
    for (var j=0; j<black_keyword_array.length; j++){
        var has_key = black_keyword_array[j].black_keyword;
        if (string.indexOf(has_key) !== -1){ // 首次出现过该关键词

            make_notice([
                {
                    "msg": "发现黑名单关键词="+has_key,
                },
            ], (100*j+5000));

            black_keykword_state += 1;
        }else {
            console_log("false未匹配到关键词");
        }

        if (j === black_keyword_array.length-1){
            check_black_times +=1;
            console_log("check_black_times-1="+check_black_times);
        }

    }

}

// 耗时string中匹配
var black_text_keykword_state = 0; // 黑名单关键词出现次数
var check_text_black_times = 0; // 运行函数黑名单关键词次数
function check_text_black_keyword(string, black_keyword_array, _class, call_func){
    console_log("check_text_black_times-0="+check_text_black_times);
    var new_text = string;
    for (var j=0; j<black_keyword_array.length; j++){
        var has_key = black_keyword_array[j].black_keyword;
        if (string.indexOf(has_key) !== -1){ // 首次出现过该关键词
            make_notice([{
                "msg": "发现黑名单关键词="+has_key,
            },], (100*j+5000));

            var new_key = '<span class="high-black-key">'+has_key+'</span>&nbsp;';
            new_text = new_text.replace(new RegExp(has_key, "g"), new_key); // 全局替换

            black_text_keykword_state += 1;
        }else {
            console_log("false未匹配到关键词");
        }

        if (j === black_keyword_array.length-1){
            check_text_black_times +=1;
            console_log("check_text_black_times-1="+check_text_black_times);
            if (call_func){
                call_func(_class, new_text);
            }else {
                console_log("跳过call_func(_class, new_text)");
            }

        }

    }
}



function cal_nav(){

    let ele = document.getElementsByClassName("nav-item-box")[0];
    let height = ele.offsetTop;
    let window_height = window.innerHeight;
    let scroll_height = $(window).scrollTop();

    // let load_height = window_height - Math.abs(scroll_height - height);
    let load_height = scroll_height - height - 80;

    if (load_height > 0){
        ele.classList.add('fixed-nav');
    }else {
        ele.classList.remove('fixed-nav');
    }

}

function cal_back_top() {
    let window_height = window.innerHeight;
    let scroll_height = $(window).scrollTop();
    let load_height = scroll_height - window_height + 300;
    if (load_height > 0){ // 滑过一个屏幕距离
        $(".back-top").removeClass("hide");
    }else {
        $(".back-top").addClass("hide");
    }
}
$(document).on("click", ".back-top", function () {
    $("html, body").animate({scrollTop: 0}, "fast");
});

	

let all = {
	numForMessage:0,
	log(item){
		console.log(item)
	},
	getBanner(datas){
		let params = {
			method:'POST',
			url:datas.url,
			text:{
				textWarn:'Banner请求成功，但暂无数据',
				textError:'Banner请求失败',
			},
			data : {
				app_class:'web',
				user_token:'token',
				key:datas.key
			},
			changeDomFn:function(content){
				datas.changeDomFn(content)
				
			},
			dealWithEmptyDom:function(){
				datas.dealWithEmptyDom(content)
			}
		}
		all.dealWithDomAfterAjax(params)
	}
	,
	dealWithDomAfterAjax({method='POST',text={textWarn:'请求成功'},url='',
	data={},changeDomFn = function(){},dealWithEmptyDom = function(){}}){
		let datas = data
		let params = {
			method:method,//ajax请求方法
			data:datas,//ajax请求参数
			url:url,//ajax请求url
			successfn:function(res){//ajax请求成功的回调
				let jsonRes = $.parseJSON( res );
				all.log(jsonRes)
				if(jsonRes.state==0){
					let params={
						type:'warn',
						text:text.textWarn,//ajax请求成功，但无数据的提示
						timeout:2000
					}
					all.message(params)
					dealWithEmptyDom&&dealWithEmptyDom()
				}else if(jsonRes.state==1){
					// createTeacherHot(jsonRes.content)
					
					changeDomFn&&changeDomFn(jsonRes.content)//ajax请求成功DOM的操作方法
				}
			}
		}
		all.sendAjax(params)
	},
	
	sendAjax({method='',url='',data={},successfn=function(e){console_log(e)},errorfn=function(e){console_log(e)}} = {} ) {
		 ajaxAnimate()
	  $.ajax({
	            type: method,
	            url: url,
	            data: data,
	            success: function(d){
					 successfn&&successfn(d);
					 del_loading_div()
	            },
	            error: function(e){
					errorfn&&errorfn(e);
					del_loading_div(2000)
					setTimeout(function(){
						all.message({
							type:'error',
							text:'对不起，请求失败',
							timeout:4000
						})
					},1000)
					
	            }
	        });
	},
	getItemDataAttr(item,DataName){
			return item.data(DataName);
	},
	message({type='',text='这是个弹窗',timeout=2000} = {}){
			let i = all.numForMessage;	
			switch (type){
				case 'default':
					$('#alert').append(
					`<li class="alert-default alert${i}"><i class="fa fa-info-circle alert-icon"></i>${text}</li>`
					)
					break;
				case 'error':
					$('#alert').append(
					`<li class="alert-error alert${i}"><i class="fa fa-close  alert-icon"></i>${text}</li>`
					)
					break;
				case 'success':
					$('#alert').append(
					`<li class="alert-success alert${i}"><i class="fa fa-sign-language alert-icon"></i>${text}</li>`
					)
					break;	
				case 'warn':
					$('#alert').append(
					`<li class="alert-warn alert${i}"><i class="fa fa-exclamation-circle alert-icon"></i>${text}</li>`
					)
					break;	
				default:
					$('#alert').append(
					`<li class="alert-default alert${i}"><i class="fa fa-info-circle alert-icon"></i>${text}</li>`
					)
				break;
			}
			setTimeout(function(){
				$('.alert'+i).fadeOut(300);
				setTimeout(function () {
				   $('.alert'+i).remove()
				}, 300);
			},timeout)
			all.numForMessage++
	}
}
