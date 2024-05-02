<?php 

    include "../includes/cdnlinks.php";
    include "nav.php";

?>

<form action="." method="POST" enctype="multipart/form-data">

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
        <input type="text" class="form-control" name="title" value="<?= @$games['Title']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Console</span>
        <input type="text" class="form-control" name="console" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
        <input type="text" class="form-control" name="price" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        <input type="file" class="form-control" name="image" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <input type="submit" value="Submit">

    <?php
    
    if ($title) {
        $val = "save_game";
    }
    ?>

    <input name="action" value="<?= $val ?>">
</form>

<button @click="editForm()">Edit Game</button>

