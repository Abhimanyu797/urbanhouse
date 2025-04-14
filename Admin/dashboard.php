<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

    <!-- Main Content -->
    <main class="main-content">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h6 class="text-primary">EARNINGS (MONTHLY)</h6>
                    <h3>$40,000</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h6 class="text-success">EARNINGS (ANNUAL)</h6>
                    <h3>$215,000</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h6 class="text-info">TASKS</h6>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;">50%</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h6 class="text-warning">PENDING REQUESTS</h6>
                    <h3>18</h3>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
