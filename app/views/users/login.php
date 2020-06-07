<?php require APPROOT . '/views/inc/header.php';?>
<main>

<div id="reg">
  <div class="reg-content">

    <form action="<?php echo URLROOT; ?>users/login" method="POST">

  <div>
    <label  for="email">Email</label>
    <input class="<?php echo (!empty($data['email_err']))? 'is-invalid': ''; ?>" type="email" name="email" id="email" value="<?php echo $data['email']; ?>" >
    <span class="err"><?php echo $data['email_err'];?></span>
    </div>

    <div>
    <label for="password">Password</label>
    <input class="<?php echo (!empty($data['password_err']))? 'is-invalid': ''; ?>" type="text" name="password" id="password" >
    <span class="err"><?php echo $data['password_err'];?></span>
    </div>


    <button class="btn" type="submit">Login</button>
    <a class="btn-link" href="<?php echo URLROOT; ?>users/register">Create an account? Register</a>
    </form>

  </div>
  <div class="reg-img">
  <p class="lead">UPSKILL YOUR TECH
TEAMS FROM ANYWHERE</p>
  <img class="skill-img" src="../public/img/skill.png" alt="">
  </div>

</div>



</main>


<?php require APPROOT . '/views/inc/footer.php';?>