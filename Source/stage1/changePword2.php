<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link type="text/css" rel="stylesheet" href="folderCSS/login.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Business Excellence Awards</title>
</head>

<body>
<h1>Change Password</h1>
<div id="mainContent">
    <form name="reg" action="changePword.php" onsubmit="return validateForm()" method="post">
    <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
    <td colspan="2">
    <div align="center">
    <?php
    $remarks=$_GET['remarks'];
    if ($remarks==null and $remarks=="")
    {
    echo '';
    }
    if ($remarks=='success')
    {
    echo 'Registration Success';
    }
    ?>	
    
    
    </div></td>
    </tr>
    <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="myusername" /></td>
    </tr>
    <tr>
    <td><div align="right">Old Password:</div></td>
    <td><input type="text" name="mypassword" /></td>
    </tr>
    <tr>
    <td><div align="right">New Password:</div></td>
    <td><input type="text" name="newmypassword" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form>
   </div> 
</body>
</html>
