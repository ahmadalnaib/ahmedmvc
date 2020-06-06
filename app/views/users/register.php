<?php require APPROOT . '/views/inc/header.php';?>
<main>

<div id="reg">
  <div class="reg-content">
    <form action="<?php echo URLROOT; ?>/usrs/register" method="POST">

    <div>
    <label for="name">Name</label>
    <input class="<?php echo (!empty($data['name_err']))? 'is-invalid': ''; ?>" type="text" name="name" id="name" value="<?php echo $data['name']; ?>" required>
    <span><?php echo $data['name_err'];?></span>
    </div>
    <div>

    <label  for="email">Email</label>
    <input class="<?php echo (!empty($data['email_err']))? 'is-invalid': ''; ?>" type="email" name="email" id="email" value="<?php echo $data['email_err']; ?>" required>
    <span><?php echo $data['email_err'];?></span>
    </div>

    <div>

    <label for="password">Password</label>
    <input class="<?php echo (!empty($data['password_err']))? 'is-invalid': ''; ?>" type="text" name="password" id="password" value="<?php echo $data['password_err']; ?>" required>
    <span><?php echo $data['password_err'];?></span>
    </div>

    <div>
    <label for="confirm_passowrd">Confirm Password</label>
    <input class="<?php echo (!empty($data['confirm_password_err']))? 'is-invalid': ''; ?>" class="<?php echo (!empty($data['email_err']))? 'is-invalid': ''; ?>" type="password" name="confirm_password" id="confirm_password" value="<?php echo $data['confirm_password_err']; ?>" required>
    <span><?php echo $data['confirm_password_err'];?></span>
    </div>

    <button class="btn" type="submit">Register</button>
    <a class="btn-link" href="<?php echo URLROOT; ?>/users/login">Have an account? Login</a>
    </form>

  </div>
  <div class="reg-img">
  <p class="lead">Let's create the future together.</p>
  <img class="moving-img" src="../public/img/gegani1.png" alt="">
  </div>

</div>



</main>


<?php require APPROOT . '/views/inc/footer.php';?>