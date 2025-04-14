<?php
include "db.php";
$sql="select * from subcategory" ;
$query=mysqli_query($con,$sql);
// $data=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h2 class="mb-3">Subcategory and Main Category</h2>
            <div class="table-container">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">S.N.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category</th>
                                <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                        while($data=mysqli_fetch_assoc($query)){ ?>
                                            
                                             <tr>
                                        <th scope="row"><?php echo $data['id'] ; ?></th>
                                        <td><?php echo $data['Category'] ; ?></td>
                                        <td><?php echo $data['Subcategory'] ; ?></td>
                                        <td><a href="edit-subcategory.php?id=<?php echo $data['id'] ;?>" class="btn btn-success">Edit</a> <a href="delete-subcategory.php?catid=<?php echo $data['id'] ;?>" class="btn btn-danger">Delete</a></td>
                                        
                                    </tr>


                                    <?php
                                        }

                                    ?>



                         <!-- <tr>
                            <td>Tops</td>
                            <td>Clothing</td>
                        </tr> -->
              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>