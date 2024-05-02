<!-- <?php 

    // include "../includes/cdnlinks.php";
    // include "nav.php";

?> -->

<form action="." method="POST" enctype="multipart/form-data">

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
        <input type="text" class="form-control" name="username" value="<?= @$customers['username']?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">First Name</span>
        <input type="text" class="form-control" name="firstName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
        <input type="text" class="form-control" name="lastName" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
        <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <!-- LOAD SELECT BOX INTO FORM -->
    <?php 
        loadSelect();
    ?> 

    <br>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
        <input type="text" class="form-control" name="qty" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>

    <input type="submit" value="Submit">

    <?php
    if ($username) {
        $val = "save_customer";
    }
    ?>

    <input type="hidden" name="action" value="<?= $val ?>">
</form>

