<?php include_once('read.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background-color: #ececec;">
    <div class="container mt-5">

      <div class="row">
        <div class="h1 text-center">Book Store</div>
      </div>

      <div class="row">
        <div class="col">
          <a href="add.php" class="btn btn-blue mb-1 d-inline-flex align-items-center" role="button">
            <i class="bi bi-plus fs-3"></i>
              Add Book
          </a>
        </div>
        <!-- <div class="col">
          <button class="btn btn-primary">Search</button>
        </div> -->
      </div>
      
    
      <!-- <div class="row"> -->

        <div class="col bg-light">
          <table class="table table-striped shadow-lg align-middle">
          
              <thead id="table-header">
                  <tr>
                      <th scope="col">Book Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Category</th>
                      <th scope="col">Price</th>
                      <th scope="col">Actions</th>
                  </tr>
              </thead>
              <tbody>

                <?php 
                  foreach($books as $book):
                ?>
                <tr>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                    <td><?= $book['category']; ?></td>
                    <td>₱ <?= $book['price']; ?></td>

                    <td>
                  
                    <a href="edit.php?id=<?=$book['id'];?>" class="btn btn-warning">
                  <i class="bi bi-pencil"></i>
                          Edit
                  </a>

                  <a href="delete.php?id=<?=$book['id']; ?>" class="btn btn-danger">
                  <i class="bi bi-trash"></i>
                          Delete
                  </a>
                  

                  </td>


                </tr>
                <!-- <tr>
                  <td>El Filibusterismo</td>
                  <td>Dr. Jose P. Rizal</td>
                  <td>Novel</td>
                  <td>Freedom</td>
                </tr> -->
                  <?php endforeach; ?>
              </tbody>
          </table>
              
        </div>

      <!-- </div> -->
      
      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>