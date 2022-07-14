<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Botong's Website</title>

     <?php
        include "parts/meta.php"
    ?>
</head>

    <?php
        include "parts/navbar.php"
    ?>
    <div class="title">
        <h1>Please Add to Your Cart</h1>
    </div>

     <div class="container">
            <div class="grid gap">
                <div class="col-xs-12 col-md-6 card soft">
                    <div class="figure product">
                        <img src="https://via.placeholder.com/400x400?text=product" alt="">
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 card soft">
                    <div class="btn1">
                        <a href="product_list.php">
                            <button class="back-btn">Back</button>
                        </a>
                    </div>
                    <div class="btn2">
                        <a href="jump_page.php">
                            <button class="cart-btn">Add</button>
                        </a>
                    </div>

                    <!-- select -->
                    <div class="form-select">
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
            </div>

            
    </div>


    <div class="container">
        <footer class="flex-stretch card soft">
            @Botong
    </footer>
    </div>
</body>
</html>