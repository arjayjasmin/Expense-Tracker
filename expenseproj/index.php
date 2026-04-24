<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Expense Tracker</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Expense Tracker</h2>

<div class="add-btn-container">
<a href="add_expense.php">Add Expense</a>
</div>

<table border="1">
<tr>
<th>Title</th>
<th>Category</th>
<th>Amount</th>
<th>Date</th>
<th>Description</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM expenses");

while($row = mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['amount']; ?></td>
<td><?php echo $row['expense_date']; ?></td>
<td><?php echo $row['description']; ?></td>

<td class="action-links">
<a href="edit_expense.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete_expense.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>