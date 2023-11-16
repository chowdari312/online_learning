<!DOCTYPE html>
<html lang="en">
<head>

    <title>login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
    font-family: cursive;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: cursive;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}


label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 10px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 7px;
    background-color: rgb(242, 255, 0);
    cursor: pointer;
}
button:hover{
    background-image:url('https://www.mordeo.org/files/uploads/2019/10/Chino-Kafuu-Anime-Girl-4K-Ultra-HD-Mobile-Wallpaper.jpg') ;
       
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
       h3 {
            margin-left: 60px;
            font-family: cursive;
            color: rgb(57, 243, 0);
            animation-name:dora;
            animation-delay: 3s;
            font-size:30px;
            animation-duration:3s;
            animation-iteration-count: infinite;
        }
        @keyframes dora 
        {
            0%{color: black;}
            25%{color: rgb(246, 226, 8);}
            50%{color: rgb(113, 251, 0);}
            75%{color: rgba(0, 93, 243, 0.949);}
            100%{color: rgb(249, 0, 0);}
        }

        .s>a{
            color:rgb(39, 243, 8);
            font-size: 23px;
        }
        .s
        {
            margin-top: 15px;
            color:red;
        }
       
    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="verify.php" method="post">
        <h3>Login Here</h3>

        <label for="password">Email</label>
        <input type="Email" name="email" placeholder="Email..." id="em">
        <label for="username">Password</label>
        <input type="password" name="name" placeholder="Password..." id="us">


        <button>Log In</button><br>

        <div class="s">
            Don't have an account?<a href="index.php">sign up</a>
          </div>
    </form>
</body>
</html>
