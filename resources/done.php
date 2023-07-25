<?php
$conn = mysqli_connect("localhost", "root", "", "konoha_cafe");
$check = $_POST['mobile'];
$name = $_POST['c_name'];
$address = $_POST['address'];
$o_type = $_POST['o_type'];
        $sql = "update customer_details set name='$name', address='$address' and o_type='$o_type' WHERE mobile=$check;";
        mysqli_query($conn, $sql);

        echo"order Successfull";