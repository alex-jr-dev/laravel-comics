<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset ('css/app.css') }}">
    <title>@yield('page-title')</title>
</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbo">
            <img src="{{asset ('images/jumbotron.jpg')}}" alt="Jumbotron image">
            <div class="blue-box">
                <h2>Current Series</h2>
            </div>
        </div>

        <div class="bg-dark">
            <div class="container">
                <div class="wrapper-comics">
                    @foreach($moviesList as $movie)
                    <div class="wrapper-comic">
                        <div>
                            <div>
                                <img src="{{$movie['thumb']}}" alt="Comic cover">
                            </div>
                            <h4>{{$movie['series']}}</h4>
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
    </main>
    @include('partials.footer')
</body>

</html>
