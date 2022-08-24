<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "../admin/signup/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
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

    <header>
<!-- php header link -->
<?php include 'header.php'; ?>
    </header>
    
    <h1>Home</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="../admin/signup/logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="../admin/signup/login.php">Log in</a> or <a href="../admin/signup/signup.html">sign up</a></p>
        
    <?php endif; ?>
    





    <footer>
        <!-- php footer link -->
<?php include 'footer.php'; ?>
    </footer>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    