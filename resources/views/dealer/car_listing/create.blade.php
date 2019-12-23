@extends('layouts.app')

@section('title','Create')


@section('content')
<div class="content-page  equal-height">
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Car Listing</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{url('dealer/car_listing/add')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Car Manufacturer</label>
                                            <select class="form-control" name="car_manufacturer">
                                            <option value="Toyota">Toyota</option>
                                            <option value="Benz">Benz</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Subaru">Subaru</option>
                                            <option value="VW">VW</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Car Model</label>
                                            <select class="form-control" name="car_model">
                                                <option value="Vitz">Vitz</option>
                                                <option value="Impreza">Impreza</option>
                                                <option value="C200">C200</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Image</label>
                                            <input type="file" name="image">
                                    </div>
                                </div> 
                                <div class="row" style="margin-top:15px">
                                    <div class="col-md-12">
                                    <button type="submit" class="btn btn-warning btn-block">Save</button>
                                    </div>
                                </div> 
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection

@push('scripts')

@endpush
