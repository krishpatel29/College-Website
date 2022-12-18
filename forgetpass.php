<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://css.gg/profile.css' rel='stylesheet'>
    <title>Sign Up</title>
    <style>
        *
        {
            box-sizing: border-box;
            font-family: Cambria; 
        }
        html 
        { 
            background: url(images\\bg.jpg) no-repeat center center fixed;
            background-size: cover;
            height: 100%;
        }
        h2
        {
            color: rgb(59 48 185 / 90%);
        }
        h3
        {
            color: rgba(0, 0, 0, 0.9);
            text-align: center;
            border: 1px solid black;
            border-radius: 10px;
            background-color: rgb(89, 86, 86);
            margin: 20px;
            margin-left: 100px;
            margin-right: 100px;
        }
        .header
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            border: 1px solid rgb(77, 77, 77);
            background-color: rgba(116, 112, 112, 0.5);
        }
        .logo
        {
            width: 70px;
            cursor: pointer;
        }
        li,a,i
        {
            font-family: 'Roboto Slab', serif;
            font-weight: 400;
            font-size: 21px;
            color: rgb(59 48 185 / 90%);
            text-decoration: none;
        }   
        .nav_links
        {
            text-decoration: none;
            list-style: none;
        }
        .nav_links li
        {
            display: inline-block;
            padding: 0px 20px;
            
        }
        .nav_links li a
        {
            transition: all 0.3s ease 0s;
        }
        .nav_links li a:hover
        {
            color: rgb(0, 0, 0);
            border: 1px dotted black;
            padding: 10px;
        }
        .main
        {
            border: 2px solid black;
            margin: 10px;
            margin-top: 50px;
            text-align: center;
            background-color: rgba(116, 112, 112, 0.5);
            padding-bottom: 15px;
        }
        label
        {
            position: relative;
            left: -80px;
            font-size: 15px;
            color: black;
        }
        input
        {
            background-color: white;
            color: black;
        }
        input,.login{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            width: 240px;
            height: 35px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .login
        {
            width: 121px;
            height: 25px;
            margin: 0;
            margin-bottom: 10px;
            padding: 0;
            font-size: 15px;
            background-color: black;
            color: white;
        }
        .fpass
        {
            font-size: 12px;
            position: relative;
            left: 70px;
        }
        .labelp
        {
            position: relative;
            left:-40px;
        }
        .otp
        {
            position: relative;
            left: -98px;
        }
        .passs
        {
            position: relative;
            left: -64px;
        }
        .main2
        {
            border: 2px solid black;
            margin: 10px;
            margin-top: 50px;
            text-align: center;
            background-color: rgba(116, 112, 112, 0.5);
            padding-bottom: 15px;
            padding: 10px;
        }
        @media screen and (max-width:1081px) {
            .header
            {
                flex-wrap: wrap;
            }
        }
        @media  screen and (max-width:557px) {
            li,a,i
            {
                margin: 10px;
            }
            .profile
            {
                margin-left: 204px;
                margin-top: -8px;
            }
        }
        
        @media  screen and (max-width:391px) and (max-height:845px){
            li,a,i
            {
                margin-left: 10px;
                font-size: 15px;
            }
            .profile
            {
                display: none;
            }
            .logo
            {
                display: none;
            }
            h2
            {
                display: none;
            }
        }
        @media screen and (max-width:270px)
        {
            input
            {
                width: 125px;
            }
            label
            {
                left: -26px;
            }
            h3
            {
                border: none;
                background: none;
                margin-left: 75px;
                margin-right: 57px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img class="logo" src="images//logo.png" alt="">
            <h2>Madhuben and Bhanubhai institute</h2>
            <ul class="nav_links">
                <li><a title="Home Page" class="home1" href="home.html">Home</a></li>
                <li><a title="Sign Up" class="signup1" href="signup.php">Sign Up</a></li>
                <li><a title="Login Page" href="login.php">Login</a></li>
                <li><a title="About Us" class="aboutus" href="aboutus.html">About Us</a></li>
            </ul>
    
            <a title="Profile" class="profile" href="#"><i class="gg-profile"></i></a>

        </div>
        <form action="">
        <div class="main">
            <h3>Reset password</h3>
            <div class="">
            <label for="pass" class="passs">New Password:</label><br>
            <input id="pass1" class="inp" type="password" placeholder="Enter new password"><br><br>
            <label  class="labelp"for="pass">Confirm your password:</label><br>
            <input id="pass2" class="inp" type="password" placeholder="Re-enter password"><br>
            <button class="login" type="submit" onclick="myfunction()">Reset</button>
        </div>
        </div>
        
        </form>
        <div class="footer">
            
        </div>
        <script>
            function myfunction(){
                let pass1=document.getElementById('pass1').value;
                let pass2=document.getElementById('pass2').value;
                let tel=document.getElementById('tel').value;

                if(tel.length!==10)
                {
                    alert('Enter valid number.');
                }
                else
                {
                    if(pass1.length<4)
                    {
                        alert('Weak Password.');
                    }
                    else
                    {
                        if(pass1!==" ")
                        {
                            if(pass1!==pass2)
                            {
                                alert('Password does not match.');
                            }
                            else
                            {
                                alert('You have successfully changed your password.');

                            }
                        }
                    }
                }
            }
        </script>
</body>
</html>