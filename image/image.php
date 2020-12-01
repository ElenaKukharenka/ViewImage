<?php
$mysqli = new mysqli("localhost", "root", "", "img");

$query = "SELECT * FROM imgs";
$query_res = mysqli_query($mysqli, $query);

if($query_res) {
while($row = mysqli_fetch_assoc($query_res)){
      
		echo "<img src='" . $row['img'] . "' alt='' />";
		echo "Views: ".$row['views'];
		}
}
//УВЕЛИЧИВАЕМ СЧЕТЧИК НА 1
$query2 = "UPDATE imgs SET views=views+1 WHERE ID=1";
$query_res2 = mysqli_query($mysqli, $query2);

$mysqli->close();
?>




