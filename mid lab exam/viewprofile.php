
<html>
    <head>
        <title>View Profile</title>
    </head>
    <body> 
	<table border="1" align="center">
	
	<tr>
  <td><!-- <img src="logo.png" height="60px" width="200px"></img>  -->
	
    </p>
	</td>	
	  </tr>
	
	<tr>
    <td>
        <fieldset>
			<legend>View Profile</legend>
        <form method="post" action="" enctype="">            
			  <table border="1"  style="width:100%">

              <tr>
                <td>
                      <ul>
                     <li><a href="<?php echo ($role === 'admin') ? 'adminhome.php' : 'userhome.php'; ?>">Dashboard</a></li>
                     <li><a href="changePassword.php">Change Password</a></li>
                     <li><a href="logout.php">Logout</a></li>
                    </ul> 
              </td>
			  <td>
        <fieldset>   
          <legend>Profile</legend> 
                <?php echo "Username: ".$username;?>  <br><br>
                <?php echo "ID: ".$id; ?> <br><br>
                <?php echo "Role: ".$role; ?> <br><br>
                </fieldset>
              </td>
              </tr>
         </table>
        </form>		
		</fieldset>
		</td>
  </tr>		
		
		</table>
    </body>
</html>
