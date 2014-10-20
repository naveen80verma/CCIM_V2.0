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
				<?php 
					if(isset($_GET['status']) && $_GET['status']=='done')
					{
						if(isset($_GET['page']) && $_GET['page']=='status')
						{
						?>
						<div>
                           <span  class="notification n-success">User status has been updated.</span>
						</div>
						<?php
						}
						else
						{
						?>
						<div>
                           <span  class="notification n-success">User has been deleted.</span>
						</div>
						<?php
						}
					}
					if(isset($_GET['status']) && $_GET['status']=='done')
					{
				?>
					<div style="display:none" id="error">
							<span  class="notification n-error" >Oops Something went wrong.Please try again later.</span>
                    </div> 
                <?php
					}	
				?>
                <div class="bottom-spacing">                
                    <!-- Button -->
                    <div class="float-right">
                        <a href="adduser.php" class="button">
                        	<span>New User <img src="images/plus-small.gif" tppabs="images/plus-small.gif" width="12" height="9" alt="New User"/></span>
                        </a>
                    </div>                                        
                </div>
				<div class="grid_12">            
                 <div class="module">
                	<h2><span>Users</span></h2>                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:20%">Name</th>
									<th style="width:20%">Username</th>
									<th style="width:20%">Email</th>
                                    <th style="width:21%">Password</th>
                                    <th style="width:15%"></th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php
							$query=mysql_query("select * from stage1users where number!='99' order by id desc");
							$num=1;
								while($result=mysql_fetch_assoc($query))
								{
								if($result['status']=='y' || $result['status']=='')
								{
								$status2='n';
								}
								if($result['status']=='n')
								{
								$status2='y';
								}
							?>
                                <tr>
                                    <td class="align-center"><?php echo $num; ?></td>
                                    <td><?php echo $result['name']; ?></td>
									<td><?php echo $result['username']; ?></td>
									<td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['password']; ?></td>
                                    <td>
									<?php 
									if($status2=='n')
									{
									
									?>
                                      <a href="userstatus.php?id=<?php echo $result['id']?>&status=<?php echo $status2; ?>"><img src="images/tick-circle.gif" tppabs="images/tick-circle.gif" width="16" height="16" alt="published" /></a>
									<?php 
									}
									else
									{
									?>
									<a href="userstatus.php?id=<?php echo $result['id']?>&status=<?php echo $status2; ?>"><img src="images/minus-circle.gif" tppabs="images/minus-circle.gif" width="16" height="16" alt="published" /></a>
									<?php
									}
									?>							
                                     <a href="edituser.php?id=<?php echo $result['id']?>"><img src="images/pencil.gif" tppabs="images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                     <a href="delete.php?id=<?php echo $result['id']?>"><img src="images/bin.gif" tppabs="images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
							<?php 
							$num++;
							}
							?>
                               
							</tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>                      
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->                
			</div> 								<!-- End .module -->
        		<div style="clear:both;"></div>
            </div>
		</div>
	</div>
</div>
