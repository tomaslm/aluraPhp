<?php
require_once "connect.php";

function insertCategory($conn, $name)
{
    $query = "insert into category (name) values ('{$name}')";
    return mysqli_query($conn, $query);
}

function listCategories($conn)
{
    $categories = [];
    $result = mysqli_query($conn, "select * from category");
    while ($category = mysqli_fetch_assoc($result)) {
        array_push($categories, $category);
    }
    return $categories;
}

function removeCategory($conn, $id)
{
    $query = "delete from category where id = {$id}";
    return mysqli_query($conn, $query);
}