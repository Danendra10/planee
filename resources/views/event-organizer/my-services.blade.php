@extends('main/template/main-template')

@section('title')
    My Services
@stop

@section('active-class-my-services')
    current-list-item
@stop

@section('content')
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Services Name</th>
                <th>Services Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendor_data as $data)
                <?php
                // dd($data);
                $lower_price = $data->lower_price;
                $upper_price = $data->upper_price;
                ?>
                <tr>
                    <td>Dummy Num</td>
                    <td>{{ $data->services }}</td>
                    <td>{{ $data->description }}</td>
                    <td>Rp. {{ $data->lower_price }} - {{ $data->upper_price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
