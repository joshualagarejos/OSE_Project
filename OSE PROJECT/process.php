<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('config.php');
require_once('PHPMailer-6.7.1/src/Exception.php');
require_once('PHPMailer-6.7.1/src/PHPMailer.php');
require_once('PHPMailer-6.7.1/src/SMTP.php');

if(isset($_POST['sub'])){
    //registration
    if($_POST['sub'] == 'submit'){
        $lName = $_POST['lastname'];
        $fName = $_POST['firstname'];
        $no = $_POST['no'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usertable WHERE user_email = '".$email."'";
        $result = $con->query($sql);

        if ($result->num_rows>0) {
            header("Location: http://localhost/portal/registration.php?event=1");
            die();
        }else{
            $sql = "INSERT INTO usertable VALUES (NULL, '".$email."', '".MD5($password)."', '".$fName."', '".$lName."', '".$dob."', '".$no."', NOW())";

            if ($con->query($sql) === TRUE) {	  
                //PHPMailer
                $mail = new PHPMailer;

                $mail->isSMTP(); 
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'OSE.landing@gmail.com';
                $mail->Password = 'hwzpgfjopesgkoqa';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
    
                $mail->setFrom('OSE.landing@gmail.com', 'OSE Email Support');
                $mail->addAddress($email, $fName.$lName);
                $mail->Subject = 'Portal Registration';
                $mail->Body = 'You are successfully registered to the portal.';
    
                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }
                header("Location: http://localhost/portal/login.php");
                die();
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }
        }

    //login
    }else if($_POST['sub'] == 'login'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usertable where user_email='".$email."' AND user_password='".MD5($password)."'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            session_start();
            while($fetch = $result->fetch_assoc()){
                $user_id = $fetch['user_id'];
            }
            $_SESSION['user_id'] = $user_id;
            
            header("Location: http://localhost/portal/homepage.php");
        }else{
            header("Location: http://localhost/portal/login.php?event=1");
            die();
        }
    }
}
?>
