<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Add Expense - Expense Tracker</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php
if(isset($_POST['submit'])){

$title = $_POST['title'];
$category = $_POST['category'];
$amount = $_POST['amount'];
$date = $_POST['date'];
$desc = $_POST['description'];

mysqli_query($conn, "INSERT INTO expenses
(title,category,amount,expense_date,description)
VALUES ('$title','$category','$amount','$date','$desc')");

header("Location:index.php");
}
?>

<h2>Add Expense</h2>

<form method="POST">

<label>Title:</label>
<input type="text" name="title"><br>

<label>Category:</label>
<input type="text" name="category"><br>

<label>Amount:</label>
<input type="number" name="amount"><br>

<label>Date:</label>
<input type="date" name="date"><br>

<label>Description:</label>
<textarea name="description"></textarea><br><br>

<button name="submit">Save</button>

</form>

</div>

</body>
</html>