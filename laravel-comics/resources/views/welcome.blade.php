@section('page-title', 'Laravel Comics')
@extends('layout.home')
@section('content')
<div class="jumbo">
    <img src="{{asset ('images/jumbotron.jpg')}}" alt="Jumbotron image">
    <div class="blue-box">
        <h2>Current Series</h2>
    </div>
</div>

<div class="bg-dark">
    <div class="container">
        <div class="wrapper-comics">
            @foreach($moviesList as $key => $movie)
            <div class="wrapper-comic">
                <div>
                    <a href="{{route('comic', ['index' => $key])}}">
                        <div>
                            <img src="{{$movie['thumb']}}" alt="Comic cover">
                        </div>
                        <h4>{{$movie['series']}}</h4>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="load">
            <a href="#">Load more</a>
        </div>
    </div>
</div>
<div class="wrapper-list">
    <div class="container">
        <ul>
            <li>
                <img src="{{asset ('images/buy-comics-digital-comics.png')}}" alt="Digital image">
                <a href="#">Digital comics</a>
            </li>
            <li>
                <img src="{{asset ('images/buy-comics-merchandise.png')}}" alt="Merchandise image">
                <a href="#">Dc merchandise</a>
            </li>
            <li>
                <img src="{{asset ('images/buy-comics-subscriptions.png')}}" alt="Subscription image">
                <a href="#">Subscriptions</a>
            </li>
            <li>
                <img src="{{asset ('images/buy-comics-shop-locator.png')}}" alt="Shop image">
                <a href="#">Comic shop locator</a>
            </li>
            <li>
                <img src="{{asset ('images/buy-dc-power-visa.svg')}}" alt="Power visa image">
                <a href="#">Dc power visa</a>
            </li>
        </ul>
    </div>
</div>
@endsection
