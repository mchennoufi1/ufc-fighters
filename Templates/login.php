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
    <form method="post"
          <div class="mb-3">
              <label for="exampleInputEmaill" class="form-label"Emailadress></label>
              <input type="email" class="form-control" name="email"
              id="exampleInputEmaill" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class=" form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" name="login" class="btn btn-primary">submit</button>
    </form>

    <hr>>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
