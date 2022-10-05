<?php

if ( !( $database = mysqli_connect( "localhost",
   "root", "" ) ) )                      
   die( "Could not connect to database </body></html>" );

// open  database
if ( !mysqli_select_db( $database, "school") )
   die( "Could not open database </body></html>" );

?>