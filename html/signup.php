<?php require_once "head.html" ?>

<body>
    <section id="signup">
        <div class="Container">
            <h1>SignUp</h1>
            <form action="../includes/signup-inc.php" method="post">
                <label>Full Name</label>
                <input type="text" name="name" ><br>
                <label>Email</label>
                <input type="email" name="email" ><br>
                <label>Username</label>
                <input type="username" name="username"  ><br>
                <label>Password</label>
                <input type="password" name="password" ><br>
                <label>Retype Password</label>
                <input type="password" name="reppassword" ><br>
                <button type="submit" name="button2" class="button2"> Sign Up </button>
            </form>
        </div>

        
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinputs"){
                echo "<p> Fill in all fields! </p>";
            }
            else if($_GET["error"] == "invalidusername"){
                echo "<p> Invalid Username! </p>";
            }
            else if($_GET["error"] == "passworddontmatch"){
                echo "<p> Invalid Password dont match! </p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p> Try again! </p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p> Username Taken! </p>";
            }    
            else if($_GET["error"] == "none"){
                echo "<p> Sucessfully Signed Up </p>";
            }

        }       
    ?>

    </section>

</body>
</html>