<?php
// session_start();
// require_once __DIR__ . "/classes/db.php";

// if ($_SERVER['REQUEST_METHOD'] != "POST") 
// {
//     $_SESSION['error'] = "Only POST requests allowed!";
//     header("Location:layout.php");
//     die();
// }
// $company_id = $_POST['id'];
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $message = $_POST['message'];

// $fileds = ['name', 'mail', 'message'];

// foreach($fileds as $key=>$value)
// {
//     if(empty($_POST[$value]))
//     {
//         $_SESSION['error'] = "Please fill all the fileds before submiting";
//         header("Location:layout.php");
//         die();
//     }
// }

// $sql = "INSERT INTO contact(company_id, name, mail, message) 
//         VALUES(:company_id, :name, :mail, :message)
//         WHERE :company_id = {$_GET['id']}";
// $stmt = $pdo->prepare($sql);

// if($stmt->execute([
//     'company_id' => $_GET['id'],
//     'name' => $_POST['name'],
//     'mail' => $_POST['mail'],
//     'message' => $_POST['message']
// ]))
// {
// $_SESSION['success'] = 'Thank you for your bussniess.';
// }
// else
// {
//     $_SESSION['error'] = "An error ocured, please try again";
//     header("Location:layout.php");
//     die();
// }