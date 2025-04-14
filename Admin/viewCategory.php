<?php
include "db.php";
$sql="select * from category" ;
$query=mysqli_query($con,$sql);
// $data=mysqli_fetch_assoc($query);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "navbar.php";
    ?>

    <!-- Sidebar -->
  <?php
  include "sidebar.php";
  ?>

    <div class="content">
        <div class="container mt-3">
            <h2 class="mb-3">Manage Categories</h2>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                                <th scope="col">S.N.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                        while($data=mysqli_fetch_assoc($query)){ ?>
                                            
                                             <tr>
                                        <th scope="row"><?php echo $data['id'] ; ?></th>
                                        <td><?php echo $data['Category'] ; ?></td>
                                        <td><a href="edit-category.php?id=<?php echo $data['id'] ;?>" class="btn btn-success">Edit</a> <a href="delete-category.php?catid=<?php echo $data['id'] ;?>" class="btn btn-danger">Delete</a></td>
                                        <!-- <td><button class="btn btn-success">Edit</button> <button class="btn btn-danger">Delete</button></td> -->
                                        
                                    </tr>


                                    <?php
                                        }

                                    ?>
                    <!-- <tr>
                        <td>Clothing</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Footwear</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Accessories</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Beauty Products</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
<div class="clearfix"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
