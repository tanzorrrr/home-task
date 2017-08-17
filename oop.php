<?php

session_start();
 class Point 
 {
	 private $x;
	 private $y;
	 private $id;
	 public static $caunter =0;
	 
	
		
	 public function __construct($x,$y){
		 echo $this->x = $x;
		 echo $this->y= $y;
		 return self::$caunter++;
		
		
	 }
	
	 public function countervalue(){
		 return self::$caunter;
	 }
	 
	 function  setid($id){
		 $this->id=$id;
		 
	 }
	 
	 public function __toString(){
		return "Точка с координатами";
		return $this->x;
		return $this->y;
		 
	}
	
	
	
public function __clone(){
		$this->id =0;
}

	//public function __get($name){
		//echo "Класс Point работает только //в двумерном пространстве";
	//}
	
	//public function __set($name,$vlue){
	//	echo "Класс Point работает только в двумерном пространстве";
	//}
	
	public function call($methos,$argd){
		echo "You can use method".$method;
	}
}

 $p =new Point(3,5);
	echo $p;
		$p->z;
	
	if(isset($_POST['seve'])){
		$x= $_POST['x'];
		$y=$_POST['y'];
		if($x=""||$y=""){
			echo"gaps is ampty";
		}
		$point = new Point($x,$y);
		$serializepoint = serialize($point);
		
		$_SESSION['point']=$serializepoint;
	}
	if(!isset($_POST['seve'])){
		echo "Object no seved";
	}
	
	if(isset($_POST['upload'])){
		
		var_dump($point);
		var_dump($_POST);
	}
		
?>

<form action="#" method="post">
	<input type="text" name="y">
	<input type="text" name="x">
	<input type="submit" name="seve" value="seve">
	<input type="submit" name="upload" value="upload">
</form>