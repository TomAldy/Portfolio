<?php
   // Configuration - Your Options
      $allowed_filetypes = array('.jpg','.gif','.bmp','.png','.jpeg','.JPG','.BMP','.PNG','.JPEG', '.BMP'); // These will be the types of file that will pass the validation.
      $max_filesize = 2024288; // Maximum filesize in BYTES (currently 0.5MB).
      $upload_path = './files/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>That file type is NOT allowed!</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>What do you think you are doing? This file type is not allowed!</b></font></td>
</tr></table><br>
<img src="../images/photographer.gif" align="right" /><img src="../images/camera.gif" align="left" />We know how you guys over at <b>vibeArray</b> like to take pictures of your screens, habbos and work youve created, so we have created a tool especially for you to host your images, and or different files, with a few exceptions! We promise that your files are safe and they will not be used for anything else other than your own use!<br/><br/>
We DO feel as if there are a few files we will not allow, such as executable programs (.exe) and other things such as .html, .php and all those files that you people think you can use our website for ;)<br/
<br/><br/>
We are very strict on what the files uploaded are used for, and if any file types we have found that are not allowed within our folders will be deleted, and the uploader of the files will be banned from the website until further notice, this is a warning. We have created this feature for your pleasure, and we hope it used specifically for people to enjoy, not to take advantage of!<br/><br/><br/><center><img src="../images/angryhabbos2.gif"><br/><br/><b>THAT FILE TYPE IS NOT ALLOWED!</b><br/><i>Can you not read the rules?</i></center></body></html>');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
      die('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>That file is too big!</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>What do you think you are doing? This file is way too big!</b></font></td>
</tr></table><br>
<img src="../images/photographer.gif" align="right" /><img src="../images/camera.gif" align="left" />We know how you guys over at <b>vibeArray</b> like to take pictures of your screens, habbos and work youve created, so we have created a tool especially for you to host your images, and or different files, with a few exceptions! We promise that your files are safe and they will not be used for anything else other than your own use!<br/><br/>
We DO feel as if there are a few files we will not allow, such as executable programs (.exe) and other things such as .html, .php and all those files that you people think you can use our website for ;)<br/
<br/><br/>
We are very strict on what the files uploaded are used for, and if any file types we have found that are not allowed within our folders will be deleted, and the uploader of the files will be banned from the website until further notice, this is a warning. We have created this feature for your pleasure, and we hope it used specifically for people to enjoy, not to take advantage of!<br/><br/><br/><center><img src="../images/angryhabbos2.gif"><br/><br/><b>THAT FILE IS TOO LARGE!</b><br/><i>Can you not read the rules?</i></center></body></html>');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
         echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>That file is too big!</title>
<link href="../inc/css/content.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="613" border="0" cellpadding="0" cellspacing="0" id="Table1">
<tr>
<td align="center" valign="middle" background="../images/layout/content/title_bar.png" width="613" height="25" style="background-repeat:no-repeat;;background-position:center center"><font style="font-size:10px" color="#FFFFFF" face="Verdana"><b>What do you think you are doing? This file is way too big!</b></font></td>
</tr></table><br>
<img src="../images/photographer.gif" align="right" /><img src="../images/camera.gif" align="left" />We know how you guys over at <b>vibeArray</b> like to take pictures of your screens, habbos and work youve created, so we have created a tool especially for you to host your images, and or different files, with a few exceptions! We promise that your files are safe and they will not be used for anything else other than your own use!<br/><br/>
We DO feel as if there are a few files we will not allow, such as executable programs (.exe) and other things such as .html, .php and all those files that you people think you can use our website for ;)<br/
<br/><br/>
We are very strict on what the files uploaded are used for, and if any file types we have found that are not allowed within our folders will be deleted, and the uploader of the files will be banned from the website until further notice, this is a warning. We have created this feature for your pleasure, and we hope it used specifically for people to enjoy, not to take advantage of!<br/><br/><br/><center><img src="' . $upload_path . $filename . '"><br/><br/><b>Your image has been successfully uploaded!</b><br/><i>Want to use it for anything? Look below!</i><br/><br/><b>Direct Website Link:</b><br/><div class="message_box"><textarea class="message"><a href="http://www.keepanopenmind.net" target="_blank"><img src="http://www.keepanopenmind.net/uploads/files/' . $filename . '"></a></textarea><br/><br/><b>Forum Link:</b><br/><div class="message_box"><textarea class="message">[url=http://www.keepanopenmind.net][IMG]http://www.keepanopenmind.net/uploads/files/' . $filename . '[/IMG][/URL]</textarea><br/><br/><b>Image Path:</b><br/><div class="message_box"><textarea class="message">http://www.keepanopenmind.net/uploads/files/' . $filename . '</textarea><br/><br/></center></body></html>'; // It worked.
      else
         echo 'There was an error during the file upload.  Please try again.'; // It failed :(.
 
?>