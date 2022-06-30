<head>

  <title>Hotline SMARTRI | Response Done</title>

</head>

<style>
  .select2 {
    width: 100% !important;
    height: 40px;
    vertical-align: middle;
  }

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

  .select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 41px;
    user-select: none;
    -webkit-user-select: none;
  }

  .form-control:disabled,
  .form-control[readonly] {
    background-color: #eeeeee;
    opacity: 1;

  }

  .select2-container--default .select2-selection--single {
    border: 1px solid #ced4da;
    padding: .46875rem .25rem;
    height: calc(2.25rem + 2px);
}
</style>

<?php
echo form_open_multipart('action/responsedone_save', 'role="form" class="form-horizontal"');
?>

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
            <label class="col-sm-3 col-form-label">Ref number</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['ref_number'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Type of service / intervention</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['intervention'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Full name</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['full_name'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Position</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['position'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Unit</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['unit'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Company email</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['company_email'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Phone number requestor</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['phone_requestor'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Phone number unit head</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['phone_manager'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date of request</label>
            <div class="col-sm-9 ">
              <input type="text" class="form-control" value="<?php echo $data['date_request'] ?>" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Short description</label>
            <div class="col-sm-9 ">
              <textarea id="autoresizing" class="form-control" rows="10" cols="50" readonly required><?php echo $data['description'] ?></textarea>
            </div>
          </div>

          <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;">SMARTRI Response</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Received by</label>
            <div class="col-sm-9 kosong">
              <input type="text" class="form-control" name="received_by" value="Admin" readonly required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="text" class="form-control" value="<?php echo $data['received_date'] ?>" readonly>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Services forward to</label>
            <div class="col-sm-9 ">
              <input type="text" value="<?php echo $data['forward_depthead'] ?>" class="form-control" readonly>

            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="text" class="form-control" value="<?php echo $data['forward_date'] ?>" readonly>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Response (PIC) done by</label>
            <div class="col-sm-9 ">
              <select id="section" name="responsedone_section" class="form-control select2">
                <option value="">Select Section</option>
              </select>
            </div>
          </div>


          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Name off staff</label>
            <div class="col-sm-9 ">
              <select id="pic" name="responsedone_pic" class="form-control select2">
                <option value="">Select PIC</option>
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" class="form-control" name="responsedone_date" required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Field visit done by</label>
            <div class="col-sm-9 ">
              <select id="section2" name="fieldvisitdone_section" class="form-control select2">
                <option value="">Select Section</option>
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Name of staff</label>
            <div class="col-sm-9 ">
              <select id="staff" name="fieldvisitdone_staff" class="form-control select2">
                <option value="">Select Staff</option>
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" class="form-control" name="fieldvisitdone_date" required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Recommendation made by</label>
            <div class="col-sm-9 ">
              <select id="section3" name="recommendation_section" class="form-control select2">
                <option value="">Select Section</option>
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Name of staff</label>
            <div class="col-sm-9 ">
              <select id="staff2" name="recommendation_staff" class="form-control select2">
                <option value="">Select Staff</option>
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-3 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" class="form-control" name="recommendation_date" required>
            </div>
          </div>

          <div class="form-row2 col-sm-3 ">
            <button type="submit" name="simpan" class="btn" style=" color:white; background-color:#0d72a1">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>


<script type="text/javascript">
  $(document).ready(function() {
    $("#section").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_sect',
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });


  $("#section").change(function() {
    var id_sect = $("#section").val();
    $("#pic").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_pic/' + id_sect,
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });


  $(document).ready(function() {
    $("#section2").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_sectdua',
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });

  $(document).ready(function() {
    $("#section3").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_sectdua',
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });




  $(document).ready(function() {
    $("#staff").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_staff',
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });

  $(document).ready(function() {
    $("#staff2").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_staff',
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function(params) {
          return {
            searchTerm: params.term
          };
        },
        processResults: function(response) {
          return {
            results: response
          };
        },
        cache: true
      }
    });
  });
</script>