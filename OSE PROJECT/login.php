<!DOCTYPE html>
<html lang="en">
<style>
body{
    background-color: #96b9d0;
}
.login{
    background-color: #2C2A54;
    height: 80px;
    margin-top: -23px;
    margin-right: -8px;
    margin-left: -8px;
    color: white;
    margin: top 40px;
    text-indent: 30px;
    font-family: arial;
    padding-top: 20px;
}
.main{
    top: 30px;
    background-color: #EDD3A5;
    height: 330px;
    border-radius: 50px;
    width: 600px;
    margin-left: 300px;
    margin-top: 20px;
    padding-top: 140px;
}
form{
    text-align: center;
    font-size: large;
    font-family: arial;
    font-weight: bold;
    margin-left: 70px;
}
tr{
    text-align: left;
}
input{
    padding: 5px;
    border-radius: 10px;
    width: 280px;
    height: 15px;
    border-color: beige;
    margin-left: 30px;
    margin-bottom: 25px;
}
button{
    background-color: #64483A;
    width: 150px;
    border-radius: 10px;
    border-width: 0px;
    font-size: 30px;
    color: white;
    margin-top: 70px;
    margin-left: -90px;
}
a{
    color: white;
    text-decoration: none;
}
.pass{
    margin-bottom: 0px;
}
.forgotpass{
    font-style: italic;
    color: #A4723A;
    margin-left: 100px;
    margin-top: 0px;
}
img{
    border-radius: 100px;
    width: 55px;
    height: 55px;
    margin-top: -45px;
    margin-bottom: 45px;
    margin-left: 1130px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login">
    <h1>Login
        <div class="OSE_Logo">
            <img src="OSE logo.jpg">
        </div>
    </h1>
    </div>

    <div class="main">
    <form action="login.php" method="post">

    <table>
        <tbody>
        <tr class="tremail">
            <th><label for="email">Email:</label></th>
            <th><input type="text" name="email" id="email"></th>
        </tr>
        <tr class="trpassword">
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password" class="pass"></td>
        </tr>
        <tr class="trforgotpassword">
            <td><label for="password" ></label></td>
        </tr>
        <tr class="trLoginType">
            <td><label for="LoginType" ></label></td>
            <td>
                <select>
                    <option>Student</option>
                    <option>Admin</option>
                </select>    
            </td>
        </tr>
        </tbody>
    </table>
    <td><a href="forgotpass.php" class="forgotpass">Forgot Password?</td>

    <div class="submit_button">
    <a href="homepage.php"><button type="button">Login</a></button>
    </div>
</body>
</html>