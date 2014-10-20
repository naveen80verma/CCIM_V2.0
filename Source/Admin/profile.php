<?php 
	include("common/connect.php"); 
    include("common/header.php");
	if( !isset($_SESSION["admin_name"]) ){
    header("location:login.php");
    exit();
	}
?>
 <div style="clear:both;"></div>
            
            <div class="container_12">
            
            <div class="grid_12">
                
                <!-- Notification boxes -->
                <!--<span class="notification n-success">Success notification.</span>
                
                <span class="notification n-information">Information notification.</span>
                
                <span class="notification n-attention">Attention notification.</span>
                
                <span class="notification n-error">Error notification.</span>-->
               
                
                <div class="bottom-spacing">
				<div class="grid_6">
            
                <div class="module">
                     <h2><span>Edit Profile</span></h2>
                        
                     <div class="module-body">
                        <form action="profile.php" method="post">
                        
                            <div style="display:none" id="success">
                                <span  class="notification n-success">Profile has been updated.</span>
								</div>
								<div style="display:none" id="error">
								 <span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                            </div>
                            <?php
							$id=$_SESSION['admin_id'];
	if(isset($_POST['submit']) && $_POST['submit']=='Edit Profile')
	{
		$query=mysql_query("update admin set name='".$_POST['name']."',username='".$_POST['username']."',email='".$_POST['email']."' where id='".$id."'");
		$_SESSION["admin_name"]=$_POST['name'];
		if($query)
		{
	?>
			<script type="text/javascript">
				document.getElementById("success").style.display="block";
			</script>
	<?php
		}
		else
		{
		?>
			<script type="text/javascript">
				document.getElementById("error").style.display="block";
			</script>
	<?php
		}
	}
	?>
	<?php

$query2=mysql_query("select * from admin where id='".$id."'");
$row=mysql_fetch_assoc($query2);

?> 
							 <p>
                                <label>Full Name</label>
                                <input type="text" class="input-medium" name="name" value="<?php echo $row['name']; ?>"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            <p>
                                <label>Username</label>
                                <input type="text" class="input-medium" name="username" value="<?php echo $row['username']; ?>"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
							
                            <p>
                                <label>Email</label>
                                <input type="email" class="input-medium" name="email" value="<?php echo $row['email'];?>"/>
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            
                            <fieldset>
                                <input class="submit-green" type="submit" name="submit" value="Edit Profile" /> 
          
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div>
			<div style="clear:both;"></div>
			 <div class="grid_6">
                <div class="module">
                     <h2><span>Password</span></h2>
                       
                     <div class="module-body">
                        <form action="profile.php" method="post">
						 <div style="display:none" id="success1">
                                <span  class="notification n-success">Password has been updated.</span>
								</div>
								<div style="display:none" id="error1">
								 <span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                            </div>
							<?php
if(isset($_POST['submit2']) && $_POST['submit2']=='Change Password')
	{
		if($_POST['pass1'] == $_POST['pass2'])
		{
		$query=mysql_query("update admin set password='".$_POST['pass1']."' where id='".$id."'");
		if($query)
		{
	?>
			<script type="text/javascript">
				document.getElementById("success1").style.display="block";
			</script>
	<?php
		}
		else
		{
		?>
			<script type="text/javascript">
				document.getElementById("error1").style.display="block";
			</script>
	<?php
		}
	}
	else
	{
	?>
	<script type="text/javascript">
				document.getElementById("error1").style.display="block";
			</script>
	<?php
	}
	}
?> 
                            <p>
                                <label>Type in new password</label>
                                <input class="input-medium password" type="password" name="pass1"/>
                            </p>
                            <p>
                                <label>Repeat password</label>
                                <input type="password" class="input-medium" name="pass2"/>
                            </p>
                            <fieldset>
                                <input class="submit-green" type="submit" value="Change Password" name="submit2"/>                               
                            </fieldset>
                        </form>
                        
                     </div> <!-- End .module-body -->
                </div> <!-- End .module -->
                <div style="clear:both;"></div>
            </div>
			
			
		</div>
	</div>
</div>
