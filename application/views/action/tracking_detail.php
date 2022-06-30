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
              <textarea  class="form-control" name="ref_number"  rows="12" cols="50"  readonly required><?php echo $data['description'] ?></textarea>
            </div>
          </div>
          <div class="judul" style="background-color: #0d72a1; color:white">
            <h5 style="text-align:left ;">SMARTRI Response</h5>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Request receive by</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['received_by'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Name of staff</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['receive_name'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['receive_date'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Services forward to</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['forward_to'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Dept Head</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['forward_depthead'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['forward_date'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Response done by</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['responsedone_by'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Field visit done by</label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['fieldvisitdone_by'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Name of staff </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['fieldvisitdone_staff'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['fieldvisitdone_staff'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Recommendation made by </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['recommendation_by'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Name of staff </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['recommendation_staff'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['recommendation_date'] ?>" readonly required>
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
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_date'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_location'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_PIC'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_method'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Description of the issue </label>
            <div class="col-sm-8 ">
            <textarea  class="form-control" name="ref_number"  rows="12" cols="50"  readonly required><?php echo $data['diagnostic_issue'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of type of impact </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_estimationimpact'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estimation of what might happen if nothing done </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['diagnostic_nothingdone'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Preventive Action </label>
            <div class="col-sm-8 ">
            <textarea  class="form-control" name="ref_number"  rows="12" cols="50"  readonly required><?php echo $data['actionplan_preventiveaction'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Curative Action </label>
            <div class="col-sm-8 ">
            <textarea  class="form-control" name="ref_number"  rows="12" cols="50"  readonly required><?php echo $data['actionplan_curativeplan'] ?></textarea>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Approved by </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['actionplan_approvedby'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['actionplan_date'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Aspect material, equipment, manpower </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['readiness_equipment'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Declaration by requestor </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['readiness_declaration'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Obstacles (if any) </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['readiness_obstacles'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Method </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_method'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Location </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_location'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Research program required </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_researchprogram'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Short description of request research (optional) </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">SMARTRI PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Frequency </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Estate staff </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_smartripic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Frequency </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_estatefrequency'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Other PIC </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_otherpic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_otherpic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Frequency </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_otherpic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Training proposed to HR </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_otherpic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Communication of issue to MCAR </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['followup_otherpic'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Date </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_date'] ?>" readonly required>
            </div>
          </div>
          <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Realization on recommendation </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_date'] ?>" readonly required>
            </div>
            </div>
          <!-- <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Feedback from Estate/Client  </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_feedbackestatestars'] ?>" readonly required>
            </div>
          </div> -->
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Stars </label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_feedbackestatestars'] ?>" readonly required>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Comments </label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_feedbackestatestars'] ?>" readonly required>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Feedback from PIC/SMARTRI</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['evaluation_feedbacksmartri'] ?>" readonly required>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Status</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['verification_status'] ?>" readonly required>
              </div>
            </div>
            <!-- <div class="form-row2 ">
            <label class="col-sm-4 col-form-label">Verified By </label>
            <div class="col-sm-8 ">
              <input type="text" class="form-control" name="ref_number" value="<?php echo $data[''] ?>" readonly required>
            </div>
          </div> -->
            <!-- <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Estate Manager</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data[''] ?>" readonly required>
              </div>
            </div> -->
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Date</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['verification_emdate'] ?>" readonly required>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Date</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['verification_smartridate'] ?>" readonly required>
              </div>
            </div>
            <!-- <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Remark</label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data[''] ?>" readonly required>
              </div>
            </div> -->
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Closing </label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['verification_closing'] ?>" readonly required>
              </div>
            </div>
            <div class="form-row2 ">
              <label class="col-sm-4 col-form-label">Date </label>
              <div class="col-sm-8 ">
                <input type="text" class="form-control" name="ref_number" value="<?php echo $data['verification_closing'] ?>" readonly required>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

</section>