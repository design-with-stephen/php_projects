<?php 
require_once ("notesApp.php");
$note = new note();
$notes = $note->get_notes();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>list of notes</h2>
    <table>
        <tr>
            <th>note Title</th>
            <th>Notes</th>
        </tr>

        <?php if(!empty($notes)):?>
        <?php foreach($notes as $note):?>
            <tr>
                <td><?= htmlspecialchars($note['noteTitle']);?></td>
                <td><?= htmlspecialchars($note['notes']);?></td>
            </tr>
        <?php endforeach;?>
        <?php else:?>
            <tr>
                <td>No notes found</td>
            </tr>
        <?php endif;?>
    </table>
</body>
</html>