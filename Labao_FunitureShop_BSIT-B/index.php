<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>

<nav>
    <a href="Container.php" class="btn btn-outline-success">HOME</a>
    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/sofa1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sofa aesthetic</h5>
                        <p class="card-text">Price 1,500 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Sofa1">
                        <input type="hidden" name="Price" value="1500">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/sofa2.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sofa classic</h5>
                        <p class="card-text">Price 2,500 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Sofa2">
                        <input type="hidden" name="Price" value="2500">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/sofa3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sofa softy</h5>
                        <p class="card-text">Price 3,500 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Sofa3">
                        <input type="hidden" name="Price" value="3500">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/bed1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bed skinny</h5>
                        <p class="card-text">Price 5,000 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Bed1">
                        <input type="hidden" name="Price" value="5000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/bed2.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bed sand</h5>
                        <p class="card-text">Price 3,400 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Bed2">
                        <input type="hidden" name="Price" value="3400">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/bed3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bed minimalist</h5>
                        <p class="card-text">Price 4,100 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Bed3">
                        <input type="hidden" name="Price" value="4100">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/armchair1.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Armchair armygreen</h5>
                        <p class="card-text">Price 2,100 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Armchair1">
                        <input type="hidden" name="Price" value="2100">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/table2.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Table brownies</h5>
                        <p class="card-text">Price 3,500 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dining table1">
                        <input type="hidden" name="Price" value="3500">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/table1.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Table aesthetic</h5>
                        <p class="card-text">Price 7,000 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dining table2">
                        <input type="hidden" name="Price" value="7000">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4">
            <form action="manage_cart.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="picture/table3.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Table minimalist</h5>
                        <p class="card-text">Price 6,000 php</p>
                        <button type="submit" name="add_to_cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_name" value="Dining table3">
                        <input type="hidden" name="Price" value="6000">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
