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
    <section class="dark">
        <div class="container py-4">
            <h1 class="h1 text-center" id="pageHeaderTitle" style="margin-top: 10%; color: #fff">Vendor List</h1>

            @foreach ($vendor as $data)
                <article class="postcard dark blue">
                    <a class="postcard__img_link" href="#">
                        @if ($data->image == null)
                            <img class="postcard__img" src="/img/clothes.svg" alt="">
                        @else
                            <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                        @endif
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="#">{{ $data->services }}</a></h1>
                        <div class="postcard__subtitle small">
                                <i class="fas fa-dollar mr-2"></i>Rp. {{$data->lower_price}} - {{$data->upper_price}}
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">{{ $data->description }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-envelope mr-2"></i><a href="mailto:{{ $data->email }}">Contact</a></li>
                            <li class="tag__item"><i class="fas fa-info mr-2"></i><a href="/vendor/services/{{ $data->id }}">Information</a></li>
                            <li class="tag__item"><i class="fas fa-exclamation mr-2"></i><a href="/vendor/report/{{ $data->id }}">Report</a></li>
                            <li class="tag__item"><i class="fa fa-shopping-cart mr-2"></i><a href="/vendor/cart/{{ $data->id }}">Add to Cart</a></li>
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    {{-- <section class="ftco-section">
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
    </section> --}}
@endsection
