<?php

function insertProduct($conn, $name, $price)
{
    $query = "insert into products (name, price) values ('{$name}',{$price})";
    return mysqli_query($conn, $query);
}

function listProducts($conn){
    $products = [];
    $result = mysqli_query($conn, "select * from products");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products,$product);
    }
    return $products;
}
