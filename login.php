<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login page</title>
</head>
<body>

   <div class="main_div_login_012">
       <form action="" method="post" id="login_form_01_s" >
           <input type="text" name="" id="main_div_login_inp_1" placeholder="Email">
           <input type="text" name="" id="main_div_login_inp_2" placeholder="Password" >
           <input type="submit" value="Login" class="login_b_01">
       </form>
       
       <form action="" method="post" id="singup_form_02_s" >
           <input placeholder="Name" type="text" name="" id="main_div_singup_name_01">
           <input placeholder="User name"  type="text" name="" id="main_div_singup_u_name_02" onkeyup="user_name_ss_01()">
           <input placeholder="Email" vtype="text" name="" id="main_div_login_inp_1">
           <input placeholder="Password" type="text" name="" id="main_div_login_inp_2">
           <input type="submit" value="Sing up" class="login_b_01">
           <p id="view" ></p>
       </form>

       <p id="text_from_bottom_01">No account?<button id="login_user_c_btn_1" onclick="sinup_page_ch()" >Sign up here</button></p>
       <p id="text_from_bottom_02">Have account?<button id="login_user_c_btn_1" onclick="login_page_ch()" >login here</button></p>
   </div>
    
 <script src="js/main.js"></script>
   
</body>
</html>

