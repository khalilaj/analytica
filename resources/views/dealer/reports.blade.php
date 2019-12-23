@extends('layouts.app')

@section('title','Dashboard')


@section('content')
<div class="content-page  equal-height">
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Reports</h3>
                        <a href="#"><i class="fa fa-share"></i> Export to file</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="panel-box">
                                <h4>Top Performing Vehicle Manufacturers (per visit)</h4>
                                <div>
                                    <canvas id="veh_man" height="120"></canvas>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4">
                        <div class="panel-box">
                                <h4>Conversion Rate</h4>
                                <div>
                                    <canvas id="conversion" height="250"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel-box">
                                <h4>Traction Performance (per visit)</h4>
                                <div>
                                    <canvas id="traction" height="150"></canvas>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="panel-box">
                                <h4>Top Performing car models </h4>
                                <canvas id="car_models" height="150"></canvas>

                            </div>
                        </div>

                    </div>

                   
                </div>
                <!--content-->
            </div>

@endsection

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
    
    var ctx = document.getElementById("veh_man").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ["January", "February", "March", "April", "May", "June", "July"],
              datasets: [{
                  label: 'Mazda ',
                  data: [65, 59, 80, 81, 56, 55, 40],
                  backgroundColor: "rgba(235, 162, 59,0.5)",
                  borderWidth: 1,
                  borderColor: "rgba(235, 162, 59,0.5)",
                  fill: false
              }, {
                label: "Nissan",
                backgroundColor: "yellow",
                borderColor: "yellow",
                data: [28, 48, 40, 19, 86, 27, 90],
                borderWidth: 1,
                fill: false                        
            },
            {
                label: "Toyota",
                backgroundColor: "blue",
                borderColor: "blue",
                data: [8, 84, 70, 49, 66, 37, 30],
                borderWidth: 1,
                fill: false
            }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });

</script>

<script>

var ctx = document.getElementById("traction").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
      labels: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat", "Sun"],
      datasets: [{
          label: 'WhatsApp ',
          data: [65, 59, 80, 81, 56, 55, 40],
          backgroundColor: "white",
          borderWidth: 1,
          borderColor: "white",
          fill: false
      }, {
        label: "Phone Calls",
        backgroundColor: "#f7b03e",
        borderColor: "#f7b03e",
        data: [28, 48, 40, 19, 86, 27, 90],
        borderWidth: 1,
        fill: false                        
    },
    {
        label: "User Visits",
        backgroundColor: "green",
        borderColor: "green",
        data: [8, 84, 70, 49, 66, 37, 30],
        borderWidth: 1,
        fill: false
    }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
});

</script>

<script>

var ctx = document.getElementById("car_models").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [{
          label: 'Mazda Demio',
          data: [65, 59, 80, 81, 56, 55, 40],
          backgroundColor:"#9b59b6",
          borderWidth: 1,
          borderColor: "#9b59b6",
          fill: false
      }, {
        label: "Nissan Note",
        backgroundColor: "#e74c3c",
        borderColor: "#e74c3c",
        data: [28, 48, 40, 19, 86, 27, 90],
        borderWidth: 1,
        fill: false                        
    },
    {
        label: "Toyota Vitz",
        backgroundColor:"#95a5a6",
        borderColor: "#95a5a6",
        data: [8, 84, 70, 49, 66, 37, 30],
        borderWidth: 1,
        fill: false
    }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
});

</script>



<script>

var ctx = document.getElementById("conversion").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ["Clients who called ", "Clients Who did not call"],
datasets: [{
backgroundColor: [
"#2ecc71",
"#3498db"
],
data: [12, 70]
}]
}
});

</script>


@endpush