@extends('main/template/main-template')

@section('title')
Vendor List
@stop

@section('active-class-shop')
active
@stop

@section('active')
1
@stop
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Vendor Lists</h2>
                </div>
            </div>
            <div class="search-container">
                <form action="/vendor-list">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Search">
                        <button class="btn btn-primary btn-md" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center mb-4"></h4>
                    <div class="table-wrap">
                        <table class="table" id="myTable">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Services</th>
                                    <th onclick="sortTable(1)">Price</th>
                                    <th>Material</th>
                                    <th>Contact</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendor as $data)
                                    <tr>
                                        <td>{{ $data->services }}</td>
                                        <td>Rp. {{ $data->lower_price }} - {{ $data->upper_price }}</td>
                                        <td>{{ $data->material }}</td>
                                        <td> <a href="mailto:{{ $data->email }}" type="button"
                                                class="btn btn-primary btn-md">Contact</a></td>
                                        <td><a href="/vendor/services/{{ $data->id }}" type="button"
                                                class="btn btn-primary btn-md">View More</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection