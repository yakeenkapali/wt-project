<?php 
    require_once 'html/head.php';
?> 
    
    <body>
        <header>
            <div class="container">    
                <div class="branding">
                    <h1>Kurakani</h1>
                </div>
                
                <nav class="navtext">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="html/messages.php">Messages</a></li>    
                        <li><a href="html/logged-in.php">About</a></li>
                        <li><a href="html/messages.php">Notifications</a></li>
                    </ul>
                </nav>
                <nav class="navicon">
                <ul>
                    <li><a href="index.php"> <img src="images/home.png" alt="home"> </a></li>
                    <li><a href="html/messages.php"> <img src="images/messages.png" alt="home"> </a></li>
                    <li><a href="html/messages.php"> <img src="images/about.png" alt="home"> </a></li>
                    <li><a href="html/messages.php"> <img src="images/notification.png" alt="home"> </a></li>
                </ul>
                </nav>
                <div class="container1 ">
                    <h1>Connect with </h1> <h1> Friends</h1>
                    <p>Chat any time <br> any where</p>
                </div>

            </div>
        </header>
        
        


            

        <section id="login">
           
            <div class="container2">
                <form action="includes/login-inc.php" method="post">
                    <h1>Login</h1>
                    <label id="uid">Username</label><br>
                    <input type="text" name="uid" placeholder="Enter your username"><br>
                    <label id="uid">Password</label><br>
                    <input type="password" name="pwd" placeholder="Enter your password"><br>  
                    <button type="submit" name="button1" class="button1">Login</button><br> 
                    <p>Don't have account? <a href="html/signup.php">SignUp</a> </p>    
                </div>    
                </form>
            <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinputs"){
                echo "<p> Fill in all fields! </p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p> Wrong login </p>";
            }
        }       
    ?>
        </section>
    </body>

</html>