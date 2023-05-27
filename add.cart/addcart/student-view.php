<?php
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

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="card-body">
                <form id="search-form">
                    <div class="mb-3">
                        <label for="search-input">Search By ID</label>
                        <input type="text" class="form-control" id="search-input" name="id">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <div id="search-result"></div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM card_1 WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <div class="mb-3">
                                    <label> Name</label>
                                    <p class="form-control">
                                        <?= $student['name']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>price</label>
                                    <p class="form-control">
                                        <?= $student['price']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>brand</label>
                                    <p class="form-control">
                                        <?= $student['brand']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>img</label>
                                    <p class="form-control">
                                        <?= $student['img_url']; ?>
                                    </p>
                                </div>

                                <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            // Submit search form using AJAX
            $('#search-form').submit(function (event) {
                event.preventDefault();
                var student_id = $('#search-input').val();
                $.ajax({
                    type: 'GET',
                    url: 'search.php',
                    data: {
                        id: student_id
                    },
                    success: function (response) {
                        $('#search-result').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>