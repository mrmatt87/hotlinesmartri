<style>
  .bg-biru {
    background-color: #0d72a1;
    color: white;
  }
</style>

<?php

// ----------------------------------------------GRAPH-------------------------------------------------------------
$query = 'SELECT COUNT(*) AS hasil FROM tbl_data';
$total = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where status_final = 0';
$status_ongoing = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where status_final = 1';
$status_closed = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where intervention = "Crop Protection"';
$proteksi = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where intervention = "Trial Request"';
$trial = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where intervention = "Nutrition Deficiency"';
$Nutrition = $this->db->query($query)->row_array();

$query = 'SELECT COUNT(*) AS hasil FROM tbl_data where intervention = "Other"';
$others = $this->db->query($query)->row_array();

?>

<!-- Small boxes (Stat box) -->
<div class="row" style="margin-left:10px ;">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-biru">
      <div class="inner">
        <h3><?php echo $total['hasil'] ?></h3>
        <p>Number of request (Total request)</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-biru">
      <div class="inner">
        <h3><?php echo $status_ongoing['hasil'] ?></h3>
        <p>Number of on going request</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-biru">
      <div class="inner">
        <h3><?php echo $status_closed['hasil'] ?></h3>
        <p>Number osf closed request</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-biru">
      <div class="inner">
        <h3>4.5/5</h3>
        <p>Ratings feedback</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>
  <!-- ./col -->

  <div class="col-sm-6">
    <div class="card">
      <div class="box-body">
        <div id="aaa" style="border-radius: 10px;"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="box-body">
        <div id="bbb" style="border-radius: 10px;"></div>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->

<script src="<?php echo base_url(); ?>assets/highcharts/code/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/code/highcharts-3d.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/code/modules/series-label.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/code/modules/exporting.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/code/modules/export-data.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "scrollY": 550,
      "scrollX": true,
      paging: false,
      // "table-layout":fixed,
    });
  });
</script>

<script>
  Highcharts.chart('aaa', { 
    chart: {
      type: 'column'
    },
    credits: {
      enabled: false
    },
    title: {
      text: 'Type of services'
    },

    xAxis: {
      categories: [
        'Crop Protection',
        'Nutrition Deficiency',
        'Trial Request',
        'Others',
      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Number of Request'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}  </td>' +
        '<td style="padding:0"><b>{point.y} request</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          format: '{point.name} {point.y:.0f}'
        }
      }
    },
    series: [{
      name: '',
      showInLegend: false,
      data: [<?php echo $proteksi['hasil'] ?>, <?php echo $Nutrition['hasil'] ?>, <?php echo $trial['hasil'] ?>, <?php echo $others['hasil'] ?>]

    }, ]
  });

  Highcharts.chart('bbb', {
    chart: {
      type: 'pie',
      options3d: {
        enabled: true,
        alpha: 45,
        beta: 0
      }
    },
    title: {
      text: 'Request by Regions'
    },

    credits: {
      enabled: false
    },
    accessibility: {
      point: {
        valueSuffix: '%'
      }
    },

    tooltip: {
      pointFormat: '<span ></span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
      percentageDecimals: 121
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        depth: 35,
        dataLabels: {
          enabled: true,
          color: '#068f4a',
          format: '<span style="color:#000000">{point.name}</span> <br> <b>Total : {point.y}</b>   ({point.percentage:.0f}%)<br/>'
        }
      }
    },

    series: [{
      type: 'pie',
      name: ' ',
      data: [{
          y: 8,
          name: 'Siak',
          sliced: true,
          selected: true
        },
        ['Lampung', 5],
        ['Kalteng 1', 1],
        ['Kalteng 2', 6],
      ]
    }]
  });
</script>