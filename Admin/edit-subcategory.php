<?php
include "db.php";
$id=$_GET['id'];
$sql="select * from subcategory where id='$id'" ;
$q=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($q);
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
    <main class="main-content">
       
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card p-4 shadow">
                    <h4 class="text-center">Edit Sub-Category</h4>
                    <form action="update-subcategory.php" method="POST">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Sub-Category Name</label>
                            <input type="hidden" value="<?php echo $data['id']; ?>" name='id'>
                            <input type="text" class="form-control" id="text-input" name="subcategory" value="<?php echo $data['Subcategory']; ?>" placeholder="category"  >
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>