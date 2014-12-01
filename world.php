<?php
# connect to world database on local computer
$db = mysql_connect("0.0.0.0", "wushum");
mysql_select_db("world");

$LOOKUP = $_REQUEST['lookup'];
$QUERY = "SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';";
# execute a SQL query on the database
$results = mysql_query($QUERY);

while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?= $row["name"] ?>, ruled by <?= $row["head_of_state"] ?> </li>
  <?php
}
