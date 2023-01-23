<?php

require_once __DIR__ . "/classes/db.php";
require_once __DIR__ . "/classes/header.php";
require_once __DIR__ . "/classes/navbar.php";

$sql = "SELECT information.id, information.mainTitle FROM information";
$stmt = $pdo->query($sql);

echo "
<div class='container-fluid backgorund img-3 vh-100'>
<h2 class='text-white text-capitalize text-center mb-2 pt-lg-2'>galery of our clients</h2>
    <div class='row'>
        <div class='col-6 offset-3'>
            <table class='table text-white'>
                <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Company name</th>
                    <th scope='col'>Webpage</th>
                </tr>
                </thead>";
                $i=1;
                while ($row = $stmt->fetch())
                {
                    echo "
                    <tbody>
                        <tr>
                            <th scope='row'>{$i}</th>
                            <td class='text-capitalize text-white'>{$row['mainTitle']}</td>
                            <td>
                                <a href='layout.php?id={$row['id']}' class='text-capitalize text-white'>view</a>
                            </td>
                        </tr>
                    </tbody>";
                    $i++;
                }
            echo "    
            </table>
        </div>
    </div>
</div> ";









require_once __DIR__ . "/classes/footer.php";

