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

//$query = "SELECT " . $property . " FROM courses"; 
include("database.php");

$query_select = "SELECT * FROM stu_courses";
//connection to display
if ( !( $result_select = mysqli_query( $database, $query_select) ) ) 
{
   print( "Could not execute query! <br />" );
   die( mysqli_error() . "</body></html>" );
} // end if

   mysqli_close( $database );



?><!-- end PHP script -->
<table>
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
   ?>
</table>



	  <h5> Thank you for using the application!</h5>

   </body>
</html>

<table>
