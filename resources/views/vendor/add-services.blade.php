@extends('main/template/main-template')

@section('title')
    Add Services
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
                        <h4>Add Services</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vendor.add-services.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="services">Service Name</label>
                                <input type="text" class="form-control" name="services" id="services"
                                    placeholder="Service Name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Service Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lower_price">Lower Price</label>
                                <input type="text" class="form-control" name="lower_price" id="lower_price"
                                    placeholder="Service Price" required>
                            </div>
                            <div class="form-group">
                                <label for="upper_price">Upper Price</label>
                                <input type="text" class="form-control" name="upper_price" id="upper_price"
                                    placeholder="Service Price" required>
                            </div>
                            <div class="form-group">
                                <label for="service_duration">Service Duration</label>
                                <input type="text" class="form-control" name="service_duration" id="service_duration"
                                    placeholder="Service Duration" required>
                            </div>
                            {{-- <div class="form-group">
                                <label for="service_image">Service Image</label>
                                <input type="file" class="form-control" name="service_image" id="service_image"
                                    placeholder="Service Image">
                            </div> --}}
                            {{-- <div class="form-group">
                            <label for="service_category">Service Category</label>
                            <select class="form-control" name="service_category" id="service_category">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
