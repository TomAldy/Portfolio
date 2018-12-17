function postRequest(strURL){
var xmlHttp;
if(window.XMLHttpRequest){ // For Mozilla, Safari, ...
var xmlHttp = new XMLHttpRequest();
}
else if(window.ActiveXObject){ // For Internet Explorer
var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlHttp.open('POST', strURL, true);
xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlHttp.onreadystatechange = function(){
if (xmlHttp.readyState == 4){
updatepage(xmlHttp.responseText);
}
}
xmlHttp.send(strURL);
}

function updatepage(str){
if(str=="Manager"){
 document.all.continue.innerHTML = "<a href='staff/admin/close_site.php'  target='main'><img src='images/staff/turn_site_offline.png' border='0'></a><br/><a href='staff/admin/mass_alert.php' target='main'><img src='images/staff/mass_alert.png' border='0'></a><br/><a href='staff/admin/alert_ip.php' target='main'><img src='images/staff/alert_ip.png' border='0'></a><br/><a href='staff/admin/banip.php?x=add' target='main'><img src='images/staff/ban_ip.png' border='0'></a><br/><a href='staff/admin/banip.php' target='main'><img src='images/staff/unban_ip.png' border='0'></a><br/><a href='staff/admin/password_requests.php' target='main'><img src='images/staff/password_change.png' border='0'></a><br/><a href='staff/admin/username_requests.php' target='main'><img src='images/staff/username_change.png' border='0'></a><br/><a href='staff/add_competition.php' target='main'><img src='images/staff/change_competition.png' border='0'></a><br/><a href='staff/add_news.php' target='main'><img src='images/staff/add_news_article.png' border='0'></a><br/><a href='staff/shoutbox/index.html' target='main'><img src='images/staff/personal_messages.png' border='0'></a><br/><a href='staff/username.html' target='main'><img src='images/staff/change_username.png' border='0'></a><br/><a href='staff/password.html' target='main'><img src='images/staff/change_password.png'></a><br/><a href=\"javascript: void(0);\" onclick=\"ajaxpagefetcher.load('staff_mid', 'staff/login.html', false, '', [''])\"><img src='images/staff/logout.png' border='0'></a>";
}
if(str=="Assistant"){
document.all.continue.innerHTML = "<a href='staff/admin/mass_alert.php' target='main'><img src='images/staff/mass_alert.png' border='0'></a><br/><a href='staff/admin/alert_ip.php' target='main'><img src='images/staff/alert_ip.png' border='0'></a><br/><a href='staff/admin/banip.php?x=add' target='main'><img src='images/staff/ban_ip.png' border='0'></a><br/><a href='staff/admin/banip.php' target='main'><img src='images/staff/unban_ip.png' border='0'></a><br/><a href='staff/add_competition.php' target='main'><img src='images/staff/change_competition.png' border='0'></a><br/><a href='staff/add_news.php' target='main'><img src='images/staff/add_news_article.png' border='0'></a><br/><a href='staff/shoutbox/index.html' target='main'><img src='images/staff/personal_messages.png' border='0'></a><br/><a href='staff/username.html' target='main'><img src='images/staff/change_username.png' border='0'></a><br/><a href='staff/password.html' target='main'><img src='images/staff/change_password.png'></a><br/><a href=\"javascript: void(0);\" onclick=\"ajaxpagefetcher.load('staff_mid', 'staff/login.html', false, '', [''])\"><img src='images/staff/logout.png' border='0'></a>";
}
if(str=="Reporter"){
document.all.continue.innerHTML = "<a href='staff/add_news.php' target='main'><img src='images/staff/add_news_article.png' border='0'></a><br/><a href='staff/shoutbox/index.html' target='main'><img src='images/staff/personal_messages.png' border='0'></a><br/><a href='staff/username.html' target='main'><img src='images/staff/change_username.png' border='0'></a><br/><a href='staff/password.html' target='main'><img src='images/staff/change_password.png'></a><br/><a href=\"javascript: void(0);\" onclick=\"ajaxpagefetcher.load('staff_mid', 'staff/login.html', false, '', [''])\"><img src='images/staff/logout.png' border='0'></a>";
}
if(str=="Competitions"){
document.all.continue.innerHTML = "<a href='staff/add_competition.php' target='main'><img src='images/staff/change_competition.png' border='0'></a><br/><a href='staff/shoutbox/index.html' target='main'><img src='images/staff/personal_messages.png' border='0'></a><br/><a href='staff/username.html' target='main'><img src='images/staff/change_username.png' border='0'></a><br/><a href='staff/password.html' target='main'><img src='images/staff/change_password.png'></a><br/><a href=\"javascript: void(0);\" onclick=\"ajaxpagefetcher.load('staff_mid', 'staff/login.html', false, '', [''])\"><img src='images/staff/logout.png' border='0'></a>";
}
if(str=="No"){
document.all.continue.innerHTML = "Sorry, your username or password was incorrect!<br/><br/><a href=\"javascript: void(0);\" onclick=\"ajaxpagefetcher.load('staff_mid', 'staff/login.html', false, '', [''])\">Try again</a>";
}
}

function call_login(){
var username = window.document.f1.username.value;
var password = window.document.f1.password.value;
var userlevel = window.document.f1.userlevel.value;
var url = "staff/login.php?username=" + username + "&password=" + password + "&userlevel="+ userlevel;
postRequest(url);
} 