<?php
$getfile = file_get_contents('data.json');
$jsonfile = json_decode($getfile);
?>
<a href="./add.php">Add</a>
<table align="center">
    <tr>
        <th>Title</th>
        <th>Background Image</th>
        <th>Video URL (Link to Video)</th>
        <th>Description of Video</th>
        <th></th>
    </tr>
    <tbody>
        <?php foreach ($jsonfile->playlist as $index => $obj): ?>
            <tr>
                <td><?php echo $obj->title; ?></td>
                <td><?php echo $obj->title_bg; ?></td>
                <td><?php echo $obj->link; ?></td>
                <td><?php echo $obj->description; ?></td>
                <td>
                    <a href="./edit.php?id=<?php echo $index; ?>">Edit</a>
                    <a href="./delete.php?id=<?php echo $index; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>