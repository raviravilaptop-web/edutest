<!DOCTYPE html>
<html>
<head>
    <title>OpenShift Test - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glass-card">
        <h1>Welcome to OpenShift</h1>
        <p>This is a PHP test application deployed via GitHub. Use the buttons below to explore the other pages.</p>
        <div class="btn-container">
            <a href="about.php" class="btn">About Me</a>
            <a href="services.php" class="btn">Our Services</a>
            <a href="contact.php" class="btn">Get in Touch</a>
        </div>
        <p style="margin-top:20px; font-size: 0.8rem;">Server Time: <?php echo date('Y-m-d H:i:s'); ?></p>
    </div>
</body>
</html>