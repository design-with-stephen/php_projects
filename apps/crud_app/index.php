<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note app</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="insertData.php" method="POST">
        <div class="input_group">
            <label for="NoteTitle">Note Title</label>
        <input type="text" name="noteTitle" placeholder="Add Note Title Here" autocomplete="off">
        </div>
        <div class="input_group">
            <label for="NoteTitle">Note</label>
            <textarea name="note" id="note" placeholder="Add Notes Here" autocomplete="off"></textarea>
        </div>
        <button type="submit" name="submit">send</button>
    </form>
</body>
</html>