<?php
/*class product{
	public static int $counter = 0;
	public function __construct(){
		product::$counter += 1;
		echo "$this->$counter";
	}
}
$p1=new product();
$p2=new product();
$p3=new product();
$p4=new product();
$p5=new product();
$p6=new product();*/

//-------------------------------------------------------
//q2
/*class prodect{
	public $a;
	public $b;
 public function mod($a,$b){
  if (count_chars($a, 1)==count_chars($b, 1)) {
  	echo "yes";
  }else{
  	echo"no";
  }
 }	

}
$k1=new prodect();
$k1->mod("jll","jkl");*/
//-------------------------------------------
//q3
/*class prodect{
	public $MyString;
	public function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." is a Palindrome string";
  } else {
    echo $MyString." is not a Palindrome string";
  }
}
}
$k1 = new prodect();
$k1->Palindrome("modian");*/
//-------------------------------------------------
//q4
/* <?php
        $file = 'JSONdata.json';
        $json = file_get_contents($file,0,null,null);
        $obj = json_decode($json,true);
        $data = $obj->data->gps;

        include 'connection.php';

       function insert_data($connname, $conn)
       {
          foreach ($data as $post) {
             $stmt = oci_parse($conn, "insert into GPSLOGS
                   values('".$post->location."')");
            oci_execute($stmt, OCI_DEFAULT);
            echo "$connname inserted row without committing<br>\n";
            }
       }

        insert_data('c1', $conn);
   ?>*/
 //-------------------------------------------------------------
   //q5
   /*<?php


class mm {
public function sayhello() {
	echo "Hello";
}
}


trait forGeeks {
public function sayfor() {
	echo " mm";
}
}

class Sample extends mm {
use forGeeks;
public function kk() {
	echo "GeeksforGeeks";
}
}

$test = new Sample();
$test->sayhello();
$test->sayfor();
$test->kk();
?>kk
*/
   /*<?php

class A {
public function insideA() {
	echo "I am in class A";
	}
}

interface B {
public function insideB();
}

class Multiple extends A implements B {

	function insideB() {
		echo "I am in interface";
	}

	public function insidemultiple() {
	echo "I am in inherited class";
	}
}

$geeks = new multiple();
$geeks->insideA();
$geeks->insideB();
$geeks->insidemultiple();
?>
*/
//---------------------------------------------------