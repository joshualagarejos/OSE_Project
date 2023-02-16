<!DOCTYPE html>
<html lang="en">
<style>
body{
    background-color: #96b9d0;
}
.homepage{
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
h2{
    margin-top: 30px;
    margin-left: 730px;
    border-top: 5px;
    font-family: arial;
    font-size: 20px;
}
.main{
    top: 20px;
    background-color: #EDD3A5;
    height: 480px;
    border-radius: 50px;
    width: 1000px;
    margin-left: 100px;
}
.unknown_user{
    border-radius: 100px;
    width: 80px;
    height: 80px;
    margin-top: 30px;
    margin-left: 10px;
}
table{
    margin-top: 50px;
    margin-left: 80px;
}
th, td{
    padding: 15px;
}
button{
    background-color: #64483A;
    width: 400px;
    border-radius: 10px;
    border-width: 0px;
    font-size: 40px;
    color: white;
}
a{
    color: white;
    text-decoration: none;
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
    <title>Homepage</title>
</head>

<body>
    <div class="homepage">
    <h1>Homepage
        <div class="logo">
        <a href="homepage.php"><img src="OSE logo.jpg"></a>
        </div>
    </h1>
    </div>
    <div class="main">
    <h2>Welcome, User <img class="unknown_user" src="unknown user.jpg"> </h2>
    <table>
        <tbody>
            <tr class="button1">
                <th><a href="grantees-portal.php"><button type="button">My Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ></a></button></th>
            </tr>
            <tr class="button2">
                <td><a href="enrollment-sis.php"><button type="button">Enrollment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ></a></button></td>
                <td><a href="schedule-viewing.php"><button type="button">Schedule &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ></a></button></td>
            </tr>
            <tr class="button3">
                <td><a href="clearance-record.php"><button type="button">Clearance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ></a></button></td>
                <td><a href="requirement-viewing.php"><button type="button">View Requirements></a></button></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>

</html>