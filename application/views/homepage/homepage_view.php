<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url(); ?>assets/foto/icon.png" type="image/gif">

  <title>Hotline SMARTRI | Homepage</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-5.5.0/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-4.3.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Body style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/stylearyo.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
</head>

<style>
  #color-gradient {
    background-image: linear-gradient(#9dd0ff, #0d72a1);
  }

  .form-row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 20px;
  }

  .col-form-label {
    padding-top: calc(1px);
    padding-bottom: calc(1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;
  }

  label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 400;
  }

  .btn-cyan {
    background-color: #0d72a1;
    color: white;
  }

  .content-wrapper {
    background-color: white;
    /* background-image: linear-gradient(#9dd0ff, #0d72a1); */
  }
</style>

<body id="color-gradient">

  <div class="form-row2">
    <div class="col-lg-3">
    </div>

    <div class="col-lg-6">
      <center><img src="<?php echo base_url(); ?>assets/foto/fi-logo.PNG" width="105" height="auto">
        <h5 style="font-weight:bold ; text-align:center;">Welcome to<br>SMARTRI Hotline Center</h5>
        <br>
        <div class="card  card-outline" style="background-color: #0d72a1 ;border-radius:7px">
          <div class="card-body">
            <h5 style="font-weight:bold ; color:white;">Create your<br> field intervention request</h5>
            <a href="request" class="btn btn-default"><i class="fa fa-edit"> Create request</i></a>
          </div>
        </div>
        <div class="card  card-outline" style="background-color: #0d72a1 ;border-radius:7px">
          <div class="card-body">
            <h5 style="font-weight:bold ; color:white;">Track your <br> field intervention request</h5>
              <!-- <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p> -->
              <a href="tracking_user"  class="btn btn-default"><i class="fa fa-search"> Trace</i></a>
          </div>
        </div>
    </div>
  </div>

</body>
</html>