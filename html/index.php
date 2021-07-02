<?php require_once "head.html" ?> 
    <body>
        <header>
            <div class="container">
                <div class="branding">
                    <h1>Kurakani</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.html">Messages</a></li>    
                        <li><a href="index.html">About</a></li>
                        <li><a href="index.html">Notifications</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="showcase">
            <div class="container1">
                <h1>Connect With Friends</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur. 
                </p>
            </div>

            <div class="container2">
                <form action="../includes/login-inc.php" method="post">
                    <h1>Login</h1>
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter your username"><br>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <button type="submit" name="button1" class="button1">Login</button>
                    <a href="signup.php">SignUp</a> 
                </form>
            </div>
        </section>
    </body>
</html>