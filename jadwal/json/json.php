<?php
mysql_connect("localhost", "root", "");
mysql_select_db("harviacode");
$query = "SELECT * from jadwalku ";
$result = mysql_query($query) or die(mysql_error());

$arr = array();
while ($row = mysql_fetch_assoc($result)) {
    $temp = array(
        "date" => $row["date"],       
        "title" => $row["title"],
        "description" => $row["description"]);

    array_push($arr, $temp);}
$data = json_encode($arr);
echo $data
?>