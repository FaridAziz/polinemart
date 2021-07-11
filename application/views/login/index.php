<?= 
form_open('login/proses_login');
?>

<body class="bg-gradient-secondary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <div class="alert alert-info" role="aler">
                                    <?php
                                        if(isset($pesan)){
                                            echo $pesan;
                                        }
                                        else{
                                            echo "Masukan username dan password anda";
                                        }
                                    ?>
                                </div>
                  <form class="user" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="uname1" id="uname1" required="" placeholder="Username">
                      <div class="invalid-feedback">Oops, you missed this one.</div>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pwd1" id="pwd1" required="" autocomplete="new-password" placeholder="Password">
                      <div class="invalid-feedback">Enter your password too!</div>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-user btn-block" id="btnLogin">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="http://localhost/polinemart/registrasi">Create an Account!</a>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


<?=
    form_close();
?>
