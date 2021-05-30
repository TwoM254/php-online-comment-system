<html">
   <head>
      <title>ARV | Dashboard</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="icon" href="pc/logo.jpg">
      <script type="text/javascript" >
$(function() {
  if ($.browser.msie && $.browser.version.substr(0,1)<7)
  {
    $('li').has('ul').mouseover(function(){
        $(this).children('ul').css('visibility','visible');
        }).mouseout(function(){
        $(this).children('ul').css('visibility','hidden');
        })
  }
});

</script>
<style type="text/css">

#footer{
    height: 60px;
    width: 85.0%;
    float: right;
    margin-top:-58px;
    background-color: white; 
}
.pull-feft{
    margin-top: 20px;
    margin-left: 40px;
}
.pull-feft a{
    text-decoration: none;
    color: gray;
}
.pull-right{
    float: right;
    margin-top: 20px;
    margin-right: 40px;
}

/* ............end of footer...........*/

</style>
   </head>
   <body>
    <div id="main">
      <div id="header">
        <span></span><br>
        <span class="logo"><a href="">ARV Oline System</a></span>

<?php
if ($userInfo['avatar'] === null) {
           if ($userInfo['gender'] == "male") {
             print '<img src="../public/pc/avatar.png" class="pro_img">';
           }else {
             print '<img src="../public/pc/avatar.png" class="pro_img">';
           }
           
         }else {
            echo '<img src="', base64_decode($userInfo['avatar']),'" class="pro_img"/>';
         }
?>

        <ul>
          <li>
            <a href="" id="user"><?= ucfirst($userInfo['username']); ?></a>
            <ul>
              <li><a href="<?= site_url('pocscontroller/logout'); ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
<div id="left_menus">
  <div id="left_menus_pc">
  </div>
  <ul>
    <a href=""><li>My profile</li></a>
    <a href=""><li>Add Patient</li></a> 
    <a href=""><li>All Patient</li></a>
  </ul>
</div>
<div class="content">
  <h2>
     Dashboard
  </h2>
  <ol class="content_place">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
</div>

<div class="main_content">
  <div class="content1">
    <div id="records">
      <h3> </h3>
        <p>Registered Admins</p>
      </div>
    <div class="content_data">
      <span><a href="">More info</a></span>
    </div>
  </div>
  <div class="content2">
    <div id="records">
      <h3> </h3>
        <p>Registered Users</p>
      </div>
    <div class="content_data">
      <span><a href="">More info</a></span>
    </div>
  </div>
  <div class="content3">
    <div id="records">
      <h3> </h3>
        <p>Registered Patients</p>
      </div>
    <div class="content_data">
      <span><a href="">More info</a></span>
    </div>
  </div>
  <div class="content4">
    <div id="records">
      <h3>  </h3>
        <p>Branches</p>
      </div>
    <div class="content_data">
      <span><a href="">More info</a></span>
    </div>
  </div>
</div>

</body>
</html>
