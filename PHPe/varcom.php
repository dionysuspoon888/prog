<html>
<head>
  <title>Variable and Comment</title>
</head>
<body>
  <?php
    // Variable begins with $
    $a = "This is generated by php!";
    echo "<p>".$a."</p>";
  ?>
  <p>This is not.</p>
  <p><?php echo $a; ?></p>
  // This is html content, but not comments of php!
</body>
</html>
