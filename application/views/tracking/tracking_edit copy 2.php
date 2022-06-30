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
            <h5 style="text-align:left ;">1. Diagnostic</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="date" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_date'] ?>" required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_location'] ?>"   required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_PIC'] ?>"   required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">
              <label class="col-sm-4 col-form-label">Services forward to</label>
              <div class="col-sm-8 kosong">
                <select class="form-control" name="forward_to" required>
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
                <textarea class="form-control" name="ref_number" rows="12" cols="50" required><?php echo $data['diagnostic_issue'] ?></textarea>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Estimation of type of impact </label>
              <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control" rows="6" cols="50" name="ref_number"     required><?php echo $data['diagnostic_estimationimpact'] ?></textarea>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Estimation of what might happen if nothing done </label>
              <div class="col-sm-8 ">
              <textarea class="form-control" class="form-control"  rows="6" cols="50" name="ref_number"   required><?php echo $data['diagnostic_nothingdone'] ?></textarea>
              </div>
            </div>
            <div class="form-row2 col-sm-4 ">
              <button type="submit" name="simpan" class="btn" style=" background-color:#0d72a1;color:white">Submit</button>
              <!-- <button type="submit" name="simpan" class="btn" style="margin-left:10px; background-color:#0d72a1;color:white">No</button> -->
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