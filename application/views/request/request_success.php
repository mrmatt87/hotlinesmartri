<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url(); ?>assets/foto/icon.png" type="image/gif">

  <title>Hotline SMARTRI | Request</title>
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

  .content-wrapper {
    background-image: linear-gradient(#9dd0ff, #0d72a1);
    /* background-color: white; */
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

  .cardd {
    padding: 10px;
    margin-top: 120px;
    color: #fff;
    /* background-color: #0d72a1; */
  }
</style>


<body id="color-gradient">
  <div class="form-row2">
    <div class="form-group col-sm-4"></div>

    <!-- /.login-logo -->
    <?php
    echo form_open_multipart('request/add', 'role="form" class="form-horizontal"');
    ?>

    <!-- <center><img src="<?php echo base_url(); ?>assets/foto/fi-logo.PNG" width="105" height="auto"></center> -->
    <!-- <br><br> -->

    <div class="cardd">
      <h6 style="text-align:center ;">Thank you for reaching out to us! <br>
        Your request has been received and is being reviewed by our staff. <br>
        Our staff will respond to you within 3 days. </h6>
      <br>
      <h6 style="text-align: center;"><u>Please check your whatsapp for progress update.</u></h6>
      <!-- <h4 style="text-align: center;">SMARTRI HOTLINE CENTER</h4> -->
    </div>
  </div>
  <!-- /.login-box -->


</body>

</html>