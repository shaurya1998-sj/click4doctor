
						<ul>
                        <?php
							if(!isset($_SESSION['type']) && empty($_SESSION['type']))
							{?>
							<li class="login"><a href="login.php">Login</a></li>
                            <li class="sign"><a href="signup.php">Sign up</a></li>
							<?php	
							} 
							
							if($_SESSION['type']=="doctor")
							{
							?>
							<li class="login"><a href="logout.php">Logout</a></li>
                            <li class="sign"><a href="profiledoc.php">Profile</a></li>
							
							<?php
							}							
							if($_SESSION['type']=="patient")
							{
							?>
							<li class="login"><a href="logout.php">Logout</a></li>
                            <li class="sign"><a href="profile.php">Profile</a></li>
							
							<?php
							}?>
						</ul>