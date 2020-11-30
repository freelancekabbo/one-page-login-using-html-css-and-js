function sinup_page_ch(){

    document.getElementById('login_form_01_s').style="display:none;";
    document.getElementById('text_from_bottom_01').style="display:none;";
    document.getElementById('text_from_bottom_02').style="display:block;";
    document.getElementById('text_from_bottom_02').style="display:block;";
    document.getElementById('singup_form_02_s').style="display:block;";

    var scrn = document.getElementsByClassName('main_div_login_012')[0];
    scrn.style="height:335px;";

}

function login_page_ch(){

    document.getElementById('login_form_01_s').style="display:block;";
    document.getElementById('text_from_bottom_01').style="display:block;";
    document.getElementById('text_from_bottom_02').style="display:none;";
    var scrn = document.getElementsByClassName('main_div_login_012')[0];
    scrn.style="height:270px;";
    document.getElementById('singup_form_02_s').style="display:none;";

}

function user_name_ss_01(){

    var va_01 = document.getElementById('main_div_singup_u_name_02').value;
    document.getElementById('view').innerHTML= va_01;
}