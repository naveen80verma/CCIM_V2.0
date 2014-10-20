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
                     <h2><span>Voting Status</span></h2>
                        
                     <div class="module-body">
                        <form action="voting.php" method="post">
                        
                            <div style="display:none" id="success">
                                <span  class="notification n-success">Status has been updated.</span>
								</div>
								<div style="display:none" id="error">
								 <span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                            </div>
                            <p>
                                <label>Select Voting Status</label>
                                <select class="input-medium" name="voting">
                                    <option value="">Select Status</option>
                                    <option value="enabled">Enabled</option>
                                    <option value="disabled">Disabled</option>
                                </select>
                            </p>
                            
                            <fieldset>
                                <input class="submit-green" type="submit" name="submit" value="Change Status" /> 
          
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
	if(isset($_POST['submit']) && $_POST['submit']=='Change Status')
	{
		$query=mysql_query("update voting set status='".$_POST['voting']."' where id='1'");
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