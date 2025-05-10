<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            font-size: 24px;
        }
        nav {
            margin: 20px;
        }
        nav a {
            margin: 10px;
            text-decoration: none;
            color: #4CAF50;
            font-size: 18px;
        }
        footer {
            background-color: #f1f1f1;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <?php echo "Welcome"; ?>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
</nav>

<main>
    <p><?php echo "PHP home page."; ?></p>
</main>

<footer>
    <?php echo "&copy; " . date("Y") . " KnowledgeKT"; ?>
</footer>

</body>
</html>
