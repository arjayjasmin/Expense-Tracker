<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM expenses WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$title = $_POST['title'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$desc = $_POST['description'];

mysqli_query($conn,"UPDATE expenses SET
title='$title',
category='$category',
amount='$amount',
expense_date='$date',
description='$desc'
WHERE id=$id");

header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Expense - Expense Tracker</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Edit Expense</h2>

<form method="POST">

<label>Title:</label>
<input type="text" name="title" value="<?php echo $row['title']; ?>"><br>

<label>Category:</label>
<input type="text" name="category" value="<?php echo $row['category']; ?>"><br>

<label>Amount:</label>
<input type="number" name="amount" value="<?php echo $row['amount']; ?>"><br>

<label>Date:</label>
<input type="date" name="date" value="<?php echo $row['expense_date']; ?>"><br>

<label>Description:</label>
<textarea name="description"><?php echo $row['description']; ?></textarea><br><br>

<button name="update">Update</button>

</form>

</div>

</body>
</html>