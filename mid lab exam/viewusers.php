
        <body> 
            <table border="1" align="center">
                <tr>
                    <td>
                        <!-- <img src="logo.png" height="60px" width="200px"></img>  -->
                        <p style="text-align:right;"> 
                            <?php echo "Logged in as ".$_SESSION['user']['username']." | " ?>
                            <a href="logout.php">&nbspLogout</a>
                        </p>
                    </td>	
                </tr>
                <tr>
                    <td>
                        <fieldset>
                            <legend>View Users</legend>
                            <table border="1" style="width:100%">
                                <tr>
                                    <th>Username</th>
                                    <th>ID</th>
                                    <th>Role</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['role']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                            <br>
                            <a href="<?php echo ($_SESSION['user']['role'] === 'admin') ? 'adminhome.php' : 'userhome.php'; ?>">Dashboard</a> |
                            <a href="changePassword.php">Change Password</a> |
                            <a href="logout.php">Logout</a>
                        </fieldset>
                    </td>
                </tr>		
                
            </table>
        </body>
        </html>
        <?php
    } 
    
    
?>
