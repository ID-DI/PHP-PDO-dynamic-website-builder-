<?php
session_start();

require_once __DIR__ . "/classes/db.php";
require_once __DIR__ . "/classes/functions.php";

if ($_SERVER['REQUEST_METHOD'] != "POST") 
{
    $_SESSION['error'] = "Only POST requests allowed!";
    header("Location:index.php");
    die();
}
$fileds = ['coverUrl', 'mainTitle', 'subtitle', 'txt_area', 'phone', 'locations', 'servicesorproducts_id', 'productServiceImageUrl_1', 'txt_areaProductService_1', 'productServiceImageUrl_2', 	'txt_areaProductService_2', 'productServiceImageUrl_3', 'txt_areaProductService_3', 'txt_areaCompany', 'facebook', 'linkedin', 'twitter', 'google'];

$coverUrl=$_POST['coverUrl'];                                   setOldValue('coverUrl', $coverUrl);
$mainTitle=$_POST['mainTitle'];                                 setOldValue('mainTitle', $mainTitle);
$subtitle=$_POST['subtitle'];                                   setOldValue('subtitle', $subtitle);
$txt_area=$_POST['txt_area'];                                   setOldValue('txt_area', $txt_area);
$phone=$_POST['phone'];                                         setOldValue('phone', $phone);
$locations=$_POST['locations'];                                 setOldValue('locations', $locations);
$servicesorproducts_id=$_POST['servicesorproducts_id'];         setOldValue('servicesorproducts_id',$servicesorproducts_id);
$productServiceImageUrl_1=$_POST['productServiceImageUrl_1'];   setOldValue('productServiceImageUrl_1',$productServiceImageUrl_1);
$txt_areaProductService_1=$_POST['txt_areaProductService_1'];   setOldValue('txt_areaProductService_1',$txt_areaProductService_1);
$productServiceImageUrl_2=$_POST['productServiceImageUrl_2'];   setOldValue('productServiceImageUrl_2',$productServiceImageUrl_2);
$txt_areaProductService_2=$_POST['txt_areaProductService_2'];   setOldValue('txt_areaProductService_2',$txt_areaProductService_2);
$productServiceImageUrl_3=$_POST['productServiceImageUrl_3'];   setOldValue('productServiceImageUrl_3',$productServiceImageUrl_3);
$txt_areaProductService_3=$_POST['txt_areaProductService_3'];   setOldValue('txt_areaProductService_3',$txt_areaProductService_3);
$txt_areaCompany=$_POST['txt_areaCompany'];                     setOldValue('txt_areaCompany', $txt_areaCompany);
$facebook=$_POST['facebook'];                                   setOldValue('facebook', $facebook);
$linkedin=$_POST['linkedin'];                                   setOldValue('linkedin', $linkedin);
$twitter=$_POST['twitter'];                                     setOldValue('twitter', $twitter); 
$google=$_POST['google'];                                       setOldValue('google', $google); 

$filedsURL = ['productServiceImageUrl_1', 'productServiceImageUrl_2', 'productServiceImageUrl_3', 'facebook', 'linkedin', 'twitter', 'google'];

foreach($fileds as $key=>$value)
{
    if(empty($_POST[$value]))
    {
        $_SESSION['error'] = "Please fill all the fileds before submiting";
        header("Location:formPage.php");
        die();
    }
}

foreach($filedsURL as $key=>$value)
{
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST[$value])) 
    {
       $_SESSION['error'] = "Invalid URL";
    }
    unset($urlErr);
}


$sql = "INSERT INTO information(coverUrl, mainTitle, subtitle, txt_area, phone, locations, servicesorproducts_id, productServiceImageUrl_1, txt_areaProductService_1, productServiceImageUrl_2, 	txt_areaProductService_2, productServiceImageUrl_3, txt_areaProductService_3, txt_areaCompany, facebook, linkedin, twitter, google)
        VALUES(:coverUrl, :mainTitle, :subtitle, :txt_area, :phone, :locations, :servicesorproducts_id, :productServiceImageUrl_1, :txt_areaProductService_1, :productServiceImageUrl_2, :txt_areaProductService_2, :productServiceImageUrl_3, :txt_areaProductService_3, :txt_areaCompany, :facebook, :linkedin, :twitter, :google)";

$stmt = $pdo->prepare($sql);
if($stmt->execute([
    'coverUrl'=>$_POST['coverUrl'],
    'mainTitle'=>$_POST['mainTitle'],
    'subtitle'=>$_POST['subtitle'],
    'txt_area'=>$_POST['txt_area'],
    'phone'=>$_POST['phone'],
    'locations'=>$_POST['locations'],
    'servicesorproducts_id'=>$_POST['servicesorproducts_id'],
    'productServiceImageUrl_1'=>$_POST['productServiceImageUrl_1'],
    'txt_areaProductService_1'=>$_POST['txt_areaProductService_1'],
    'productServiceImageUrl_2'=>$_POST['productServiceImageUrl_2'],
    'txt_areaProductService_2'=>$_POST['txt_areaProductService_2'],
    'productServiceImageUrl_3'=>$_POST['productServiceImageUrl_3'],
    'txt_areaProductService_3'=>$_POST['txt_areaProductService_3'],
    'txt_areaCompany'=>$_POST['txt_areaCompany'],
    'facebook'=>$_POST['facebook'],
    'linkedin'=>$_POST['linkedin'], 
    'twitter'=>$_POST['twitter'], 
    'google'=>$_POST['google']    
]))
{
    header("Location:galery.php");
}
else
{
    $_SESSION['error'] = "An error ocured, please try again";
    header("Location:formAuth.php");
    die();
}
