<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employees</title>
</head>
<body>
    <h1>Add Employees</h1>
    <form action="/add-employee" method="POST">
        @csrf
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">
        <br><br>
        <button type="submit">Submit Data</button>
    </form>
</body>
</html>
