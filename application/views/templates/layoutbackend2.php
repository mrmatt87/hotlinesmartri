<!-- header -->
<?php
$this->load->view('templates/header2')

?>
<!-- end header -->

<!-- menu -->
<?php
$this->load->view('templates/sidebar2');
?>
<!-- end menu -->


<!-- Content Header (Page header) -->
<section   style="opacity: 0.8; ">
  <div class="container-fluid">
    <div class="row mb-2">


    </div>
  </div>
</section>
<!-- page-wrapper -->

<!-- Main content -->
<!-- <section class="content"> -->
<div class="container-fluid">
  <?php echo $contents; ?>
</div>
<!-- </section> -->
<!-- /# end page-wrapper -->
<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- /#wrapper -->
<!-- footer -->
<?php

$apl = $this->db->get("aplikasi")->row();
?>
<!-- <footer class="main-footer navbar-default">
  <strong>Copyright &copy; <?php echo $apl->tahun; ?> <a href="#"><?php echo $apl->nama_owner; ?></a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> <?php echo $apl->versi; ?>
  </div>
</footer> -->
<!-- end footer -->

</body>

</html>