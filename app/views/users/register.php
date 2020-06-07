<?php require APPROOT . '/views/inc/header.php';?>
<main>

<div id="reg">
  <div class="reg-content">
    <form action="<?php echo URLROOT; ?>users/register" method="POST">

    <div>
    <label for="name">Name</label>
    <input  type="text" name="name" id="name" value="<?php echo $data['name']; ?>" >
    <span class="err"><?php echo $data['name_err'];?></span>
    </div>
    <div>

    <label  for="email">Email</label>
    <input  type="email" name="email" id="email" value="<?php echo $data['email']; ?>" >
    <span class="err"><?php echo $data['email_err'];?></span>
    </div>

    <div>

    <label for="password">Password</label>
    <input  type="text" name="password" id="password" value="<?php echo $data['password']; ?>" >
    <span class="err"><?php echo $data['password_err'];?></span>
    </div>

    <div>
    <label for="confirm_passowrd">Confirm Password</label>
    <input  type="password" name="confirm_password" id="confirm_password" value="<?php echo $data['confirm_password']; ?>" >
    <span class="err"><?php echo $data['confirm_password_err'];?></span>
    </div>

    <button class="btn" type="submit">Register</button>

    <a class="btn-link" href="<?php echo URLROOT; ?>users/login">Have an account? Login</a>
    </form>

  </div>
  <div class="reg-img">
  <p class="lead">Let's create the future together.</p>
  <img class="moving-img" src="../public/img/gegani1.png" alt="">
  </div>

</div>



</main>


<?php require APPROOT . '/views/inc/footer.php';?>