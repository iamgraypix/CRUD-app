<?php
include_once("DB.connect.php");
if ($connect && isset($_GET['id']))
    {
        $id = $_GET['id'];

        $table = "book_info";

        $select = "SELECT title, author, price, category FROM $table WHERE id = '$id'";

        $result = mysqli_query($connect, $select);

        $title;
        $author;
        $price;
        $category;

        while ($row = mysqli_fetch_assoc($result)){

            $title = $row['title'];
            $author = $row['author'];
            $price = $row['price'];
            $category = $row['category'];
        }

        

    }


?>