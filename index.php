<?php
 require("dbConn.php");
 $trang =1;
 if (isset($_GET["trang"])) {
 	$trang = $_GET["trang"];
 }
 
 settype($trang, "int");
 $sotin1trang = 5;
 $from = ($trang -1) * $sotin1trang;

 $query = "select * from CaSi limit $from, $sotin1trang";
 $ds = mysqli_query($conn,$query);

 $mang =  array();
 while ($row =mysqli_fetch_array($ds)) {
 	# code...
 	array_push($mang, new Casi($row["id"],$row["Name"],$row["Hinh"],$row["MoTa"]));
 }

 echo json_encode( $mang );
?>