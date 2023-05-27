<?php
session_start();
require 'dbcon.php';

$searchText = $_POST['searchText'];

$query = "SELECT * FROM user WHERE Name LIKE '%$searchText%'";
$query_run = mysqli_query($con, $query);

if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $user) {
        ?>

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <!-- jQuery library -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <title>Student CRUD</title>
        </head>

        <tr>
            <input type="search" placeholder="Search here..." required id="search-input">
            <tbody id="student-table-body">

                <td>
                    <?= $user['id']; ?>
                </td>
                <td>
                    <?php echo "<img src='" . $user['img'] . "' width='50'>"; ?>
                </td>
                <td>
                    <?= $user['Name']; ?>
                </td>
                <td>
                    <?= $user['address']; ?>
                </td>
                <td>
                    <?= $user['Salary']; ?>
                </td>
                <td>
                    <a href="student-view.php?id=<?= $user['id']; ?>" class="btn btn-info btn-sm">View</a>
                    <a href="student-edit.php?id=<?= $user['id']; ?>" class="btn btn-success btn-sm">Edit</a>
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