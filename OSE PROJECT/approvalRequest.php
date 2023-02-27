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
    margin-bottom: 30px;
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
    height: 460px;
    border-radius: 50px;
    width: 1000px;
    margin-left: 100px;
    padding-top: 20px;
}
button{
    background-color: #64483A;
    width: 120px;
    height: 60px;
    border-radius: 10px;
    border-width: 0px;
    font-size: 40px;
    color: white;
    margin-top: 200px;
    margin-left: 800px;
}
form{
    text-align: center;
    font-size: large;
    font-family: arial;
    font-weight: bold;
    margin-left: 10px;
}
th, td{
    padding: 15px;
}
.submitfiles{
    font-weight: lighter;
    font-size: 15px;
    color: #A4723A;
}
.submitfilehref{
    color: #64483A;
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
    <title>Approval Request</title>
</head>

<body>
    <div class="homepage">
    <h1>Approval Request
        <div class="OSE_Logo">
        <a href="homepage.php"><img src="OSE logo.jpg"></a>
        </div>
    </h1>
    </div>

    <div class="main">
    <form action="requirement-viewing.php" method="post">
    <table>
        <tbody>
        <tr>
            <th>Academic Year</th>
            <th>Term</th>
            <th>Document Type</th>
            <th>File Submission</th>
            <th>Date Added</th>
            <th>Status</th>
            <th>Date Verified</th>
            <th>Remarks</th>
        </tr>
        <tr class="submitfiles">
            <td>2022-2023</td>
            <td>2nd</td>
            <td>Official Receipt</td>
            <td><a href="requirement-submission.php" class="submitfilehref">Submit File Here</a></td>
            <td>01-30-2023</td>
            <td>Pending</td>
            <td>02-02-2023</td>
            <td></td>
        </tr>
        </tbody>
        <tr class="submitfiles">
            <td>2022-2023</td>
            <td>2nd</td>
            <td>Athlete's Contract</td>
            <td><a href="requirement-submission.php" class="submitfilehref">Edit</a></td>
            <td>12-15-2023</td>
            <td>Approved</td>
            <td>01-13-2023</td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <div class="back_button">
    <a href="homepage.php"><button type="button">Back</a></button>
    </div>
    </div>
</body>

</html>