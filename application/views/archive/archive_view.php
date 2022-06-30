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

          <!-- /.card-header -->
          <div class="card-body">
            <table id="tabelsubmenu" class="table table-bordered table-striped table-hover">
              <thead>
                <tr style="background-color: #0D72A1 ; color:white;">
                  <th width="1%">No.</th>
                  <th width="8%">Ref Number</th>
                  <th width="10%">Type of services/intervention</th>
                  <th width="10%">Full Name</th>
                  <th width="20%" style="text-align: left ;">Description</th>
                  <th width="1%">Detail</th>
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
    table = $("#tabelsubmenu").DataTable({
      // "paging": false,
      // "info": false,
      // "searching": false,
      "scrollY": true,
      "scrollX": true,
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
        "url": "<?php echo site_url('archive/ajax_list') ?>",
        "type": "POST",
        // "data": function(data) {
        //   data.ref_number = $('#ref_number').val();
        // }
      },

      "columnDefs": [{
          "targets": [1, 3, 5],
          "className": 'dt-body-left'
        },
        {
          "targets": [0, 2],
          "className": 'dt-body-center'
        }
      ],

    });



  });
</script>