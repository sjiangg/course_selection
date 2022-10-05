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

echo($course_id_drop);
$query_delete = "DELETE FROM stu_courses WHERE `course_code` = '${course_id_drop}' AND `stu_id` = '${stu_id_drop}' ";

//$query = "SELECT " . $property . " FROM courses"; 
include("database.php");


if ( !( $result_delete = mysqli_query( $database, $query_delete) ) ) 
{
   print( "Could not execute query! <br />" );
   die( mysqli_error() . "</body></html>" );
}else
{
print("Course deleted");
}
   mysqli_close( $database );

?>

</body>
</html>

<table>
