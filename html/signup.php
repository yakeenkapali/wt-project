<?php require_once "head.php" ?>
<head>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
    <section id="signup">
        <div class="Container">
            <h1>SignUp</h1>
            <form action="../includes/signup-inc.php" method="post">
                <label>Full Name</label><br>
                <input type="text" name="name" ><br>
                <label>Email</label><br>
                <input type="email" name="email" ><br>
                <label>Username</label><br>
                <input type="username" name="username"  ><br>
                <label>Password</label><br>
                <input type="password" name="password" ><br>
                <label>Retype Password</label><br>
                <input type="password" name="reppassword" ><br>
                <button type="submit" name="button2" class="button2"> Sign Up </button>
            </form>
        </div>

        
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinputs"){
                echo "<script> alert('Fill in all fields!')</script>";               
            }
            else if($_GET["error"] == "invalidusername"){
                echo "<script> alert('Invalid Username!')</script> ";
                //echo "<p>Invalid Username!</p> ";
            }
            else if($_GET["error"] == "passworddontmatch"){
                echo "<script> alert('Password don't match!')</script>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<script> alert('Statement failed!')</script>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<script> alert('Username Taken!')</script>";
            }    
            else if($_GET["error"] == "none"){
                echo "<p> <script> alert('Signed Successfully')</script>";
            }

        }       
    ?>

    </section>

</body>
</html>