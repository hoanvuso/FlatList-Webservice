<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn, "reactnative");
mysqli_query($conn, "SET NAMES 'utf8'");

 class Casi{

  public $key;
  public $name;
  public $image;
  public $description;

  function Casi($id, $hoten, $hinh, $mota){
  		$this->key = $id;
  		$this->name =$hoten;
  		$this->image =$hinh;
  		$this->description = $mota;

  }
}

?>