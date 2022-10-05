<!DOCTYPE html >
<html>
		   <head>
		      <title>Search Results</title>
		   <style type = "text/css">
		         body  { font-family: arial, sans-serif;
		                 background-color: #F0E68C } 
		         table { background-color: #ADD8E6 }
		         td    { padding-top: 2px;
		                 padding-bottom: 2px;
		                 padding-left: 4px;
		                 padding-right: 4px;
		                 border-width: 1px;
		                 border-style: inset }
		      </style>
		   </head>
<body>

<?php

extract( $_POST );

$time = strtotime($date_input);
//add a course up to one week after the start
if ($time) {
  $new_date = date('Y-m-d', $time);
  echo $new_date;
} else {
   echo 'Invalid Date: ' . $_POST['dateFrom'];
  // fix it.
}
$query_insert = "INSERT INTO stu_courses SELECT student.stu_id, courses.course_code 
                  FROM student, courses WHERE `course_code` = '$course_id'  AND `stu_id` = '$stu_id' ";

//$query = "SELECT " . $property . " FROM courses"; 
include("database.php");


//if the connection is unsuccessful (mysqli_query() returns an object)
if ( !( $result_insert = mysqli_query( $database, $query_insert) ) ) 
{
   print( "Could not execute query! <br />" );
   die( mysqli_error() . "</body></html>" );
}else
{
print("Course was inserted into the Stu_courses correctly");
}
   mysqli_close( $database );

?><!-- end PHP script -->

<!-- <table>
<?php
//A student may register in up to 5 courses by course code
static $a = 5;



function registered_count()
{
   global $a;
    $a--;
    echo "You have added the course below to your schedule, you can choose $a more courses. <br>";
    if($a == 0) {
      echo "Finish adding <br>";
    }
}
 
   while($row = mysqli_fetch_row($result_select))
   {
      print( "<tr>" );
      foreach ( $row as $key => $value ) 
         print( "<td>$value</td>" );
      print( "</tr>" );
      registered_count();
      
   } 

   echo($a);
   ?>
</table> -->

      <form method = "post" action = "student_add_display.php">
			<div>
				<p>Click to check your current courses</p>
				<input type="submit" name="display_courses"
                	class="button" value="Display Courses" />
			</div>
			<br/>
		</form>

	  <h5> Thank you for using the application!</h5>

   </body>
</html>

<table>
