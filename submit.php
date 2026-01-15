<?php
$name = $_POST['name'] ?? '';
$subject = $_POST['subject'] ?? '';
$rating = $_POST['rating'] ?? '';
$comments = $_POST['comments'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Thank You for Your Feedback!</h2>

    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Subject:</strong> <?php echo htmlspecialchars($subject); ?></p>
    <p><strong>Rating:</strong> <?php echo htmlspecialchars($rating); ?></p>
    <p><strong>Comments:</strong> <?php echo htmlspecialchars($comments); ?></p>

    <h3>Feedback Submitted Successfully ✅</h3>
</div>

</body>
</html>
