<style>
  .form-row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    margin-left: 13px;
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
            <h5 style="text-align:left ;">4. Follow Up </h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">
              <select class="form-control" name="forward_to" required>
                <option value="">Field Visit </option>
                <option value="Agronomy Dept">Memorandum</option>
                <option value="Plant Breeding Dept">Telephone</option>
                <option value="Crop Protection Dept">Other</option>

                <!-- <option value="Others">Others</option> -->
              </select>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_location'] ?>"   required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Research program required </label>
            <div class="col-sm-8 ">
              <select class="form-control" name="forward_to" required>
                <option value="">Select </option>
                <option value="">Yes </option>
                <option value="Agronomy Dept">No</option>
              </select>
            </div>
          </div>

          <div class="judul-sub" style="color:white">
            <h5 style="text-align:left ;">5. Evaluation </h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Realisasi rekomendasi </label>
            <div class="col-sm-8 ">
              <select class="form-control" name="forward_to" required>
                <option value="">Belum </option>
                <option value="">Sebagian </option>
                <option value="Agronomy Dept">Penuh</option>
              </select>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Feedback Pelanggan</label>
            <div class="col-sm-8 ">
              <textarea class="form-control" name="ref_number"    required>Semua permintaan telah dilaksanakan dan telah sesuai</textarea>
            </div>
          </div>
          <div class="form-row2 col-sm-4 ">
              <button type="submit" name="simpan" class="btn" style=" background-color:#0d72a1;color:white">Submit</button>
              <!-- <button type="submit" name="simpan" class="btn" style="margin-left:10px; background-color:#0d72a1;color:white">No</button> -->
            </div>
          <!-- <div class="form-row2 ">
            <label class="col-sm-4 col-form-label"> </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_location'] ?>"   required>
            </div>
          </div>
        </div> -->
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