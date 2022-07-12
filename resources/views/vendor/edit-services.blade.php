@extends('main/template/main-template')

@section('title')
    Edit Services
@stop

@section('active-class-add-services')
    current-list-item
@stop

@section('content')
    <div class="container" style="margin-top:10%">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Services</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/vendor/my-services/edit/confirm" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $vendorData->id }}">
                            <div class="form-group">
                                <label for="services">Service Name</label>
                                <input type="text" class="form-control" name="services" id="services"
                                    placeholder="Service Name" value="{{ $vendorData->services }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Service Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"
                                    value="{{ $vendorData->description }}" placeholder="{{ $vendorData->description }}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lower_price">Lower Price</label>
                                <input type="text" class="form-control" name="lower_price" id="lower_price"
                                    placeholder="Service Price" value="{{ $vendorData->lower_price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="upper_price">Upper Price</label>
                                <input type="text" class="form-control" name="upper_price" id="upper_price"
                                    placeholder="Service Price" value="{{ $vendorData->upper_price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="material">Material</label>
                                <input type="text" class="form-control" name="material" id="material"
                                    placeholder="Material" value="{{ $vendorData->material }}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
