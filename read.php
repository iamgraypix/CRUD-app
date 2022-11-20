<?php
    include_once('DB.connect.php');


    if ($connect)
    {
        
        $table = "book_info";

        $read = "SELECT * FROM $table";

        $result = mysqli_query($connect, $read);

        $books = array();

        $i = 0;


        while ($row = mysqli_fetch_assoc($result)){

            //
            $books[$i] = array(

                "id" => $row['id'],
                "title" => $row['title'],
                "author" => $row['author'],
                "price" => $row['price'],
                "category" => $row['category']

            ); 

            $i++;
        }


    }



?>