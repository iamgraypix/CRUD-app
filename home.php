<?php 

    include_once("DB.connect.php");

    if (isset($_POST['btn-submit']))
    {

        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $category = $_POST['category'];


        if ($connect) {

            //insert

            $table = "book_info";

            $insert = "INSERT INTO $table (title, author, price, category)
            VALUE ('$title', '$author', '$price', '$category')";


           

            if (mysqli_query($connect, $insert))
            {
                ?>
                    <script>

                        alert("New book has successfully saved!");

                        window.location.replace("index.php");

                    </script>

                <?php
            }


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
    <title>Add Book</title>
</head> 
<body style="height: 600px; background-color: #ececec;" class="d-flex align-items-center justify-content-center">
    
    <div class="container">
        <div class="row">
            <div class="col text-center">
    
            <img src="img/book.png" class="img-fluid "alt="book" style="width: 300px">

            <h1 class="mt-4">Book Store</h1>

            </div>
            <div class="col  d-flex align-items-center justify-content-center">
            <div class="text-center p-3 shadow-lg rounded w-75" style="background-color: #f5f5f5; border: 1px solid green;">

             
                <h4>Board</h4>

                <button class="btn btn-primary">View my books</button>
               
             
                <button class="btn btn-primary">Add New Books</button>            
            </div>
            </div>
        </div>
    </div>

    <!-- <h1>Form Here</h1>   -->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>