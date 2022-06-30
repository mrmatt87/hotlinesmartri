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
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['intervention'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Full name</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['full_name'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Position</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['position'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Unit</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['unit'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Company email</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['company_email'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Phone number requestor</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['phone_requestor'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Phone number unit head</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['phone_manager'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date of request</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['date_request'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Short description</label>
            <div class="col-sm-8 ">
              <textarea id="autoresizing" class="form-control" name="ref_number" rows="10" cols="50" readonly required><?php echo $data['description'] ?></textarea>
            </div>
          </div>
          <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;">SMARTRI Response</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Received by</label>
            <div class="col-sm-8 kosong">
              <input type="text" class="form-control" name="ref_number" value="Admin" readonly required>
            </div>
          </div>

          <!-- <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Name of staff</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['receive_name'] ?>" readonly required>
            </div>
          </div> -->

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" value="<?php echo $data['actionplan_date'] ?>" class="form-control" name="receive_date" required>
            </div>
          </div>



          <div class="form-row2 ">

            <label class="col-sm-4 col-form-label">Services forward to</label>
            <div class="col-sm-8 kosong">
              <select class="form-control" name="forward_to" required>
                <option value="">Select Department </option>
                <option value="Agronomy Dept">Agronomy Dept</option>
                <option value="Plant Breeding Dept">Plant Breeding Dept</option>
                <option value="Crop Protection Dept">Crop Protection Dept</option>
                <option value="Sustainability Research Dept">Sustainability Research Dept</option>
                <option value="Data Intelligence and Analytics Dept">Data Intelligence and Analytics Dept</option>
                <option value="Field Operational and Extension Services Dept">Field Operational and Extension Services Dept</option>
                <!-- <option value="Others">Others</option> -->
              </select>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" value="<?php echo $data['actionplan_date'] ?>" class="form-control" name="receive_date" required>
            </div>
          </div>

        

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Respone done by</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="Pest & Entomology Section" required>
            </div>
          </div>

          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-2 ">
              <input type="date" value="<?php echo $data['actionplan_date'] ?>" class="form-control" name="receive_date" required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Assigned PIC</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['receive_name'] ?>" required>
            </div>
          </div>
         
          <div class="form-row2 col-sm-4 ">
            <button type="submit" name="simpan" class="btn" style=" color:white; background-color:#0d72a1"> Forward</button>
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