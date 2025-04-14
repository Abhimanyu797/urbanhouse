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
                    <h4 class="text-center">Add Category</h4>
                    <form action="submit-category.php" method="POST">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="Category" name="Category" placeholder="Enter category name">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="subCategoryCount" class="form-label">Number of Subcategories</label>
                            <input type="number" class="form-control" id="subCategoryCount" placeholder="Enter number of subcategories">
                        </div> -->
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>