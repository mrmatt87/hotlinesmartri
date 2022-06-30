<style>
  .form-row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    margin-left: 10px;
  }

  .card-body {
    margin-right: -5px;
    margin-left: -5px;
  }

  body {
    margin-top: 20px;
  }

  body {
    background-color: #eee;
  }

  .mt-70 {
    margin-top: 70px;
  }

  .mb-70 {
    margin-bottom: 70px;
  }

  .card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s;
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: .25rem;
  }

  .card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
  }

  .vertical-timeline {
    width: 100%;
    position: relative;
    padding: 1.5rem 0 1rem;
  }

  .vertical-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 17px;
    height: 100%;
    width: 4px;
    background: #e9ecef;
    border-radius: .25rem;
  }

  .vertical-timeline-element {
    position: relative;
    margin: 0 0 1rem;
  }

  .vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
    visibility: visible;
    animation: cd-bounce-1 .8s;
  }

  .vertical-timeline-element-icon {
    position: absolute;
    top: 0;
    left: 10px;
  }

  .vertical-timeline-element-icon .badge-dot-xl {
    box-shadow: 0 0 0 5px #fff;
  }

  .badge-dot-xl {
    width: 18px;
    height: 18px;
    position: relative;
  }

  .badge:empty {
    display: none;
  }


  .badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;
    background: #fff;
  }

  .vertical-timeline-element-content {
    position: relative;
    margin-left: 40px;
    font-size: .8rem;
  }

  .vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold;
  }

  .vertical-timeline-element-content .vertical-timeline-element-date {
    display: block;
    position: absolute;
    left: -90px;
    top: 0;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap;
  }

  .vertical-timeline-element-content:after {
    content: "";
    display: table;
    clear: both;
  }
</style>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-light">
            <h3 class="card-title"><i class="fa fa-list text-blue"></i> Tracking</h3>

          </div>
          <div class="form-row2">
            <div class="form-group col-sm-4"></div>
            <div class="form-group col-sm-4">
              <div class="center" style="padding-top:20px;padding-bottom:10px">
                <h5 style="text-align:center;">Insert your ref number</h5>
                <input class="form-control" name="ref_number" id="ref_number" />
              </div>
              <div class="center" style="padding-left:80px ; padding-right:80px;">
                <button type="button" id="btn-filter" class="btn btn-info btn-block btn-flat" style="background-color: #0d72a1; color:white"><span class="fa fa-search"></span> Trace</button>
              </div>
            </div>
            <div class="form-group col-sm-4">
            </div>
          </div>

          <!-- /.card-header -->
          <div id="dt-content" style="display:none;">

          <!-- <div class="row d-flex justify-content-center mt-10 mb-10">

            <div class="col-md-6">

              <div class="main-card mb-3 card">
                <div class="card-body">
                  <h5 class="card-title"> Timeline</h5>
                  <p></p><br>
                  <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">


                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title">FI request submitted</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title">Review the request</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title">Assigned the PIC</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title">Diagnostic</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Action Plan</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Readiness</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Follow Up</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Evaluation</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Verification</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Report</h4>
                        </div>
                      </div>
                    </div>

                    <div class="vertical-timeline-item vertical-timeline-element">
                      <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                          <h4 class="timeline-title ">Closed</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div> -->

          <table id="tabelsubmenu" class="table table-bordered table-striped table-hover">

            <thead>
              <tr style="background-color: #0D72A1 ; color:white;">
                <th width="10%">Ref Number</th>
                <th width="10%">Type of services/intervention</th>
                <th width="10%">Full Name</th>
                <th width="20%">Description</th>
                <th width="1%">Detail</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <br>
          <br>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


<script type="text/javascript">
  var table;

  $(document).ready(function() {

    //datatables
    table = $("#tabelsubmenu").css('width', '100%').DataTable({
      "paging": false,
      "info": false,
      "searching": false,
      // "scrollY": true,
      "scrollX": true,
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?php echo site_url('tracking_user/ajax_list') ?>",
        "type": "POST",
        "data": function(data) {
          data.ref_number = $('#ref_number').val();
        }
      },

      //Set column definition initialisation properties.
      "columnDefs": [{
        "targets": [0], //first column / numbering column
        "orderable": false, //set not orderable
      }, ],

    });

    $('#btn-filter').click(function() { //button filter event click
      $('#dt-content').show();

      table.ajax.reload();
      //just reload table
    });
    $('#btn-reset').click(function() { //button reset event click
      $('#form-filter')[0].reset();
      table.ajax.reload(); //just reload table
    });

  });
</script>