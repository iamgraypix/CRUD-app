<?php 

    include_once('get.php');


    if ($connect AND isset($_POST['btn-submit']))
    {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $table = "book_info";

        $update = "UPDATE $table SET title = '$title', author = '$author', 
            price = '$price', category = '$category' WHERE id = '$id'";


        if (mysqli_query($connect, $update))
        {

            ?>

                <script>

                        alert("update success!");

                        window.location.replace("index.php");
                </script>


            <?php

        }


    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body style="height: 600px; background-color: #ececec;" class="d-flex align-items-center justify-content-center">
    
<div class="container">
        <div class="row">
            <div class="col text-center mt-5">
    
            <img src="img/book2.png" class="img-fluid "alt="book" style="width: 300px">

            <h1 class="mt-4">Edit book details</h1>

            </div>
            <div class="col  d-flex align-items-center justify-content-center">
            <form action="" method="post" class="p-3 shadow-lg rounded w-75" style="background-color: #f5f5f5; border: 1px solid green;">

                <div class="text-center">
                    <h4>Book Information</h4 >
                </div>

                <div class="mb-3">
                    <label for="book-title" class="form-label">Book Title</label>
                    <input type="text"  value="<?=$title; ?>" name="title" class="form-control" id="book-title" aria-describedby="emailHelp" required>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" value="<?=$author; ?>"  name="author" class="form-control" id="author" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" value="<?=$price; ?>" name="price" class="form-control" id="price" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" value="<?=$category; ?>" name="category" class="form-control" id="category" required>
                </div>
                <a href="index.php" class="btn btn-primary">Cancel</a href="index.php">
                <button type="submit" name="btn-submit" class="btn btn-danger">Edit</button>

            </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>