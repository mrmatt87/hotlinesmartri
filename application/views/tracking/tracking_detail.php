<style>
  .form-row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    margin-left: 10px;
    margin-top: 10px;
  }

  .judul {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 17px;
    border-radius: 10px;
    margin-top: 15px;
  }

  .judul-sub {
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 17px;
    border-radius: 10px;
    margin-top: 15px;
    margin-left: 15px;
    background-color: #43998c;
  }

  #autoresizing {
    display: block;
    overflow: hidden;
    resize: none;
  }

  .form-control[readonly] {
    background-color: #fff8f8;
    opacity: 1;
  }
</style>

<!-- Main content -->
<section class="content">
  <div class="form-row2">
    <!-- <div class="form-group col-sm-3"></div> -->
    <div class="form-group col-sm-12">
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
         
        <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;"> Customer data and request</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Ref number</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['ref_number'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Type of service / intervention</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['intervention'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Full name</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['full_name'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Position</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['position'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Unit</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['unit'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Company email</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['company_email'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Phone number requestor</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['phone_requestor'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Phone number unit head</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['phone_manager'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date of request</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['date_request'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Short description</label>
            <div class="col-sm-8 ">
              <textarea id="autoresizing" class="form-control" rows="5" cols="50" readonly required><?php echo $data['description'] ?></textarea>
            </div>
          </div>

          <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;">Executive Summary</h5>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">1. Diagnostic</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-2 ">

              <input type="text" class="form-control" value="<?php echo $data['diagnostic_date'] ?>" readonly>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['diagnostic_location'] ?>" readonly>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['diagnostic_pic'] ?>" readonly>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">

              <input type="text" class="form-control" value="<?php echo $data['diagnostic_method'] ?>" readonly>

            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Description of the issue </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="diagnostic_issue" rows="6" cols="50" readonly><?php echo $data['diagnostic_method'] ?> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of type of impact </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control" rows="6" cols="50" name="diagnostic_estimationimpact" readonly><?php echo $data['diagnostic_estimationimpact'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of what might happen if nothing done </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control" rows="6" cols="50" name="diagnostic_nothingdone" readonly><?php echo $data['diagnostic_nothingdone'] ?></textarea>
            </div>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">2. Action Plan</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.1 Preventive Action </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" readonly rows="5"><?php echo $data['actionplan_preventiveaction'] ?> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.2 Curative Action </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="actionplan_curativeplan" rows="5" readonly><?php echo $data['actionplan_curativeplan'] ?> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Approved by</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['actionplan_approvedby'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-2 ">
              <input type="text" class="form-control" value="<?php echo $data['actionplan_date'] ?>" readonly required>
            </div>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">3. Readiness </h5>
          </div>


          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Obstacle </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" readonly rows="5"> <?php echo $data['readiness_obstacles'] ?></textarea>
            </div>
          </div>


          <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;">Executive Summary</h5>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">4. Follow Up </h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['followup_method'] ?>" readonly required>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['followup_location'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Research program required </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['followup_researchprogram'] ?>" readonly required>

            </div>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">5. Evaluation </h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Realization on recommendation </label>
            <div class="col-sm-8 ">

              <input type="text" class="form-control" value="<?php echo $data['evaluation_realization'] ?>" readonly>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Feedback From Estate or Client (Comments)</label>
            <div class="col-sm-8 ">
              <textarea class="form-control" rows="5" readonly><?php echo $data['evaluation_feedbackestatecomments'] ?> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-2 ">
              <input type="text" class="form-control" value="<?php echo $data['evaluation_date'] ?>" readonly>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Feedback From SMARTRI</label>
            <div class="col-sm-8 ">
              <textarea class="form-control" rows="5" value="<?php echo $data['evaluation_feedbacksmartri'] ?>" readonly> </textarea>
            </div>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">6. Verification </h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Status</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="verification_emdate" value="<?php echo $data['verification_status'] ?>" readonly required>

            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Verified by Estate Manager</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['verification_emdate'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Remarks</label>
            <div class="col-sm-8 ">
              <textarea class="form-control" readonly> <?php echo $data['verificationsmartri_remark'] ?></textarea>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Verified by SMARTRI</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['verification_smartridate'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Closing</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" value="<?php echo $data['verification_closing'] ?>" readonly required>

            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Closing date</label>
            <div class="col-sm-8 ">
            <input type="text" class="form-control" value="<?php echo $data['verification_closingdate'] ?>" readonly required>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script type="text/javascript">
  $('#autoresizing').on('input', function() {
    this.style.height = 'auto';

    this.style.height =
      (this.scrollHeight) + 'px';
  });
</script>