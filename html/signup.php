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
                <input type="password" name="password2" ><br>
                <button type="submit" name="button2" class="button2"> Sign Up </button>
            </form>
        </div>
    </section>
</body>
</html>