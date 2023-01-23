<?php
session_start();
require_once __DIR__ . "/classes/db.php";

$sql = "SELECT information.id, information.coverUrl, information.mainTitle, information.subtitle, information.txt_area, information.phone, information.locations, servicesorproducts.service_or_products AS serviceProduct, information.productServiceImageUrl_1, information.txt_areaProductService_1, information.productServiceImageUrl_2, 	information.txt_areaProductService_2, information.productServiceImageUrl_3, information.txt_areaProductService_3, information.txt_areaCompany, information.facebook, information.linkedin, information.twitter, information.google
        FROM information
        LEFT JOIN servicesorproducts
        ON information.servicesorproducts_id = servicesorproducts.id
        WHERE information.id = {$_GET['id']}
        LIMIT 1";

$stmt = $pdo->prepare($sql);        
$stmt = $pdo->query($sql);

require_once __DIR__ . "/classes/header.php"
?>

<body>
    <?php
     require_once __DIR__ . "/classes/navbar.php";
    while($row = $stmt->fetch())
  {?>

    <div>
        <h1 class="title text-dark text-center text-capitalize font-weight-bolder"><?=$row['mainTitle']?></h1>
        <h2 class=" h3 subtitle txt text-dark text-center font-weight-bold"><?=$row['subtitle']?></h2>
        <img src="<?=$row['coverUrl']?>" class="backgorund1">
    </div>

    <div class="container bg-white">
        <div class="row my-md-3">
            <div class="col-6 offset-3 text-center ">
                <h3 class="font-weight-bold text-dark mt-2">About us</h3>
                <p class="font-weight-normal text-dark"><?=$row['txt_area']?></p>
                <hr>
                <p class="font-weight-normal text-dark"><?=$row['phone']?></p>
                <p class="font-weight-normal text-dark"><?=$row['locations']?></p>
            </div>
        </div>

        <h3 class="font-weight-bold text-dark text-md-left mb-2"><?=$row['serviceProduct']?></h3>
        <div class="row my-md-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?=$row['productServiceImageUrl_1']?>" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <p class="card-text text-white"><?=$row['txt_areaProductService_1']?></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?=$row['productServiceImageUrl_2']?>" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <p class="card-text text-white"><?=$row['txt_areaProductService_2']?></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?=$row['productServiceImageUrl_3']?>" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <p class="card-text text-white"><?=$row['txt_areaProductService_3']?></p>
                        <span class="text-white text-weight-light">Last update on: <?=date("Y-m-d H:i")?></span>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5">
        <div class="row">
            <div class="col-6">
                <h3 class="font-weight-bold text-dark mt-2">Contact</h3>
                <p class="font-weight-normal text-dark"><?=$row['txt_areaCompany']?></p>
            </div>

            <div class="col-6">
                <?php
                    // if(isset($_SESSION['success']))
                    // {
                    //     echo "<h4 class='text-success text-uppercase'>{$_SESSION['success']}</h4>";
                    //     unset($_SESSION['success']);
                    // }
                    // else if(isset($_SESSION['error']))
                    // {
                    //     echo "<h4 class='text-success text-uppercase'>{$_SESSION['error']}</h4>";
                    //     unset($_SESSION['error']);
                    //     die();
                    // }

                    // $sql = "SELECT information.id FROM information";
                    // $stmt = $pdo->query($sql);
                ?>
                <form method="POST" action="contact.php">
                    <div class="form-group">
                        <label for="name" class="text-dark mb-1 font-weight-normal text-capitalize">name</label>
                        <input type="text" class="form-control" id="name" placeholder="..." name="name">

                        <label for="mail" class="text-dark mb-1 font-weight-normal text-capitalize">email</label>
                        <input type="text" class="form-control" id="mail" placeholder="..." name="mail">

                        <label for="message" class="text-dark mb-1 font-weight-normal text-capitalize">message</label>
                        <textarea name="message" id="message" cols="20" rows="10" placeholder="..."
                            class="form-control"></textarea>
                            
                        <input type="hidden" name="id" value="<?php $_GET['id']?>">
                        <button type="submit" class="btn btn-dark mt-2 justify-content-center">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-dark w-100 text-center text-capitalize py-1">

            <a href="<?=$row['facebook']?>" target="_blank" class="mr-1">facebook</a>
            <a href="<?=$row['linkedin']?>" target="_blank" class="mr-1">linkedin</a>
            <a href="<?=$row['twitter']?>" target="_blank" class="mr-1">twitter</a>
            <a href="<?=$row['google']?>" target="_blank" class="mr-1">google+</a>
    </div>
  <?php
  } 
  require_once __DIR__ . "/classes/footer.php"
  ?>