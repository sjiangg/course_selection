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



$query = "SELECT * FROM courses ";
include("database.php");


if ( !( $result = mysqli_query( $database, $query) ) ) 
{
   print( "Could not execute query! <br />" );
   die( mysqli_error() . "</body></html>" );
}
?>

<h3>Displaying all courses</h3>

<!-- <table>
<?php

   //show all courses 
   while($row = mysqli_fetch_row($result))
   {
      print( "<tr>" );
      foreach ( $row as $key => $value ) 
         print( "<td>$value</td>" );
      print( "</tr>" );
   } 
   ?>
      
</table> -->

<?php

echo "<table border='1'>
<tr>
<th>id</th>
<th>first</th>
<th>id</th>
<th>first</th>
<th>id</th>
<th>first</th>
<th>id</th>
<th>first</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['course_code'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['semester'] . "</td>";
echo "<td>" . $row['days'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['instructor'] . "</td>";
echo "<td>" . $row['room'] . "</td>";
echo "<td>" . $row['start date'] . "</td>";
echo "<td>" . $row['end date'] . "</td>";
echo "</tr>";
}
echo "</table>";

?>


	  
	  <h5> Thank you for using the application!</h5>

</body>
</html>

<table>
