<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konoha Cafe</title>
    <link rel="stylesheet" href="css2.css">
    <link rel="stylesheet" href="css3.css">
    <link rel="icon" href="images\favicon.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <section style="box-shadow: 0 15px 40px -20px rgba(40, 44, 63); border-radius: 10px; margin: 20px;">

        <div class="checkout">
            <nav class="menu_top">
                <div>
                    <img src="images/logo.png" alt="logo" height="130px" style="flex-grow: 0; margin: 10px 10px 0px 10px; position: absolute;">
                </div>
                <div class="menu">
                    <h1 style="font-size:40px; padding: 0px 0px;">Checkout</h1>
                </div>
            </nav>
        </div>
        <div class="container">

            <div class="cover">
                <h1>Input Your Details</h1>
                <form class="flex-form">
                    <input type="search" placeholder=Name>
                    <br>
                    <input type="search" placeholder=Phone>
                    <br>
                    <input type="search" placeholder=Address>
                    <br>
                    <label for="o_type">Order Type:</label>
                    <ul>
                        <li> Home delivery(with Pay on Delivery)<input type="radio" name="o_type" value="Home delivery"> </li>
                        <li> Walk-in:<input type="radio" name="o_type" value="Walk-in"> </li>
                    </ul>
                    <input type="submit" value="Finish Order">
                </form>
            </div>

        </div>
    </section>
</body>
<script>
    function create() {
        <?php
        $conn = mysqli_connect("localhost", "root", "", "konoha_cafe");
        $n = $_POST['phone'];
        $quantity = $_POST['Ichiraku'];

        $sql = "insert into customer_details (mobile) values ($n));";
        mysqli_query($conn, $sql);

        $order_detail = "insert into order_details (quantity,item_name,mobile) values ($quantity,'Ichiraku',$n)";
        mysqli_query($conn, $order_detail);
        mysqli_query($conn, $order);
        ?>
    }
</script>

</html>