<?php
include "src/get.php";
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $province=$_POST['province'];
    $email=$_POST['email'];

	
?>
<?php include_once("header.php");?>
    $getResult = new getInformation($name,$gender,$province,$email){

        echo "name:".$getResult->getName()."</br>";
        echo "gender:".$getResult->getGender()."</br>";
        echo "province:".$getResult->getProvince()."</br>";
        echo "email:".$getResult->getEmail()."</br>";
    });

<?php include_once("footer.php");?>