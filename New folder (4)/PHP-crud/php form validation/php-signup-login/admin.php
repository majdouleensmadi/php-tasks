
<?php
session_start();


// Connect to database
$mysqli = require __DIR__ . "/database.php";

// Get all registered users
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);

// Handle adding a new user
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password)) {
        $error = "Invalid input";
    } else {
        // Hash password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into database
        $sql = sprintf("INSERT INTO user (email, password_hash) VALUES ('%s', '%s')",
            $mysqli->real_escape_string($email),
            $mysqli->real_escape_string($password_hash)
        );
        $result = $mysqli->query($sql);

        if ($result) {
            $success = "New user added successfully";
        } else {
            $error = "Failed to add new user";
        }

           // Update user details in the database
    $sql = sprintf("UPDATE user SET name = '%s', email = '%s' WHERE id = %d",
    $mysqli->real_escape_string($name),
    $mysqli->real_escape_string($email),
    $user_id
);
$mysqli->query($sql);
}

// Handle deleting a user
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_user"])) {
$user_id = $_POST["delete_user"];

// Delete user from the database
$sql = sprintf("DELETE FROM user WHERE id = %d", $user_id);
$mysqli->query($sql);
}
 }
// Fetch all users from the database
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);
$users = $result->fetch_all(MYSQLI_ASSOC);
?>
   



<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Admin</h1>

    <h2>Registered Users</h2>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user["email"]) ?></td>
                    <td><?= htmlspecialchars($user["name"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Add User</h2>
    <?php if (isset($success)): ?>
        <p><?= $success ?></p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button>Add User</button>
    </form>
     <h2>View all registered users</h2>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user["name"]) ?></td>
                    <td><?= htmlspecialchars($user["email"]) ?></td>
                    <td>
                        <form method="post" style="display: inline-block;">
                            <input type="hidden" name="edit_user" value="<?= $user["id"] ?>">
                            <button>Edit</button>
                        </form>
                        <form method="post" style="display: inline-block;">
                            <input type="hidden" name="delete_user" value="<?= $user["id"] ?>">
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>


