<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan m8</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            position: relative;
            background:darkturquoise;
            border-radius: 10px;
        }
        
        label{
            color: floralwhite;
        }

        .body-bg {
            position: absolute;
            left: 0;
            bottom: 0;
            border-radius: 10px;
        }

        .bucket {
            width: 25vw;
            background-color: rgba(67, 0, 220, 0.4);
            /* margin: 25vh auto; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 25px;
            font-size: 12pt;
            /* box-shadow: 10px 10px 5px grey; */
        }

        .bucket p {
            text-align: center;
            color :floralwhite;
        }

        .login-field {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            /* background: transparent; */
            border: none;
            text-shadow: 0 0 whitesmoke;
            font-weight: 600;
            opacity: 0.8;
            /* color: white; */
            border-radius: 7px;
        }

        .login-btn-submit {
            background-color: #46de4b;
            color: white;
            font-size: 10pt;
            width: 30%;
            border: none;
            text-align: center !important;
            border-radius: 15px;
            padding: 8px 16px;
            cursor: pointer;
        }
        :hover.login-btn-submit{
            color: green;
        }
        img{
            margin : 5em ;
            margin-top: 10em;
            
            height: 30em;
        }
    </style>
</head>

<body>
    <!-- <img src="./assets/wave.svg" alt="wave background" class="body-bg"> -->
    <img src="Illustrasi mobile.png" alt="Gambar hp">
    <div class="bucket">
        <p>You Must Log In to Continue</p>
        <br>
        <br> 
        <form action="./login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <center><input type="submit" name="login" value="Login" class="login-btn-submit"></center>
        </form>
    </div>
</body>

</html>