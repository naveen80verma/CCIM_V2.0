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
                     <h2><span>Add User</span></h2>
                        
                     <div class="module-body">
                        <form action="adduser.php" method="post">
                        
                            <div style="display:none" id="success">
                                <span  class="notification n-success">User has been added.</span>
								</div>
								<div style="display:none" id="error">
								 <span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                            </div>
                             <p>
                                <label>Name</label>
                                <input type="text" class="input-short" name="name"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            <p>
                                <label>Username</label>
                                <input type="text" class="input-short" name="username"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
							 <p>
                                <label>Email</label>
                                <input type="text" class="input-short" name="email"/>
                               <!-- <span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password" class="input-short" name="password" />
                                <!--<span class="notification-input ni-correct">This is correct, thanks!</span>-->
                            </p>
                            
                            <fieldset>
                                <input class="submit-green" type="submit" name="submit" value="Add User" /> 
          
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['submit']) && $_POST['submit']=='Add User')
	{
		$query=mysql_query("insert into stage1users(name,username,email,password,status)values('".$_POST['name']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','y')");
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