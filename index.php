<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.main_home {
    text-align: center;
}

.heading {
    color: #f20a8af4;
    margin-bottom: 5px;
}

.formcontent {
    background-color: #45a9f0;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(18, 199, 212, 0.1);
    width: 400px;
    box-sizing: border-box;
    margin-top: 10px;
}

.log {
    text-align: left;
    margin-bottom: 3px;
}

label {
    display: block;
    margin-bottom: 3px;
    color: #fd1717;
}

.in {
    width: 100%;
    padding: 5px;
    margin-bottom: 3px;
    box-sizing: border-box;
    border: 1px solid rgb(237, 38, 38);
    border-radius: 4px;
}

span {
    color: rgb(255, 0, 102);
}

.signsub {
    text-align: center;
}

button {
    background-color: #ec3b3b;
    color: #f99da4;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


body {
    background: #111d5e;
    color: #333;
    font: 100% Lato, Arial, Sans Serif;
    height: 100vh;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

#background-wrap {
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: -1;
}

/* OBJECTS */

.bubble {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
    -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
    -moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
    
    height: 200px;
    position: absolute;
    width: 200px;
}

.bubble:after {
    background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 70%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,0.5)), color-stop(70%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* IE10+ */
    background: radial-gradient(ellipse at center,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    
    -webkit-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
    -moz-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
    box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
    
    content: "";
    height: 180px;
    left: 10px;
    position: absolute;
    width: 180px;
}
/* ANIMATIONS */

.x1 {
    -webkit-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
    -moz-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
    animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate; 
    left: -5%;
    top: 5%; 
    -webkit-transform: scale(0.6);
    -moz-transform: scale(0.6);
    transform: scale(0.6);
}
.x2 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
    -moz-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
    animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
    
    left: 5%;
    top: 80%;
    
    -webkit-transform: scale(0.4);
    -moz-transform: scale(0.4);
    transform: scale(0.4);
}

.x3 {
    -webkit-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
    -moz-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
    animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
    
    left: 10%;
    top: 40%;
    
    -webkit-transform: scale(0.7);
    -moz-transform: scale(0.7);
    transform: scale(0.7);
}

.x4 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    
    left: 20%;
    top: 0;
    
    -webkit-transform: scale(0.3);
    -moz-transform: scale(0.3);
    transform: scale(0.3);
}

.x5 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    
    left: 30%;
    top: 50%;
    
    -webkit-transform: scale(0.5);
    -moz-transform: scale(0.5);
    transform: scale(0.5);
}

.x6 {
    -webkit-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
    -moz-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
    animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
    
    left: 50%;
    top: 0;
    
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    transform: scale(0.8);
}

.x7 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
    -moz-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
    animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
    
    left: 65%;
    top: 70%;
    
    -webkit-transform: scale(0.4);
    -moz-transform: scale(0.4);
    transform: scale(0.4);
}

.x8 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
    
    left: 80%;
    top: 10%;
    
    -webkit-transform: scale(0.3);
    -moz-transform: scale(0.3);
    transform: scale(0.3);
}

.x9 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
    
    left: 90%;
    top: 50%;
    
    -webkit-transform: scale(0.6);
    -moz-transform: scale(0.6);
    transform: scale(0.6);
}

.x10 {
    -webkit-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
    -moz-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
    animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
    
    left: 80%;
    top: 80%;
    
    -webkit-transform: scale(0.3);
    -moz-transform: scale(0.3);
    transform: scale(0.3);
}

/* KEYFRAMES */

@-webkit-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-moz-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-webkit-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@-moz-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

.animated-div {
           width:380px;
            height: 0;
            background-color:white;
            transition: height 1s ease; 
            overflow: hidden;
            
        }
        .animated-div li {
          list-style-type: none;
        }

        #showButton {
            margin-bottom: 10px;
            cursor: pointer;
            margin-right: 30px;
        }
       
    </style>

</head>
<body>
    <div class="main_home">
        <h1 class="heading">REGISTER</h1>
        <div class="formcontent">
            <form id="myform" action="dora.php" method="POST" ng-app="signupApp" ng-controller="SignupController" name="signupForm"  enctype="multipart/form-data">
                <div class="log">
                    <label for="username">Username:</label>
                    <input id="username" name="name" placeholder="Username" type="text" ng-model="username" class="in"  ng-change="validateUsername()" required><br>
                    <span style="color: red;" ng-show="erroruser">{{erroruser}}</span><br>
                </div>

                <div class="log">
                    <br><label for="email">Email:</label>
                    <input id="email" name="email" placeholder="Email" type="email" ng-model="email"   class="in" ng-change="validateEmail()" required><br>
                    <span style="color: red;" ng-show="errormail">{{errormail}}</span><br>
                </div>

                <div class="log">
                    <br><label for="password">Password:</label>
                    <input id="password" name="pass" placeholder="Password" type="password"  class="in" ng-model="password" ng-change="validatePassword()" required>
                    <span style="color: red;" ng-show="error3">{{error3}}</span><br>
                </div>
                <div class="log">
                    <label for="phoneNumber">Phone Number:</label>
                    <input id="phoneNumber" name="phone" placeholder="Phone Number"  class="in" type="tel" ng-model="phoneNumber" ng-change="validatePhoneNumber()" required><br>
                    <span ng-show="errorPhone">{{errorPhone}}</span><br>
                </div>
                
                <div class="log">
                    <label>Gender:</label> <br>
                    <input type="radio" value="Male" name="gen" > Male<br>
                     <input type="radio" value="Female" name="gen" > Female
                </div> 
                
        <div class="log">
                <p id="showButton" style="color:red">Courses:</p>
            <div class="animated-div" id="myDiv">
                <li><input type="checkbox" value="C-Language" name="c"> C-Language</li>
                <li><input type="checkbox" value="Python" name="py"> Python</li>
                <li><input type="checkbox" value="Java" name="java"> Java</li>
                <li><input type="checkbox" value="HTML" name="html"> HTML</li>
                <li><input type="checkbox" value="DBMS" name="dbms"> DBMS</li>
                <li><input type="checkbox" value="TOC" name="toc"> TOC</li>
            
            </div>
        </div>
                <div class="log">
                    <label for="profilePhoto">Profile Photo:</label>
                    <input id="profilePhoto" name="pic" type="file" accept="image/*"  class="in" ng-model="profilePhoto" ng-change="validateProfilePhoto()" required><br>
                    <span ng-show="signupForm.profilePhoto.$touched && errorPhoto">{{errorPhoto}}</span><br>
                </div>
                <div class="signsub">
                    <button type="submit">REGISTER</button><br>
                </div>
            </form>
            <div id="background-wrap">
                <div class="bubble x1"></div>
                <div class="bubble x2"></div>
                <div class="bubble x3"></div>
                <div class="bubble x4"></div>
                <div class="bubble x5"></div>
                <div class="bubble x6"></div>
                <div class="bubble x7"></div>
                <div class="bubble x8"></div>
                <div class="bubble x9"></div>
                <div class="bubble x10"></div>
            </div>
        </div>
    </div>
</body>
<script>
    const showButton = document.getElementById("showButton");
    const myDiv = document.getElementById("myDiv");

    let divVisible = false;

    showButton.addEventListener("click", () => {
        if (divVisible) {
            myDiv.style.height = "0";
            myDiv.style.border = "none";
            divVisible = false;
        } else {
            myDiv.style.height = "122px";
            myDiv.style.border = "1px solid red";
            divVisible = true;
        }
    });
</script>
<script>
    var app = angular.module('signupApp', []);

    app.controller('SignupController', function ($scope) {
        $scope.courses = ['C', 'Python', 'Java', 'HTML', 'DBMS', 'TOC'];

        $scope.validateUsername = function () {
            var username = $scope.username;
            var usernamePattern = /^[A-Z][A-Za-z0.9]*\d.*$/;

            if (usernamePattern.test(username)) {
                $scope.erroruser = "";
                return true;
            } else {
                $scope.erroruser = "Username must start with a capital letter and contain at least one digit";
                return false;
            }
        };

        $scope.validateEmail = function () {
            var email = $scope.email;
            var emailPattern =/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            if (emailPattern.test(email)) {
                $scope.errormail = "";
                return true;
            } else {
                $scope.errormail= "Email must be valid";
                return false;
            }
        };
$scope.validatePassword = function () {
        var password = $scope.password;
        var uppercaseFlag = false;
        var lowercaseFlag = false;
        var specialCharFlag = false;
        var excludedChars = ",.;:";
        var specialChars = "!@#$%^&*()-_=+{}[]|'\"<>";

        if (password.length == 0) {
            $scope.error3 = "";
        }

        if (password.length < 8) {
            $scope.error3 = "Password must be at least 8 characters long";
            return false;
        }

        for (var i = 0; i < password.length; i++) {
            if (password[i] >= 'A' && password[i] <= 'Z') {
                uppercaseFlag = true;
            } else if (password[i] >= 'a' && password[i] <= 'z') {
                lowercaseFlag = true;
            } else if (specialChars.indexOf(password[i]) !== -1) {
                specialCharFlag = true;
            } else if (excludedChars.indexOf(password[i]) !== -1) {
                $scope.error3 = "Password must not contain , . ; :";
                return false;
            }
        }

        if (uppercaseFlag && lowercaseFlag && specialCharFlag) {
            $scope.error3 = "";
            return true;
        } else {
            $scope.error3 = "Password must contain at least 1 uppercase letter, 1 lowercase letter, and 1 special character";
            return false;
        }
    };
    $scope.validatePhoneNumber = function () {
                var phoneNumber = $scope.phoneNumber;
                var phonePattern = /^\d{10}$/;

                if (phonePattern.test(phoneNumber)) {
                    $scope.errorPhone = "";
                    return true;
                } else {
                    $scope.errorPhone = "Phone Number must consist of  digits with length 10";
                    return false;
                }
            };
            $scope.validateProfilePhoto = function () {
                var profilePhoto = $scope.profilePhoto;

                if ($scope.signupForm.profilePhoto.$touched && !profilePhoto) {
                    $scope.errorPhoto = "Profile Photo is not uploaded";
                    return false;
                } else {
                    $scope.errorPhoto = "";
                    return true;
                }
            };
});
</script>
</html>
