<head>

<title>Hotline SMARTRI | Diagnostic</title>

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
echo form_open_multipart('action/diagnostic_save', 'role="form" class="form-horizontal"');
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
            <h5 style="text-align:left ;">Executive Summary</h5>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">1. Diagnostic</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-2 ">
              <input type="date" class="form-control" name="diagnostic_date" required>
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['ref_number'] ?>" readonly hidden required>

            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="diagnostic_location" required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="diagnostic_pic" value="<?php echo $data['responsedone_pic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">

              <select class="form-control" name="diagnostic_method" required>
                <option value="">Field Operation </option>
                <option value="Agronomy Dept">Census</option>
                <option value="Plant Breeding Dept">Sampling</option>
                <option value="Crop Protection Dept">Other</option>
                <!-- <option value="Others">Others</option> -->
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Description of the issue </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="diagnostic_issue" rows="12" cols="50" required> </textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of type of impact </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control" rows="6" cols="50" name="diagnostic_estimationimpact" required><?php echo $data['diagnostic_estimationimpact'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of what might happen if nothing done </label>
            <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control" rows="6" cols="50" name="diagnostic_nothingdone" required><?php echo $data['diagnostic_nothingdone'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 col-sm-4 ">
            <button type="submit" name="simpan" class="btn" style=" background-color:#0d72a1;color:white">Submit</button>
          </div>
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