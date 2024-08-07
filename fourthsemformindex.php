<!DOCTYPE html>
<html>
<form action="php1/logout.php" method="POST">
      <div class="logout">
        <input style="background-color:  black;
        color: #d7e4e4;
        padding: 8px 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452; /* Border */
        border-radius: 7px; /* Rounded corners */
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);"type="submit" value="Log Out" name="logout" />
      </div>
    </form>
    <style>
      .logout {
        position: right;
           right: 80px;
           padding-top: 20px;
           margin-left:1200px;
     }
     .logout:hover{
        opacity: .7;
    }
    </style>
  <head>
    <title>Choice Of Elective Subject Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,300,600);
*,
*:before,
*:after {
  box-sizing: border-box;
  font-family: "open sans", helvetica, arial, sans;
}
h4{
  text-decoration: underline;
  color: white;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
}
h5{
  text-align: center;
  color: white;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
}
body {
  background-image: url('bg.jpg'); /* Replace 'your-image.jpg' with the path to your background image */
  background-size: cover;
  background-attachment: fixed;
  background-color: grey; /* Fallback background color */
  color: black;
  padding: 10px 80px 10px 80px;
}
input {
  outline: none;
  border: none;
  padding: 5px;
  margin: 5px 0 5px 0;
  background-color: whitesmoke;
}

.student-details select,
.student-details select:focus {
  outline: none;
  border: none;
  padding: 5px 2px 5px 2px;
  margin: 5px 0 5px 0;
  background-color: whitesmoke;
}
label {
	color: white;
	font-size: 18px;
  font-weight: bold;
	padding: 10px;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8);
}
.student-details #subject {
  margin-left: 135px;
}
.student-feedback label {
  padding-right: 45px;
}
.student-feedback input[type="radio"] {
  margin: 0 2px 0 2px;
}
.student-feedback textarea {
  width: 500px;
  height: 100px;
  outline: none;
  border: none;
  padding: 8px;
  margin: 5px 0 5px 0;
  background-color: black;
}
.submit-form 
{
  margin-left: 635px;
  padding-top: 20px;  
}
.submit-form #submit 
{
  width: 100px;
  font-size: 18px;
  font-weight: bold;
}
.submit-form:hover{
  opacity: .7;
}

    </style>
    
  </head>
  

  <body>
    <div class="container">

      <form action="php1/feedback.php" method="post" class="student-form">
        <div class="student-details">
        <label for="name"><b>Name </b></label>
        <input type="text" id="name" name="Name" style="width:400px;margin-left: 15.9%;" required><br><br>
        <label for="roll"><b>Class Roll No </b></label>
        <input type="text" id="roll" name="Roll" style="width:400px;margin-left: 11.5%;"required><br><br>


          <label for="sem">Semester</label>
          <select name="Semester" id="sem" style="width:400px;margin-left: 13.5%;text-align: center;height: 30px;">
            <option value="3rd">Sem 3</option>
            <option value="4th">Sem 4</option>
          </select>
          <br />

        <div class="student-feedback">
          
          <h5>-------For 4TH Semester-------</h5>
          
          <h4>Elective 3</h4>
          <label>
          <input type="radio" name="Elective_3" value="Advanced DBMS">Advanced DBMS
          </label>
          <label>
          <input type="radio" name="Elective_3" value="Internet of Things">Internet of Things
          </label>
          <label>
          <input type="radio" name="Elective_3" value="Blockzchain Technology and Applications">Blockzchain Technology and Applications
          </label>
          <label>
          <input type="radio" name="Elective_3" value="Data Mining and knowledge Discovery">Data Mining and knowledge Discovery
          </label>
          <br /><br />
          
          <h4>Elective 4</h4>
          <label>
          <input type="radio" name="Elective_4" value="Image Processing">Image Processing
          </label>
          <label>
          <input type="radio" name="Elective_4" value="Data Science">Data Science
          </label>
          <label>
          <input type="radio" name="Elective_4" value="Computer Graphics and Multimedia">Computer Graphics and Multimedia
          </label>
          <label>
          <input type="radio" name="Elective_4" value="Software Project Management">Software Project Management
          </label>
          <br /><br />
          

        <div class="submit-form">
          <input style="background-color:  black;
        color: #d7e4e4;
        padding: 8px 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452; /* Border */
        border-radius: 7px; /* Rounded corners */
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);"
type="submit" name="submit" value="Submit" id="submit" />
</div>
      </form>
      <br />
    </div>
  </body>
</html>
