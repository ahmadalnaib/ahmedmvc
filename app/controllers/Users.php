<?php


class Users extends Controller
{
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function register()
  {
    //Check for post

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //PROCESS FORM
      //Sanitize Post data



      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      //init data
      $data = [

        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',

      ];

      //VALIDATE EMAIL
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      } else {
        //check email
        if ($this->userModel->findUserByEmail($data['email'])) {
          $data['email_err'] = 'Email is already taken';
        }
      }

      //validate name

      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      //validate password

      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = ' password must be at least 6 characters';
      }

      //validate confirm password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please comfirm password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Password do not match';
        }
      }


      //make sure errors are empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

        //validated
       //hash pass

       $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);

       //REGISTER USER
       if($this->userModel->register($data)){

       redirect('users/login');

       }else{
         die('Something went wrong');
       }
      } else {

        //load view with errors
        $this->view('users/register', $data);
      }
    } else {
      //init data
      $data = [

        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',

      ];

      //load view
      $this->view("users/register", $data);
    }
  }



  public function login()
  {
    //Check for post

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      //PROCESS FORM


      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      //init data
      $data = [


        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];


      //VALIDATE EMAIL

      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      //validate password

      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      //make sure errors are empty

      if (empty($data['email_err']) && empty($data['password_err'])) {
        //validated
        die('success');
      } else {
        //load view with errors
        $this->view('users/login', $data);
      }
    } else {
      //init data
      $data = [


        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',


      ];

      //load view
      $this->view("users/login", $data);
    }
  }
}
