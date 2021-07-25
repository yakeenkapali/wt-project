<?php require_once 'head.php' ?>
<?php require_once '../includes/conn.php'?>
<?php require_once '../includes/function-inc.php'?>

<style>
    * {
        box-sizing: border-box;       
        margin: 0;
        padding: 0;
    }

    body{
        font-family: 'Poppins', sans-serif; 
        background: #100146; 
    }
    .container{
        /* height: auto; */
        width: 90%;

        margin: 3.75em auto;
        /* margin-left: auto;
        margin-right: auto; */
        display: grid;
        grid-gap: 1rem;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        place-items: center;
    }
    .connection-img{
        width: 100%;
        /* margin: 100px 0 100px 100px; */
    }
    .textmsg{
        color: #d0cde1;
        font-size: 1rem;
    }
    .username{
        color: #DE5076;
    }
    @media only screen and (max-width: 700px) { 
        html{
            font-size: 10px;
        }
        .container{
            display: grid;
            grid-gap: 1rem;
            grid-template-columns: repeat(1, 1fr);
        }
        .textmsg{
            text-align: center;
        }
    }
</style>

<body>
    <div class="container">
        <div>
            <img class= "connection-img" src="../images/connection.svg" alt="svg">
        </div>
        <div class="textmsg">
            <h2>Hey!</h2><h2 class="username">$username.</h2>
            <h2>Thank you for logging in!</h2>
        </div>
    </div>
</body>
