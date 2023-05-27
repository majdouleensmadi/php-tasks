<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>

<div class="container mt-4">
<?php
$sql = "SELECT price FROM card_1";
$result = $con->query($sql);

$max_price = 0;
$min_price = 0;
$sum_price = 0;

// Calculate max, min, and sum of prices
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_price = $row['price'];
    $min_price = $row['price'];
    $sum_price = $row['price'];

    while ($row = $result->fetch_assoc()) {
        $price = $row['price'];
        if ($price > $max_price) {
            $max_price = $price;
        }
        if ($price < $min_price) {
            $min_price = $price;
        }
        $sum_price += $price;
    }
}

?>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Max:
                    <?php echo $max_price; ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Min:
                    <?php echo $min_price; ?>
                </h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Sum of all prices:
                    <?php echo $sum_price; ?>
                </h5>
            </div>
        </div>
    </div>
</div>

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="search" name="searchForm" method="POST">
                    <input type="text" name="search" placeholder="Search here..." required>
                    <button type="submit">Search</button>
                </form>
                <div class="card-header">
                    <h4>Student Details
                        <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>image</th>
                                <th>brand</th>
                                <th>price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM card_1";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $user) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $user['id']; ?>
                                        </td>

                                        <td>
                                            <?= $user['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo "<img src='" . $user['img_url'] . "' width='50'>"; ?>
                                        </td>
                                        <td>
                                            <?= $user['brand']; ?>
                                        </td>
                                        <td>
                                            <?= $user['price']; ?>
                                        </td>
                                        <td>
                                            <a href="student-view.php?id=<?= $user['id']; ?>"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="student-edit.php?id=<?= $user['id']; ?>"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete_student" value="<?= $user['id']; ?>"
                                                    class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php  $con->close();    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>