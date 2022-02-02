<?php
    require_once("../Books/php/db.php");
    Createdb()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--Custom stlesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="py-2">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-warning" id="basic-addon1"><i class="fas fa-portrait"></i></div>
                            <input type="text" autocomplete="off" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-3">
                            <div class="input-group-text bg-warning" id="basic-addon1"><i class="fas fa-book"></i></div>
                            <input type="text" autocomplete="off" class="form-control" placeholder="Book Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-group-text bg-warning" id="basic-addon1"><i class="fas fa-people-carry"></i></div>
                            <input type="text" autocomplete="off" class="form-control" placeholder="Publisher">
                        </div>
                                            
                        <div class="col">
                            <div class="input-group-text bg-warning" id="basic-addon1"><i class="fas fa-dollar-sign"></i></div>
                            <input type="text" autocomplete="off" class="form-control" placeholder="Price">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-success"><i class='fas fa-plus'></i></button>
                        <button type="button" class="btn btn-primary"><i class='fas fa-sync'></i></button>
                        <button type="button" class="btn btn-light border"><i class='fas fa-pen-alt'></i></button>
                        <button type="button" class="btn btn-danger"><i class='fas fa-trash-alt'></i></button>
                     </div>
                </form>
            </div>
                <div class="d-flex table-data">
                    <table class="table table-striped table-dark">
                       <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Book Name</th>
                                <th>Publisher</th>
                                <th>Book Price</th>
                                <th>Edit</th>
                            </tr>
                       </thead>
                        <tbody>
                            <td>1</td>
                            <td>Book Name</td>
                            <td>A.K. publisher</td>
                            <td>53</td>
                            <td> <i class="far fa-edit btnedit "></i></td>
                         </tbody>
                    </table>

                 </div>






         </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>