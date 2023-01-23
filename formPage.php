<?php
session_start();
require_once __DIR__ . "/classes/db.php";
require_once __DIR__ . "/classes/header.php";
require_once __DIR__ . "/classes/navbar.php";
require_once __DIR__ . "/classes/functions.php";
?>

<body class="backgorund img-2">
    <div class="container">
        <h2 class="col-12 c-white text-center my-lg-4">You are one step away from your webpage.</h2>
          <?php
            if(isset($_SESSION['error']))
            {?>
              <h4 class="text-danger font-weight-bold text-uppercase text-center"><?=$_SESSION['error']?></h4>
            <?php 
              unset($_SESSION['error']);
            }
          ?>
    
        <form method = "POST" action="formAuth.php">
            <div class="row">
                <div class="col-lg-4">
                    <div class="backgorund-form p-2 rounded">
                        <div class="form-group">
                            <label for="coverImage" class="c-white my-2 font-weight-normal text-capitalize">cover image URL</label>
                            <input type="url" class="form-control" id="coverImage" placeholder="https://..." name="coverUrl" value="<?= old('coverUrl') ?>">
    
                            <label for="mainTitle" class="c-white my-2 font-weight-normal text-capitalize">main title of page</label>
                            <input type="text" class="form-control" id="mainTitle" placeholder="..." name="mainTitle" value="<?= old('mainTitle') ?>">
    
                            <label for="subtitle" class="c-white my-2 font-weight-normal text-capitalize">subtitle of page</label>
                            <input type="text" class="form-control" id="mainTitle" placeholder="..." name="subtitle" value="<?= old('subtitle') ?>">
    
                            <label for="text-area" class="c-white my-2 font-weight-normal">Something about you</label>
                            <textarea name="txt_area" id="text-area" cols="44" rows="4" placeholder="..." class="form-control"></textarea>
                            
                            <label for="phone" class="c-white my-2 font-weight-normal text-capitalize">Your telephone number</label><br>
                            <input type="tel" id="phone" name="phone" placeholder="123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" class=" form-control" value="<?= old('phone') ?>">
                            
                            <label for="locations" class="c-white my-2 font-weight-normal text-capitalize">location</label>
                            <input type="text" class="form-control" id="location" placeholder="..." name="locations" value="<?= old('locations') ?>">
                            
                            <label for="serviceOrProducts" class="c-white my-2 font-weight-normal text-capitalize">Do you provide services or products?</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="serviceOrProducts" name="servicesorproducts_id" value="<?= old('servicesorproducts_id') ?>">
                                  <?php
                                    $stmt = $pdo->query("SELECT * FROM servicesorproducts WHERE 1");
                                    while($row =$stmt->fetch())
                                    {
                                      echo "<option value = '{$row['id']}'>{$row['service_or_products']}</option>";
                                    }
                                  ?>
                                </select>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="backgorund-form p-2 rounded">
                        <p class="c-white mb-3 font-weight-bold">Provide url for an image and description for your service/products.</p>
                        <div class="form-group">
                            <label for="productServiceImage" class="c-white mb-1 font-weight-normal text-capitalize">image URL</label>
                            <input type="text" class="form-control" id="productServiceImage" placeholder="https://..." name="productServiceImageUrl_1" value="<?= old('productServiceImageUrl_1') ?>">

                            <label for="text-area" class="c-white my-1 font-weight-normal">Description of product/service</label>
                            <textarea name="txt_areaProductService_1" id="text-area" cols="44" rows="2" placeholder="..." class="form-control"></textarea>

                            <label for="productServiceImage" class="c-white mb-1 font-weight-normal text-capitalize">image URL</label>
                            <input type="text" class="form-control" id="productServiceImage" placeholder="https://..." name="productServiceImageUrl_2" value="<?= old('productServiceImageUrl_2') ?>">

                            <label for="text-area" class="c-white my-1 font-weight-normal">Description of product/service</label>
                            <textarea name="txt_areaProductService_2" id="text-area" cols="44" rows="2" placeholder="..." class="form-control"></textarea>

                            <label for="productServiceImage" class="c-white mb-1 font-weight-normal text-capitalize">image URL</label>
                            <input type="text" class="form-control" id="productServiceImage" placeholder="https://..." name="productServiceImageUrl_3" value="<?= old('productServiceImageUrl_3') ?>">

                            <label for="text-area" class="c-white my-1 font-weight-normal">Description of product/service</label>
                            <textarea name="txt_areaProductService_3" id="text-area" cols="44" rows="2" placeholder="..." class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="backgorund-form p-2 rounded">

                        <p class="c-white mb-3 font-weight-bold">Provide a description of your company, something that people can relate to, before they contact you:</p>
                        <div class="form-group">
                            <textarea name="txt_areaCompany" cols="44" rows="2" placeholder="..." class="form-control" value="<?= old('txt_areaCompany') ?>"></textarea>

                            <hr class="hr-color my-3">

                            <label for="facebook1" class="c-white my-2 font-weight-normal text-capitalize">facebook</label><span class="error">
                            <input type="text" class="form-control" id="facebook1" placeholder="https://..." name="facebook" value="<?= old('facebook') ?>">

                            <label for="linkedin1" class="c-white my-2 font-weight-normal text-capitalize">linkedIn</label>
                            <input type="text" class="form-control" id="linkedin1" placeholder="https://..." name="linkedin" value="<?= old('linkedin') ?>">

                            <label for="twitter1" class="c-white my-2 font-weight-normal text-capitalize">twitter</label>
                            <input type="text" class="form-control" id="twitter1" placeholder="https://..." name="twitter" value="<?= old('twitter') ?>">

                            <label for="google+" class="c-white my-2 font-weight-normal text-capitalize">google+</label>
                            <input type="text" class="form-control" id="google+" placeholder="https://..." name="google" value="<?= old('google') ?>">
                        </div>
                    </div>
                </div>
                <div class="col-4 offset-4 justify-content-center">
                    <button class="btn btn-outline-light btn-block text-capitalize text-center my-3" type="submit" value="Submit">submit</button>
                </div>
            </div>
        </form>
    </div>

<?php
require_once __DIR__ . "/classes/footer.php"
?>