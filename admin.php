<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
  </head>
  <style>
    body 
    {
	    background-image: url('bg7.jpg'); /* Path to your background image */
			background-size: cover; /* Adjusts the image size to cover the entire screen */
			background-repeat: no-repeat; /* Prevents background image from repeating */
			background-attachment: fixed;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    height: 100vh;
	    flex-direction: column;
    }

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 13px;
	background: transparent;
	border-radius: 15px;
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


#login {
  background-color:  #565452;
  padding: 8px 20px; /* Adjust the padding for width and height */
  border-radius: 7px;
  width: 100px; /* Adjust the width as needed */
  font-weight: bold;
  color: #d7e4e4;
  padding: 8px 20px;
  font-size: 18px;
  border: 2px solid #565452; /* Border */
  border-radius: 7px; /* Rounded corners */
  cursor: pointer;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
  box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.8);
}

#login:hover {
  background-color: grey; /* Change the background color on hover to your desired color */
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

  </style>
  <body>
    <div class="login-form">
      <form action="php/checklogin.php" method="POST">
      <h2>ADMIN LOGIN</h2>
        <label>
          Email
          <input type="email" id="email" placeholder="Email" name="email" />
        </label>
        <br>
        <label>
          Password
          <input
            type="password"
            id="password"
            placeholder="Password"
            name="password"
          />
        </label>
        <br /><br />
        <div class="submit-form">
          <input type="submit" id="login" name="login" value="Login" />
        </div>
      </form>
      </div>
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
        box-shadow: 4px 4px 10px rgba(255, 255, 255);"" id="backToHome">Back to Home</button>

    <script>
      document.getElementById("backToHome").addEventListener("click", function() {
        window.location.href = "index.php"; // Replace with your homepage URL.
      });
    </script>
  </body>
</html>
