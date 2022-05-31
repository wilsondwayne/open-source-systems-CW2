<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // if the form has been submitted
   if (isset($_POST['submit'])) {

      // build an sql statment to update the student details
     // $sql = "update student set firstname ='" . $_POST['txtfirstname'] . "',";
    //  $sql .= "lastname ='" . $_POST['txtlastname']  . "',";
    //  $sql .= "house ='" . $_POST['txthouse']  . "',";
    //  $sql .= "town ='" . $_POST['txttown']  . "',";
    //  $sql .= "county ='" . $_POST['txtcounty']  . "',";
    ///  $sql .= "country ='" . $_POST['txtcountry']  . "',";
     // $sql .= "postcode ='" . $_POST['txtpostcode']  . "' ";
    //  $sql .= "where studentid = '" . $_SESSION['id'] . "';";

    $sql = "INSERT INTO student (studentid, dob, firstname, lastname) VALUES('')"
    
    
      $result = mysqli_query($conn,$sql);

      $data['content'] = "<p>student recored has been added</p>";

   }
   else {
      // Build a SQL statment to return the student record with the id that
      // matches that of the session variable.
      

      // using <<<EOD notation to allow building of a multi-line string
      // see http://stackoverflow.com/questions/6924193/what-is-the-use-of-eod-in-php for info
      // also http://stackoverflow.com/questions/8280360/formatting-an-array-value-inside-a-heredoc
      $data['content'] = <<<EOD

   <h2>add new student</h2>
   <form name="frmdetails" action="" method="post">
   First Name :
   Surname :
   <input name="lastname" type="text"  value="" /><br/>
   Number and Street :
   <input name="house" type="text"  value="" /><br/>
   Town :
   <input name="town" type="text"  value="" /><br/>
   County :
   <input name="county" type="text"  value="" /><br/>
   Country :
   <input name="country" type="text"  value="" /><br/>
   Postcode :
   <input name="postcode" type="text"  value="" /><br/>
   <input type="submit" value="Save" name="submit"/>
   </form>

EOD;

   }

   // render the template
   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

