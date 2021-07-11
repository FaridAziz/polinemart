<!doctype html>
<html lang="en">
  <head>
    <style>
      .badge{
        margin-left:3px;
      }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('fontawesome-free/css/all.min.css') ?>">

    <!-- <title>Hello, world!</title> -->
    <title><?php echo $title ?></title>
  </head>
  <body>

  <div class="row">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNavbar">
      <div class="container">
        <a class="navbar-brand fas fa-user-secret" href="http://localhost/polinemart/"> POLINEMART</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link mr-2" href="http://localhost/polinemart/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mr-2" href="http://localhost/polinemart/kategori">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/polinemart/jual">Jual</a>
              </li>
              <li class="nav-item">
                <a class="nav-link sm mr-sm-2" href="http://localhost/polinemart/keranjang" >
                <i class="fas fa-shopping-cart mr-2 ml-2" ></i>
                <?php $keranjang = $this->cart->total_items() ?><?php echo $keranjang?>
              </a>
                
              </li>
            </ul>
          </div>
          <!-- login -->
          <?php if ($this->session->userdata('role_id')){ ?>
            <a class="btn btn-secondary btn-sm mr-sm-1" href="<?= base_url(); ?>login/logout" role="button">Logout</a>
          <!-- blm login -->
          <?php } else { ?>
          <a class="btn btn-secondary btn-sm mr-sm-1" href="<?= base_url(); ?>login" role="button" >Login</a>
          <a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>registrasi" role="button">Register</a>
          <?php } ?>
        
        </div>
      </nav>
    </div>