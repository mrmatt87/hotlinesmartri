

<style>
  .form-row2 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 10px;
    margin-left: 10px;
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
              <div class="center" style="padding-left:100px ; padding-right:100px;">
                <button type="button" id="btn-filter" class="btn btn-info btn-block btn-flat" style="background-color: #0d72a1; color:white"><span class="fa fa-search"></span> Trace</button>
              </div>
            </div>
            <div class="form-group col-sm-4">
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body" id="dt-content" style="display:none;">
          <table id="tabelsubmenu" class="table table-bordered table-striped table-hover">

              <thead>
                <tr style="background-color: #0D72A1 ; color:white;">
                <th width="10%" >Ref Number</th>
                  <th width="10%" >Type of services/intervention</th>
                  <th width="10%">Full Name</th>
                  <th width="20%">Description</th>
                  <th width="1%">Detail</th>
                  <th width="1%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
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
        "url": "<?php echo site_url('tracking/ajax_list') ?>",
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