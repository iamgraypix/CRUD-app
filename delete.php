<?php 

    include_once('get.php');

    if ($connect AND isset($_GET['d']))
    {

        $id = $_GET['id'];

        $table = 'book_info';

        $delete = "DELETE FROM $table WHERE id = '$id'";

        if (mysqli_query($connect, $delete))
        {

            ?>

                <script>
                    alert("Delete Success!");
                    location.replace("index.php");
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
    <title>Delete Book</title>
</head>
<body style="height: 600px; background-color: #ececec;" class="d-flex align-items-center justify-content-center">
    
    <div class="container">
        <div class="row">
            <div class="col text-center">
    
                <img src="img/shredder.png" class="img-fluid "alt="book" style="width: 300px">

                <h1 class="mt-4">Deleting a book...</h1>

            </div>
            <div class="col shadow-lg rounded p-4 bg-white " style="border: 1px solid green;">

                <div class="text-center mb-5">
                    <h4>Delete Confirmation</h4 >
                </div>
                
                <div class="table-responsive">
                <table class="table table-striped align-middle mb-5 ">
                    <thead id="table-header">
                        <tr>
                            <th scope="col">Book Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?=$title; ?></td>
                            <td><?=$author; ?></td>
                            <td><?=$category; ?></td>
                            <td><?=$price; ?></td>
                        </tr>
                                    
                    </tbody>
                </table>
                </div>
                <p class="mb-3 text-center">
                    Are you sure you want to delete this?<br>
                    Please type the word "DELETE" to confirm.
                </p>

                <form method="post" class="text-center" id="form-delete">

                    <div class="d-flex justify-content-center mb-3">
                    <input id="input" type="text" style="border-color: red;" class="me-2 w-50 form-control" placeholder="type here..." required>
                    </div>
                    
                    <a href="index.php" class="btn btn-primary">Cancel</a href="index.php">
                    <button id="btn-delete" class="btn btn-danger" type="submit" name="delete">
                    <i class="bi bi-trash"></i>
                        DELETE
                    </button>
                </form>
            </div>
        </div>
    </div>



    


    <script>

        let deleteForm = document.querySelector('#form-delete');

        deleteForm.addEventListener('submit', function(e){
            e.preventDefault();

            let text = document.querySelector('#input').value;

            if (text.trim() == "DELETE")
            {
                // delete.php?id=7
                location.replace("delete.php?id=<?=$id?>&d=1");
                // alert(id);
            }

    

        })


    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>