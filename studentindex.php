<!DOCTYPE html>
<html>
<head>
	<title>STUDENT LOGIN</title>
  <style>
		body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
			background-image: url('bg7.jpg'); /* Path to your background image */
			background-size: cover; /* Adjusts the image size to cover the entire screen */
			background-repeat: no-repeat; /* Prevents background image from repeating */
			background-attachment: fixed; /* Fixed background so it doesn't scroll with the page */
		}
    form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: transparent;
	border-radius: 15px;
}
*{
	font-family: sans-serif;
	box-sizing: border-box;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
  text-align: center;
	color: white;
  font-size: 30px;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: white;
	font-size: 18px;
  font-weight: bold;
	padding: 10px;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
}

button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7;
}
	</style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>STUDENT LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email ID</label>
     	<input type="text" name="uname" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<button style="background-color:  #565452;
        color: #d7e4e4;
        padding: 8px 20px;
		    margin-left: 180px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452; /* Border */
        border-radius: 7px; /* Rounded corners */
        cursor: pointer;
        text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
        box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.8);"type="submit">Login</button>
     </form>
	 <button style="background-color:  black;
        color: #d7e4e4;
        padding: 8px 20px;
	    margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452; /* Border */
        border-radius: 7px; /* Rounded corners */
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);" id="backToHome">Back to Home</button>

    <script>
      document.getElementById("backToHome").addEventListener("click", function() {
        window.location.href = "index.php"; // Replace with your homepage URL.
      });
    </script>
</body>
</html>