<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");

   echo template("templates/partials/header.php");


   if (isset($_SESSION['id'])) {

   

 }

 $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode)
 VALUES (21220000, '1984-05-06', 'dwayne', 'wilson', '42 desborough road', 'high wycombe', 'Buckingham', 'UK', 'HP11 2ET')";
 $result = mysqli_query($conn,$sql);
    
 $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode)
 VALUES (21234000, '1972-11-03', 'sam', 'smith', '123 reading road', 'reading', 'Berkshire', 'UK', 'RG1 1AA')";
 $result = mysqli_query($conn,$sql);

 $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode)
 VALUES (21234500, '1999-05-06', 'obito', 'uchiha', '727 konhoa street', 'leaf village', 'konohagakure', 'LU', 'LU7 4US')";
 $result = mysqli_query($conn,$sql);

 $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode)
 VALUES (21234560, '2001-08-02', 'Ichigo', 'Kurosaki', '144 Shinigami road ', ' Karakura Town', 'karakura', 'BL', 'BL15 1IB')";
 $result = mysqli_query($conn,$sql);

 $sql = "INSERT INTO student (studentid, dob, firstname, lastname, house, town, county, country, postcode)
 VALUES (21234567, '1995-12-01', 'Luffy', 'Zoro', '1 merry-go road', 'laugh tale', 'Grand Line', 'GL', 'RL1 8MG')";
 $result = mysqli_query($conn,$sql);

 
 

   
   
    //INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);

     

?>


