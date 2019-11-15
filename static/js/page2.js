
(function () {

    $(document).on("click", ".add-bookmark", function () {
        console_log("click");
        make_notice([{"msg": "“win平台：Crl+D；Mac平台：Command+D”即可加入收藏！"}], 5000);

    });

})();

function cal_nav(){

    let ele = document.getElementsByClassName("nav-item-box")[0];
    let height = ele.offsetTop;
    let window_height = window.innerHeight;
    let scroll_height = $(window).scrollTop();

    // let load_height = window_height - Math.abs(scroll_height - height);
    let load_height = scroll_height - height - 80;

    if (load_height > 0){
        console_log("不在屏幕视野");
        ele.classList.add('fixed-nav');
    }else {
        console_log("在屏幕视野");
        ele.classList.remove('fixed-nav');
    }

}

window.onload = function(){
    cal_nav();

};

window.onscroll = function () {
    cal_nav();

};