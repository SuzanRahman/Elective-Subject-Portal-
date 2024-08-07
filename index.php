<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  h1 {
  color: white; 
  font-size: 40px; 
  font-weight: bold;
  text-align: center;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); 
  }
  h3 {
  color: white; 
  font-size: 25px; 
  font-weight: bold;
  text-align: center;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); 
  }
  h4 {
  color: white; 
  font-size: 40px; 
  font-weight: bold;
  text-align: center;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); 
  }
  h2 {
  color: white; 
  font-size: 25px; 
  font-weight: bold; 
  text-decoration: underline;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
  }
  h5 {
 margin-top: 70px;
  color: white; 
  font-size: 22px; 
  text-align: center; 
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
  }
  
  p {
  color: white; 
  font-size: 18px; 
  font-weight: normal;
  text-align: justify; 
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
  }
  
    body {
    background-image: url('bg4.webp');
    background-size: cover; 
    background-repeat: no-repeat;
    background-attachment: fixed; 
   }

    .navbar {
      background-color: whitesmoke; 
    }

    
    .navbar a {
      font-weight: bold;
      font-size: 20px;
      font-family: sans-serif; 
    }
  
    .container {
      align-content: center;
      margin-top: 20px; 
    }
    /* Center the form within the container */
form {
  text-align: center;
  margin: 0 auto;
  max-width: 500px; /* You can adjust the maximum width as needed */
}
.center {
      text-align: center; /* Center-align the content */
      margin-top: 10px;
    }
    ul li {
    color: white; /* Change 'blue' to your desired text color */
  }
  a{
    color:red;
    font-weight: bold;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="studentindex.php">Student Login</a></li>
      <li><a href="admin.php">Admin Login</a></li>
    </ul>
  </div>
</nav>
<section id="about-us">
    <div class="container">
      <h1>WELCOME TO</h1> 
      <h4>ELECTIVE SUBJECT CHOICE PORTAL</h4>
      <h3>DEPARTMENT OF COMPUTER APPLICATIONS</h3>
      <h2>About Us</h2>
      <p>
        We are dedicated to helping students make informed choices
        when selecting elective subjects for their academic journey. Our team is passionate about education and believes
        in providing students with the resources and information they need to excel.
      </p>
      <p>
        We're here to guide you. Our goal is to make the elective subject selection process as smooth as possible.
      </p>

  
        <h5>Contact Us : </h5>
        <p>
            If you have any questions, concerns, or suggestions regarding the Elective Subject Choice Portal, please don't hesitate to contact us.
        </p>
        <p>
            You can reach us using the following contact information:
        </p>
        <ul>
            <li>Email: <a href="mailto:admin@gmail.com">admin@gmail.com</a></li>
            <li>Phone: +91 9876543210</li>
            <li>Browse Institute Site: <a href="https://www.heritageit.edu/">https://www.heritageit.edu/</a></li>
        </ul>
        <p>
            Our support team is available to assist you during business hours and will respond to your inquiries as soon as possible.
        </p>
    </div>

      <!-- Display the visitor count using PHP -->
      <div class="center">
      <?php include('visitor_count.php'); ?>
      </div>
    </div>
</section>
  
</body>
</html>
