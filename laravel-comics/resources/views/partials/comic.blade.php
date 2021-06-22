@extends('layout.home')
@section('page-title', 'Comic')
@section('content')
@include('/partials/jumbo')
<main>
    <div class="bg-blue-comic">
        <div class="container">
            <div>
                <div class="img-container">
                    <img src="{{$comic['thumb']}}" alt="Comics cover">
                    <div class="book-text">
                        <p>Comic book</p>
                    </div>
                    <div class="view-gallery">
                        <p>View Gallery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrapper-info">
            <h1>{{$comic['title']}}</h1>
            <div class="info">
                <div class="wrapper-sell">
                    <div class="price">
                        <p>U.S. Price <span>{{$comic['price']}}</span></p>
                        <p>Available</p>
                    </div>
                    <div class="availability">
                        <p>Check Availability <i class="fas fa-sort-down"></i></p>
                    </div>
                </div>
            </div>
            <div class="description">
                <div>
                    <p>{{$comic['description']}}</p>
                </div>
                <div>
                    <p>Advertisement</p>
                    <img src="{{ asset('images/superman.jpg')}}" alt="Adv image">
                </div>
            </div>
        </div>
    </div>

    <div class="table">
        <div class="container">
            <div class="wrapper-table">
                <div class="left-table">
                    <h2>Talent</h2>
                    <div>
                        <span>Art by:</span>
                        <div class="wrapper-text-table">
                            <span>
                                @foreach($comic['artists'] as $value)
                                <a href="#">{{$value}}</a>
                                @endforeach
                            </span>
                        </div>
                    </div>
                    <div>
                        <span>Written by:</span>
                        <div class="wrapper-text-table">
                            <span>
                                @foreach($comic['writers'] as $value)
                                <a href="#">{{$value}}</a>
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
                <div class="right-table">
                    <h2>Specs</h2>
                    <div>
                        <span>Series:</span>
                        <span>{{$comic['series']}}</span>
                    </div>
                    <div>
                        <span>U.S. Price: </span>
                        <span>{{$comic['price']}}</span>
                    </div>
                    <div>
                        <span>On Sale Date:</span>
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="start-footer">
        <div class="container">
            <div class="wrapper">
                <div>
                    <a href="#" class="link-sprite">Digital Comics </a>
                    <i class="bg-sprite img-1"></i>
                </div>
                <div>
                    <a href="#" class="link-sprite">Shop DC </a>
                    <i class="bg-sprite img-2"></i>
                </div>
                <div>
                    <a href="#" class="link-sprite">Comic shop locator </a>
                    <i class="bg-sprite img-3"></i>
                </div>
                <div>
                    <a href="#" class="link-sprite">Subscription</a>
                    <i class="bg-sprite img-4"></i>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
