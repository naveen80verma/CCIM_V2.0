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
				<div class="grid_12">
            
                <div class="module">
                     <h2><span>Edit Users</span></h2>
                        
                     <div class="module-body">
                        <form action="" method="post">
                        
                            <div style="display:none" id="success">
                                <span  class="notification n-success">User has been updated.</span>
								</div>
								<div style="display:none" id="error">
								 <span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                            </div>
                            <?php
	if(isset($_POST['submit']) && $_POST['submit']=='Edit User')
	{
		$query=mysql_query("update stage1users set name='".$_POST['name']."',email='".$_POST['email']."',username='".$_POST['username']."',password='".$_POST['password']."' where id='".$_GET['id']."'");
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
$id=$_GET['id'];
$query2=mysql_query("select * from stage1users where id='".$id."'");
$row=mysql_fetch_assoc($query2);
?> 
							 <p>
                                <label>Name</label>
                                <input type="text" class="input-short" name="name" value="<?php echo $row['name']; ?>"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            <p>
                                <label>Username</label>
                                <input type="text" class="input-short" name="username" value="<?php echo $row['username']; ?>"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
							 <p>
                                <label>Email</label>
                                <input type="text" class="input-short" name="email" value="<?php echo $row['email']; ?>"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password" class="input-short" name="password" value="<?php echo $row['password'];?>"/>
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            
                            <fieldset>
                                <input class="submit-green" type="submit" name="submit" value="Edit User" /> 
          
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div>
		</div>
	</div>
</div>
