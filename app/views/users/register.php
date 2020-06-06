<?php require APPROOT . '/views/inc/header.php';?>
<main>

<div id="reg">
  <div class="reg-content">
    <form action="" method="POST">
    <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    </div>
    <div>
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    </div>
    <div>
    <label for="password">Password</label>
    <input type="text" name="password" id="password">
    </div>
    <div>
    <label for="confirm_passowrd">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password">
    </div>
    <button class="btn" type="submit">Register</button>
    </form>

  </div>
  <div class="reg-img">
  <p class="lead">Let's create the future together.</p>
  <img class="moving-img" src="../public/img/gegani1.png" alt="">
  </div>

</div>



</main>


<?php require APPROOT . '/views/inc/footer.php';?>