<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}

if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
    header("Location: admin.php");
} else {
    header("Location: index.php");
}

?>
<?php





if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
    header("Location: admin.php"); // Display admin section
} else {
    // Display regular user section
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    