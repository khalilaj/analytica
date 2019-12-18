@extends('layouts.app')

@section('title','Car Body Type')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('car_body_type.create') }}" class="btn btn-primary">Add New</a>
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All Body Type</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th> 
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($car_body_types as $key=>$car_body_type)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $car_body_type->name }}</td>
                                            <td><img class="img-responsive img-thumbnail" src="{{ asset('uploads/car_body_type/'.$car_body_type->image) }}" style="height: 150px; width: 150px" alt=""></td>                                     
                                            <td>{{ $car_body_type->created_at }}</td>
                                            <td>{{ $car_body_type->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('car_body_type.edit',$car_body_type->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $car_body_type->id }}" action="{{ route('car_body_type.destroy',$car_body_type->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $car_body_type->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush