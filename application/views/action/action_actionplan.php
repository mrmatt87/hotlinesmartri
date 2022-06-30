<head>
  <title>Hotline SMARTRI | Action Plan</title>

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
</style>

<?php
echo form_open_multipart('action/actionplan_save', 'role="form" class="form-horizontal"');
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
            <h5 style="text-align:left ;">2. Action Plan</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.1 Preventive Action </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="actionplan_preventiveaction" required="required" rows="5"> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.2 Curative Action </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="actionplan_curativeplan" rows="5" required="required"> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Approved by</label>
            <div class="col-sm-8 ">
              <select id="department" name="actionplan_approvedby" class="form-control select2" required>
                <option value="">Select Department</option>
              </select>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-2 ">
            <input type="date" class="form-control" value="<?php echo date("Y-m-d") ?>" name="actionplan_date" readonly required>

            </div>
          </div>
          <div class="form-row2 col-sm-4 ">
            <button type="submit" name="simpan" class="btn" style=" background-color:#0d72a1;color:white">Submit</button>
            <!-- <button type="submit" name="simpan" class="btn" style="margin-left:10px; background-color:#0d72a1;color:white">No</button> -->
          </div>
        </div>
      </div>
    </div>

</section>


<script type="text/javascript">
  textarea = document.querySelector("#autoresizing");
  textarea.addEventListener('input', autoResize, false);

  function autoResize() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
  }
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $("#department").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_dept',
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

  // Kabupaten
  $("#department").change(function() {
    var id_dept = $("#department").val();
    $("#section").select2({
      ajax: {
        url: '<?= base_url() ?>action/get_sect/' + id_dept,
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

  // Kecamatan
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
</script>