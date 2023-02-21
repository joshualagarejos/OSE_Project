<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Homepage</title>
  </head>
  <body>
    <div class="homepage">
      <h1>Homepage</h1>
      <a href="enrollment-sis.php" class="link-cont"><span>Enrollment</span></a>
      <a href="schedule-viewing.php" class="link-cont"><span>Schedule</span></a>
      <a href="clearance-record.php" class="link-cont"
        ><span>Clearance</span></a
      >
      <a href="requirement-viewing.php" class="link-cont"
        ><span>View Requirements</span></a
      >
      <div class="logo">
        <a href="homepage.php"><img src="OSE logo.jpg" /></a>
      </div>
    </div>
    <div class="main">
      <div class="top">
        <div class="img-wrapper">
          <img class="unknown_user" src="unknown user.jpg" />
          <h1>Student ID</h1>
        </div>
        <div>
          <h2>Status:</h2>
          <h1>ENROLLED</h1>
        </div>
      </div>
      <div class="form-wrapper">
        <form action="">
          <div class="input-group">
            <label for="">Last Name</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">First Name</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">Birth Date</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">Address</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
          </div>
          <div class="input-group">
            <label for="">Contact Number</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">Email</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">Type of Scholarship</label>
            <input type="text" />
          </div>
          <div class="input-group">
            <label for="">Scholarship Percentage</label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
          </div>
        </form>
      </div>
      <div class="back-wrapper">
        <a href="">BACK</a>
      </div>
    </div>
  </body>
</html>
