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
    margin-left: 230px;
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
    <title>Schedule Viewing</title>
</head>

<body>
    <?php
    
        $mysqli = new mysqli('localhost','root','','osedb') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM usertable") or die($mysqli->error);
    
    ?>
    <div class="register">
    <h1>Student List
        <div class="OSE_Logo">
            <a href="homepage.php"><img src="OSE logo.jpg"></a>
        </div>
    </h1>
    </div>

    <div class="main">

    <div align="center">
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
        <?php
            while($row = $result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['user_id']?></td>
                    <td><?php echo $row['user_firstName']?></td>
                    <td><?php echo $row['user_lastName']?></td>
                    <td>
                        <a href="">View Requirements</a>
                    </td>
                </tr>
            


            <?php endwhile; ?>
        </table>
    </div>

    <div class="back_button">
    <a href="adminhomepage.php"><button type="button">Back</a></button>
    </div>

</div>
</body>

</html>