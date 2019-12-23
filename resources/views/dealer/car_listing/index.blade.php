@extends('layouts.app')

@section('title','Car Listings')


@section('content')
<div class="content-page  equal-height">
    <div class="content">
        <div class="page-title">
        <h3>Car Listing</h3>
        <a href="/dealer/car_listing/add" class="btn btn-warning ">Add New</a>
        </div>
                    <!--end page title-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    @include('layouts.partial.msg')
                    <div class="card">
                        
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-white">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Car Manufacturer</th>
                                <th>Car Model</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($car_listings as $key=>$car_listing)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $car_listing->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/car_listing/'.$car_listing->image) }}" style="height: 100px; width: 100px" alt=""></td>
                                            <td>{{ $car_listing->car_manufacturer }}</td>
                                            <td>{{ $car_listing->car_model }}</td>
                                            <td>{{ $car_listing->price }}</td>
                                            <td>{{ $car_listing->description }}</td>
                                            <td>{{ $car_listing->created_at }}</td>
                                            <td>{{ $car_listing->updated_at }}</td>
                                            <td >
                                                <a href="{{ url ('/dealer/car_listing/show', ['id' => $car_listing->id]) }}" class="btn btn-warning btn-sm"><i class="material-icons">timeline</i></a>

                                                <a  href="{{ url ('/dealer/car_listing/edit', ['id' => $car_listing->id]) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                               </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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