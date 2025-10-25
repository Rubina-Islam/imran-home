<?php 
    // include('config/auth.php');
    include('includes/header.php');
    include('includes/topbar.php');
    include('includes/sidebar.php');

	$data = [];
	$statuses = ['Active', 'Inactive', 'Closed'];
  $data[0] = ['name' => 'Active','y' => 2];
    $data[1] = ['name' => 'Inactive','y' => 25];
      $data[2] = ['name' => 'Close','y' => 29];

    $due_product = [200, 300, 400, 500];

    $count = 2;
    $month1 = 5;
    $year1 = 2024;
    $year2 = 2025;
    $total_bill = [5000, 6000, 7000, 8000, 5000, 6000, 7000, 8000, 5000, 6000, 7000, 8000];
    $due_bill = [1000, 500, 1500, 2000];
    $income = [3000, 3000, 3000, 3000];
    $expense = [2000, 3000, 4000, 5000];

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Active Client</p>
              </div>
              <div class="icon">
                <i class="fas fa-wheelchair"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Active Staff</p>
              </div>
              <div class="icon">
                <i class="fas fa-id-card"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total Product</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Total User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row All Data-->

        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-date">
                  Select Date <i class="fas fa-calendar-alt"></i></button>
            </div>
          </div>
        </div>
        <!-- /.row Date-->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">10</span>

              <div class="info-box-content">
                <span class="info-box-text">Staff Entry</span>
                <span class="info-box-number">
                  <a href="#" style="float: right;">More <i class="fas fa-arrow-circle-right"></i></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1">10</span>

              <div class="info-box-content">
                <span class="info-box-text">New Client</span>
                <span class="info-box-number">
                  <a href="#" style="float: right;">More <i class="fas fa-arrow-circle-right"></i></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1">10</span>

              <div class="info-box-content">
                <span class="info-box-text">Close Client</span>
                <span class="info-box-number">
                  <a href="#" style="float: right;">More <i class="fas fa-arrow-circle-right"></i></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1">10</span>

              <div class="info-box-content">
                <span class="info-box-text">Product Order</span>
                <span class="info-box-number">
                  <a href="#" style="float: right;">More <i class="fas fa-arrow-circle-right"></i></a>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

        </div>
        <!-- /.row Date Data-->

        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-month">
                  Select Month <i class="fas fa-calendar-alt"></i></button>
            </div>
          </div>
        </div>
        <!-- /.row Month-->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$35,210.43</h5>
                      <span class="description-text">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$10,390.90</h5>
                      <span class="description-text">TOTAL Purchase</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">Total Expense</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$24,813.53</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row Month Data Numbers-->

        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Client Bill</span>
                <span class="info-box-number">
                  10
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Product Sell</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Product Rent</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Product Refill</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Staff Payment</span>
                <span class="info-box-number">
                  10
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Expense</span>
                <span class="info-box-number">
                  10
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row Month Data Cards-->

        <div class="row">
          <div class="col-lg-6">
            <figure class="highcharts-figure">
                <div id="ContainerPie" style="height: 300px;"></div>                           
            </figure>
          </div>
          <!-- /.Month Data Pie Chart-->

          <div class="col-lg-6">
            <figure class="highcharts-figure">
                <div id="ContainerDonut" style="height: 300px;"></div>                           
            </figure>
          </div>
        </div>
        <!-- /.row Month Data Charts-->





        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-year">
                  Select Year <i class="fas fa-calendar-alt"></i></button>
            </div>
          </div>
        </div>
        <!-- /.row Year-->
      <div class="row">
        <div class="col-lg-12">
          <div class="position-relative mb-4">
            <!-- <canvas id="ContainerBar" height="200"></canvas> -->
          
            <figure class="highcharts-figure" style="height: 400px;">
							<div id="ContainerBar"></div>					
						</figure>
          </div>
        </div>
      </div>
      <!-- /.row Year Chart-->
        


      </div><!-- /.container-fluid -->


      <div class="modal fade" id="modal-date">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Date</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-inline ml-3">
              <div class="modal-body">   
                <div class="input-group input-group-bg">
                  <input class="form-control" type="date" placeholder="Select Date" aria-label="Date" name="date">
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.date modal -->
       
      <div class="modal fade" id="modal-month">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Month</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-inline ml-3">
              <div class="modal-body">   
                <div class="input-group input-group-bg">
                  <input class="form-control" type="month" placeholder="Select Month" aria-label="Month" name="month">
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.month modal -->

      <div class="modal fade" id="modal-year">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Select Year</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-inline ml-4">
              <div class="modal-body">   
                <div class="input-group input-group-bg">
                  <input class="form-control" type="year" placeholder="Select Year" aria-label="Year" name="year">
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- / Year.modal -->

    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong> Gulshan Catering.com &copy; Developed by <a href="http://adminlte.io">Rubina Islam</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
</div>
<!-- ./wrapper -->

<?php include('includes/script.php');?>
<script type="text/javascript">

    var graphData = <?= json_encode($data) ?>;
    var totalClient = <?= json_encode($count) ?>;
    var monthName = <?= json_encode($month1) ?>;
    var yearName = <?= json_encode($year1) ?>;



    var year = <?= json_encode($year2) ?>;

    var total_bill_data = <?= json_encode($total_bill) ?>;
    var due_product_data = <?= json_encode($due_product) ?>;
    var due_bill_data = <?= json_encode($due_bill) ?>;
    var incomeData = <?= json_encode($income) ?>;
    var expenseData = <?= json_encode($expense) ?>;

    Highcharts.chart('ContainerBar', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Income Expense Ratio',
            style: {
                color: 'red',
                fontSize: '15px'
            },
        align: 'center'
    },
    subtitle: {
        text:
            'Year ' + year,
            style: {
                color: 'black',
                fontSize: '11px'
            },
        align: 'center'
        
    },
    xAxis: {
        categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        crosshair: true,
        accessibility: {
            description: 'Month'
        },
        labels: {
            style: {
                fontSize: '12px'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cash Flow',
            style: {
                color: 'red',
                fontSize: '12px'
            }
        },
        labels: {
            style: {
                color: 'black',
                fontSize: '13px'
            }
        }
    },
    tooltip: {
        valueSuffix: ' (Tk)',
        style: {
            fontSize: '15px'
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Total Billings',
            data: total_bill_data
        },
        {
            name: 'Expense',
            data: expenseData
        },
        {
            name: 'Income',
            data: incomeData
        },         
        {
            name: 'Client Due',
            data: due_bill_data
        },         
        {
            name: 'Product Due',
            data: due_product_data
        }
    ]
});


Highcharts.chart('ContainerPie', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Client Status Ratio',
    },
    tooltip: {
        valueSuffix: ' Client' ,
            style: {
                    fontSize: '13px'
                }
    },
    subtitle: {
        text: 'Total Client: ( ' + totalClient +' ) ' + monthName +' '+ yearName,
            style: {
                fontSize: '12px'
            },
    }, 
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 10,
                style: {
                    fontSize: '10px'
                }

            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.0f}%',
                style: {
                    fontSize: '15px',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Status',
            colorByPoint: true,
            data: graphData
        }
    ]

});



Highcharts.chart('ContainerDonut', {
    chart: {
        type: 'pie',
        custom: {},
        events: {
            render() {
                const chart = this,
                    series = chart.series[0];
                let customLabel = chart.options.chart.custom.label;

                if (!customLabel) {
                    customLabel = chart.options.chart.custom.label =
                        chart.renderer.label(
                            'Total<br/>' + 5000
                        )
                            .css({
                                color:
                                    'var(--highcharts-neutral-color-100, #000)',
                                textAnchor: 'middle'
                            })
                            .add();
                }

                const x = series.center[0] + chart.plotLeft,
                    y = series.center[1] + chart.plotTop -
                    (customLabel.attr('height') / 2);

                customLabel.attr({
                    x,
                    y
                });
                // Set font size based on chart diameter
                customLabel.css({
                    fontSize: `${series.center[2] / 12}px`
                });
            }
        }
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    title: {
        text: 'Income Flow'
    },
    subtitle: {
        text: 'Month: ' + monthName +' '+ yearName
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            borderRadius: 8,
            dataLabels: [{
                enabled: true,
                distance: 20,
                format: '{point.name}'
            }, {
                enabled: true,
                distance: -15,
                format: '{point.percentage:.0f}%',
                style: {
                    fontSize: '0.9em'
                }
            }],
            showInLegend: true
        }
    },
    series: [{
        name: 'Amount',
        colorByPoint: true,
        innerSize: '70%',
        data: [{
            name: 'Bank',
            y: 500
        }, {
            name: 'Bkash',
            y: 2000
        }, {
            name: 'Cash',
            y: 1500
        }, {
            name: 'Courier',
            y: 1000
        }]
    }]
});


</script>

</body>
</html>