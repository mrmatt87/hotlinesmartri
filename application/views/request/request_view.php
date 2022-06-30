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
    <div class="card">
      <div class="card-header" style="background-color: #0d72a1; color:white">
        <h5 style="text-align:center ;"> CUSTOMER DATA AND REQUEST</h5>
      </div>
      <div class="card-body">
        <form action="" role="form" id="quickForm" method="post">
          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Ref number</label>
            <div class="col-sm-6 kosong">
              <!-- <input type="text" class="form-control" name="ref_number" value="21DJKA" readonly required> -->
              <input type="text" class="form-control" name="ref_number" value="<?php echo $koderef ?>" readonly required>
            </div>
          </div>

          <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" name="tanggal" readonly hidden required>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Type of service / intervention</label>
            <div class="col-sm-6 kosong">
              <select class="form-control" name="intervention" required>
                <option value="">Select type of service</option>
                <option value="Crop Protection">Crop Protection</option>
                <option value="Nutrition Deficiency">Nutrition Deficiency</option>
                <option value="Trial Request">Trial Request</option>
                <!-- <option value="Others">Others</option> -->
              </select>
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Full Name</label>
            <div class="col-sm-6 kosong">
              <input type="text" class="form-control" name="full_name" placeholder="" required>
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Position</label>
            <div class="col-sm-6 kosong">
              <input type="text" class="form-control" name="position" placeholder="" required>
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Unit</label>
            <div class="col-sm-6 kosong">
              <input type="text" class="form-control" name="unit" placeholder="">
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Company Email</label>
            <div class="col-sm-6 kosong">
              <input type="email" class="form-control" name="company_email" placeholder="">
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Phone Number Unit Requestor</label>
            <div class="col-sm-6 kosong">
              <input type="text" class="form-control" name="phone_requestor" placeholder="">
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Phone Number Unit Head</label>
            <div class="col-sm-6 kosong">
              <input type="text" class="form-control" name="phone_manager" placeholder="">
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Date of Request</label>
            <div class="col-sm-6 kosong">
              <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" name="date_request" placeholder="" required>
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Short Description</label>
            <div class="col-sm-6 kosong">
              <textarea class="form-control" name="description" required></textarea>
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Photo of the current situation</label>
            <div class="col-sm-6 kosong">
              <input type="file" class="form-control" name="userfiles">
            </div>
          </div>

          <div class="form-group row ">
            <label class="col-sm-6 col-form-label">Supporting document (if any)</label>
            <div class="col-sm-6 kosong">
              <input type="file" class="form-control" name="supporting_document">
            </div>
          </div>

          <div class="center">
            <button type="submit" name="simpan" class="btn btn-info btn-block btn-flat" style="background-color: #0d72a1; color:white"> Submit</button>
          </div>

        </form>
      </div>

      <div class="card-footer" style="text-align: center;">
        <b>

        </b>
      </div>
    </div>
  </div>
  <!-- /.login-box -->


</body>

</html>