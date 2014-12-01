<?php

# connect to world database on local computer

$db = mysql_connect("0.0.0.0", "wushum");

mysql_select_db("world");

$LOOKUP = $_REQUEST['lookup'];

# execute a SQL query on the database

$results = mysql_query("SELECT name FROM countries;");

# loop through each country

while ($row = mysql_fetch_array($results)) {
  
?>
  
<li> <?= $row["name"] ?></li>
  

<?php

}

?>