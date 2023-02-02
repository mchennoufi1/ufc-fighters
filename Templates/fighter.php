<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <h4>UFC Fighters</h4>

    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
    <h4>manage fighters</h4>
    <table class="table align-middle"></table>
    <thead>
        <tr>
            <th scope="col">nr</th>
            <!--<th scope="col">picture</th> -->
            <th scope="col">name</th>
            <th scope="col">weight</th>
            <th scope="col" class="text-center">change</th>
            <th scope="col" class="text-center">delete</th>
        </tr>
    </thead>
    <tbody>
    <?php $count=1;?>
    </tbody>
</div>
</body>
</html>
