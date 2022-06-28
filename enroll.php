<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['enrollButton']))
{
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    
    $insertData = mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course) VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    if($insertData)
{
    echo "Data submitted successfully";
}
else{
    echo "Error occurred".mysqli-error($conn);
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalego Academy</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/fonts/fontawesome-webfont.svg">
</head>
<body>
    <nav  class="navbar navbar-expand-lg bg-light fixed-top ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                    <div class="navbar-nav ">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <button class="btn btn-primary">Register now</button>
                </div>
                </div>
        </div>
    </nav><br><br>
    <main class="p-5 bg-light grey text-black mb-4">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <img src="icons8-calendar-50.png" height='10px' width='10px'  alt="Calendar"> <h7>20th July</h7><br>
        <img src="icons8-location-24.png" alt="Location"> <h7>Zalego Academy,Devan Plaza</h7>
    </main>
    <div class="container">
        <div class="row">
            <p> Looking for a place to kickstart your career in Technology?<br>Whether you're a local,new in town or just cruising through we've got loads of great tips and events for you</p>
            <h2>Sign up today?</h2><br><br>
            <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="Full Name" class="form-label">Full Name:</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="col-lg-6">
                        <label for="Phone Number" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" name="phonenumber" placeholder="+2547....">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="Email address" class="form-label">Email Address:</label>
                        <input type="text" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    <div class="col-lg-6">
                        <label for="gender"  class="form-label">What's your gender?</label>
                        <select class="form-select" name="gender" aria-label="Defaul select example">
                            <option selected="--Select your gender--"></option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                </div>
                <p>In order to complete your registration to the bootcamp,you are required to select one course you will be undertaking.Please NOTE that this will be your learning track during the 2-weeks immersion</p><br>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="course"  class="form-label">What's your preferred course?</label>
                        <select class="form-select" aria-label="Defaul select example" name="course">
                            <option selected="--Select your course--"></option>
                            <option value="web design">Web design</option>
                            <option value="cybersecurity">Cybersecurity</option>
                            <option value="data science">Data science</option>
                            <option value="software development">Software development</option>
                        </select>
                    </div>
                </div>
                <br>
                <p>You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms& Conditions and the Privacy Policy statements</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Agree to our terms and conditions
                    </label>
                </div>
                <button class="btn btn-primary" name="submitButton">Submit application</button>
            </form>
            <hr>
        </div>
        <div class="row">
            <p>Subscribe to get information,latest news about Zalego Academy</p>
            <form action="enroll.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your email address">
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6">
                        <button class="btn btn-primary" name="enrollButton">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
<p style="font-size: 7px;">@ Company 2022</p>



   













    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/fonts/FontAwesome.otf">
</body>
</html>