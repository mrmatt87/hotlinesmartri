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
            <h5 style="text-align:left ;">Executive Summary</h5>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">2. Action Plan</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.1 Preventive Action </label>
            <div class="col-sm-8 ">
              <textarea id="autoresizing" class="form-control" name="ref_number" rows="14" cols="50"   required><?php echo $data['actionplan_preventiveaction'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">2.2 Curative Action </label>
            <div class="col-sm-8 ">
              <textarea id="autoresizing" class="form-control" name="ref_number" rows="14" cols="50"   required><?php echo $data['actionplan_curativeplan'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Approved by </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['actionplan_approvedby'] ?>"  required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['actionplan_date'] ?>"   required>
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