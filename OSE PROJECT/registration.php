<!DOCTYPE html>
<html lang="en">
<style>
body{
    background-color: #96b9d0;
}
.register{
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
    height: 400px;
    border-radius: 50px;
    width: 600px;
    margin-left: 300px;
    margin-top: 20px;
    padding-top: 70px;
}
form{
    text-align: center;
    font-size: large;
    font-family: arial;
    font-weight: bold;
    margin-left: 50px;
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
    margin-top: 30px;
    margin-left: -50px;
}
img{
    border-radius: 100px;
    width: 55px;
    height: 55px;
    margin-top: -45px;
    margin-bottom: 45px;
    margin-left: 1130px;
}
a{
    color: white;
    text-decoration: none;
}


</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div class="register">
    <h1>Registration
        <div class="OSE_Logo">
            <img src="OSE logo.jpg">
        </div>
    </h1>
    </div>

    <div class="main">
    <form action="registration.php" method="post">

    <table>
        <tbody>
        <tr class="trlastname">
            <th><label for="lastname">Last Name:</label></th>
            <th><input type="text" name="lastname" id="lastname"></th>
        </tr>
        <tr class="trfirstname">
            <td><label for="firstname">First Name:</label></td>
            <td><input type="text" name="firstname" id="firstname"></td>
        </tr>
        <tr class="tremail">
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr class="trpassword">
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr class="trconpassword">
            <td><label for="password2">Confirm Password:</label></td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        </tbody>
    </table>

    <div class="submit_button">
    <a href="login.php"><button type="button">Submit</a></button>
    </div>

</div>
</body>

</html>