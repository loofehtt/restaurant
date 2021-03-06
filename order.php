<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">

    <title>Document</title>
</head>

<body>
    <div id="main">
        <div id="header">
            <div class="nav">
                <a href="index.php" class="nav--list">
                    <img class="nav--logo" src="./asset/img/logo.png" alt="">
                </a>

                <ul class="nav--list">
                    <li class="nav--items"><a href="index.php"> Home </a></li>
                    <li class="nav--items"><a href="categories.php"> Categories </a></li>
                    <li class="nav--items"><a href="foods.php"> Food </a></li>
                    <li class="nav--items"><a href="order.php"> Contacts </a></li>
                </ul>
            </div>
        </div>

        <div id="content--body">
            <div class="content--body--list">
                <h2 class="list--items">Fill this form to comfirm your order.</h2>
                <form action="#" class="list--items">
                    <fieldset>
                        <legend>Selected Foods</legend>
                        <div class="items--img">
                            <img src="./asset/img/menu-pizza.jpg" alt="">
                        </div>
                        <class class="items--dsc">
                            <h2>Food Title</h2>
                            <h3>$2.3</h3>
                            <div class="order--label">Quantity</div>
                            <input class="item--number" type="number">
                        </class>
                    </fieldset>

                    <fieldset>
                        <legend>Delivery Details</legend>
                        <div class="order--label">Full Name</div>
                        <input type="text" class="order--input" placeholder="E.g. loofeht">
                        <div class="order--label">Phone Number</div>
                        <input type="tel" class="order--input" placeholder="E.g. 034229xxxx">
                        <div class="order--label">Email</div>
                        <input type="email" class="order--input" placeholder="E.g. phu832001@xxx.com">
                        <div class="order--label">Address</div>
                        <textarea name="address" class="text--address" rows="10" placeholder="E.g. Street, City, Country"></textarea>
                        <input type="submit" class="confirm--btn" value="Comfirm Order">
                    </fieldset>
                </form>
            </div>
        </div>

        <div id="footer">
            <div class="footer--social">
                <a class="ti-facebook"></a>
                <a class="ti-instagram"></a>
                <a class="ti-twitter-alt"></a>
            </div>
            <div class="footer--dsc">
                <p>All right reserved. Design By <a href="http://cse.tlu.edu.vn/">CSE.TLU</a></p>
            </div>
        </div>
    </div>
</body>

</html>