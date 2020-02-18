<style>
.nav {
    color:black;
    height: 100%;
    width: 0;
    position: fixed;
    z-index:1;
    top: 0;
    left: 0;
    background-color: #dedede;
    overflow-x: hidden;
    transition: 0.2s;
    padding-top: 8px;
    box-shadow:0 0 6px rgba(0,0,0,1);
}
.nav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.nav a {
    padding: 8px 8px 8px 18px;
    text-decoration: none;
    font-size: 22px;
    color: #f0f0f0;
    display: block;
    transition: 0.2s;
}

.nav a:hover {
background:#2B4CC1;
    color: #ffffff;
}
.bb{
	border:0px;
	border-radius:5px;
	font-size:22px;
	font-weight:bold;
	color:#fff;
	background:darkred;
	padding:15px;
	outline:none;
	border:1px solid darkred;
	background: linear-gradient(to bottom right, darkred, red);
}

</style>

<div id="desk" class="nav"><center><br><br><br><br><br><br><br><br><br>
<img src="images/logo.png" width="250px">
<h1>This website was not made for desktop. Screen size is too large.</h1>
This website is not comfortable with desktop. I didn't made this webside responsive. For better experience use mobile phone.<br>
- Anupam Akib<br><br>
<button id="opn" class="bb" onclick="cNav()">Continue in mobile view</button>
<br><br><br>

</center>
</div>


<script type='text/javascript'>
if(screen.width >= 1000){
		oNav();
}
function oNav() {
    document.getElementById("desk").style.width = "100%";
//document.getElementById("opn").style.width = "100%";
//document.getElementById("opn").style.height = "100%";

}

function cNav() {
    document.getElementById("desk").style.width = "0";
    document.getElementById("desk").style.height = "0";
//document.getElementById("opn").style.width = "0%";
//document.getElementById("opn").style.height = "0%";

}

</script>



