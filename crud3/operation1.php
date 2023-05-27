<?php
require_once 'connection.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $employee_ids = $_POST['employee_ids'];
    $salary_change = $_POST['salary_change'];
    $operation = $_POST['operation'];

    // Get the current salary amount for all selected employees
    $sql = "SELECT id, salary FROM employees WHERE id IN (".implode(',', $employee_ids).")";
    $result = mysqli_query($mysqli, $sql);

    // Loop through the results and update the salary amount for each employee
    while ($row = mysqli_fetch_assoc($result)) {
        $employee_id = $row['id'];
        $current_salary = $row['salary'];

        // Calculate the new salary amount based on the selected operation
        if ($operation == 'increase') {
            $new_salary = $current_salary + $salary_change;
        } elseif ($operation == 'decrease') {
            $new_salary = $current_salary - $salary_change;
        }

        // Update the salary amount in the database
        $sql = "UPDATE employees SET salary = $new_salary WHERE id = $employee_id";
        if (mysqli_query($mysqli, $sql)) {
            // Display a confirmation message to the user
            echo "Salary updated successfully for employee ID $employee_id!<br>";
        } else {
            echo "Error updating salary for employee ID $employee_id: " . mysqli_error($mysqli)."<br>";
        }
    }
}

// Display the form to the user
$sql = "SELECT id, name FROM employees";
$result = mysqli_query($mysqli, $sql);
?>
<form method="post" action="" id="update-salary-form">
    <label>
        <input type="checkbox" name="select-all-ids" id="select-all-ids">
        Select All IDs
    </label>
    <br>
    <div id="employee-ids">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <label>
                <input type="checkbox" name="employee_ids[]" value="<?= $row['id'] ?>">
                <?= $row['name'] ?> (ID: <?= $row['id'] ?>)
            </label>
            <br>
        <?php } ?>
    </div>
    <br>
    <label for="salary_change">Amount to change:</label>
    <input type="text" name="salary_change" id="salary_change">
    <br>
    <select name="operation" id="operation">
        <option value="increase">Increase</option>
        <option value="decrease">Decrease</option>
    </select>
    <button type="submit">Update Salary</button>
</form>
<script>
    document.getElementById('select-all-ids').addEventListener('change', function () {
        var employeeIds = document.querySelectorAll('#employee-ids input[type="checkbox"]');
        if (this.checked) {
            employeeIds.forEach(function (employeeId) {
                employeeId.checked = true;
                employeeId.parentElement.style.display = 'none';
            });
        } else {
            employeeIds.forEach(function (employeeId) {
                employeeId.checked = false;
                employeeId.parentElement.style.display = 'block';
            });
        }
    });
</script>