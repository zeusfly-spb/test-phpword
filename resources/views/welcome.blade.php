<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Document</title>
</head>
<body>
<h1>Create Document</h1>
<form action="/create-doc" method="POST">
    @csrf
    <div>
        <label for="title">Document Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="date">Creation Date:</label>
        <input type="date" id="date" name="date" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <div>
        <button type="submit">Create Document</button>
    </div>
</form>
</body>
</html>
