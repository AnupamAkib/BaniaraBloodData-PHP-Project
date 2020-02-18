<?php
session_start();
?>
<script type='text/javascript'>
function signup_page(){
    window.location.href = 'register.php';
}
</script>

<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no" />

<meta name="description" content="একের রক্ত অন্যের জীবন, রক্তই হোক আত্মার বাঁধন">
<meta property="og:image" content="images/bg-pic.png">

<meta name="theme-color" content="#D30905"/>
<link rel="icon" href="images/blood.png"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow23.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>


<style>
@font-face{
    font-family: bn;
    src: url(fonts/Lal-Salu.ttf);
}
body{
margin:0px;
background:#f0f0f0;
font-family: bn;
}
.header{
position:fixed;
z-index:1000;
left:0px; top:0px;
width:100%;
background:#fff;
padding-top:5px; padding-bottom:5px;
font-size:24px;
color: #ffffff;
font-weight:bold;
font-family:bn;
box-shadow:0 0 10px rgba(0,0,0,0.5);
border-bottom:4px solid red;
}
</style>
<div class='header' align='center'>
<table border='0' width='100%'>
<td align='center' onclick='openNav()'><img src='images/menu.png' width='40px'/></td>
<td align='center'><a href='/'><img style='opacity:1.0;' src='images/logo.png' width='183px'/></a></td>
<td align='center' onclick='signup_page()'>
<img src='images/add_donor.png' width='42px'/>
</td>
</table>
</div><br><br><br>


<style>
.sidenav {
    color:white;
    height: 100%;
    width: 0;
    position: fixed;
    z-index:1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.2s;
    padding-top: 8px;
    box-shadow:0 0 6px rgba(0,0,0,1);
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.sidenav a {
    padding: 8px 8px 8px 18px;
    text-decoration: none;
    font-size: 22px;
    color: #f0f0f0;
    display: block;
    transition: 0.2s;
}

.sidenav a:hover {
background:#ff0000;
    color: #ffffff;
}

.bbb{
background:transparent;
border:0px solid black; outline:none;
position:fixed; top:0px; left:250px;
width:0%; height:0%;
z-index:110;
}
</style>

<div id="mySidenav" class="sidenav">
<button id="oppo" class="bbb" type="closebtn" onclick="closeNav()"></button>
<center><br><br><br>

</center>
<a href="login.php">লগইন</a>
<a href="register.php">রক্তদাতা নিবন্ধন করুন</a>
<a href="help.php">ব্যবহারবিধি</a>
<a href="about.php">About this site</a>
<a href="contributor.php">Contributors</a>
<a href="mailto:mirakib25@gmail.com">Feedback</a>

<br>
</div>


<script type='text/javascript'>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
document.getElementById("oppo").style.width = "100%";
document.getElementById("oppo").style.height = "100%";

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
document.getElementById("oppo").style.width = "0%";
document.getElementById("oppo").style.height = "0%";

}

</script>


















