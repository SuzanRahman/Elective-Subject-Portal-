<style>
    body 
    {
	    background-image: url('bg.jpg'); /* Path to your background image */
			background-size: cover; /* Adjusts the image size to cover the entire screen */
			background-repeat: no-repeat; /* Prevents background image from repeating */
			background-attachment: fixed;
	    display: flex;
	    justify-content: center;
	    align-items: center;
      height: 100vh;
	    flex-direction: column;
    }
    h3 {
        color: white; 
        font-size: 25px; 
        font-weight: bold;
        text-align: center;
        text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.8); 
    }
    .submit-form #thirdsemester {
        background-color: black;
        color: #d7e4e4;
        padding: 8px 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452;
        border-radius: 7px;
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);
    }

    /* Hover effect for 3RD SEMESTER button */
    .submit-form #thirdsemester:hover {
        background-color: #565452;
        color: black;
    }

    /* Style for 4TH SEMESTER button */
    .submit-form #fourthsemester {
        background-color: black;
        color: #d7e4e4;
        padding: 8px 20px;
        font-size: 18px;
        font-weight: bold;
        border: 2px solid #565452;
        border-radius: 7px;
        cursor: pointer;
        text-shadow: 0px 0px 1px rgb(255, 255, 255);
        box-shadow: 4px 4px 10px rgba(255, 255, 255);
    }

    /* Hover effect for 4TH SEMESTER button */
    .submit-form #fourthsemester:hover {
        background-color: #565452;
        color: black;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<h3>YOU ARE A STUDENT OF  :  </h3>
<form action="thirdsemformindex.php" method="POST" id="thirdsemForm">
    <div class="submit-form">
        <input type="submit" name="3rdsemester" value="3RD SEMESTER" id="thirdsemester" form="thirdsemForm" />
    </div>
</form>

<form action="fourthsemformindex.php" method="POST" id="fourthsemForm">
    <div class="submit-form">
        <input type="submit" name="4thsemester" value="4TH SEMESTER" id="fourthsemester" form="fourthsemForm" />
    </div>
</form>
</html>     