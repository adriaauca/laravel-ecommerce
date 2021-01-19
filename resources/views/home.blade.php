@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="carousel" class="carousel slide" data-bs-ride="carousel">

    <ol class="carousel-indicators">
        <li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#carousel" data-bs-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- https://pixabay.com/photos/tea-time-poetry-coffee-reading-3240766/ -->
            <img src="./img/teaTime.jpg" class="d-block w-100 imgCarousel" alt="Tea Time">
        </div>
        <div class="carousel-item">
            <!-- https://pixabay.com/photos/tea-teapot-tea-ceremony-teabags-1150046/ -->
            <img src="./img/teapot.jpg" class="d-block w-100 imgCarousel" alt="Teapot">
        </div>
        <div class="carousel-item">
            <!-- https://pixabay.com/photos/tea-work-harvest-produce-863407/ -->
            <img src="./img/tea.jpg" class="d-block w-100 imgCarousel" alt="Tea">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

<div id="theLatest">

    <h2>The latest at Tea Shop</h2>
    <p class="text-center">Explore different flavours and sensations.</p>

    <div class="row justify-content-around mt-5">
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 latestTea">
            <div class="row my-2 h-100">
                <div class="col-12">
                    <h3>LOOSE TEAS</h3>
                </div>

                <div class="col-12 my-2">
                    Immerse yourself in a multitude of flavours and unique aromas from loose tea.
                </div>

                <div class="col-12 my-2 align-self-end">
                    <!-- https://pixabay.com/photos/tea-variety-drink-healthy-chinese-2519551/ -->
                    <img src="./img/teaVariety01.jpg" width="150px" height="150px" alt="Find Us">
                </div>

                <div class="col-12 my-2 align-self-end">
                    <button class="btn btn-primary w-100" type="button">SEE PRODUCTS</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 latestTea">
            <div class="row my-2 h-100">
                <div class="col-12">
                    <h3>Sets, Packs and Gifts</h3>
                </div>

                <div class="col-12 my-2">
                    Splendid packs of tea and herbal tea, to make that special daily moment original, different and always tasty
                </div>

                <div class="col-12 my-2 align-self-end">
                    <!-- https://pixabay.com/photos/tea-variety-drink-healthy-chinese-2519551/ -->
                    <img src="./img/teaVariety02.jpg" width="150px" height="150px" alt="Find Us">
                </div>

                <div class="col-12 my-2 align-self-end">
                    <button class="btn btn-primary w-100" type="button">SEE PRODUCTS</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 latestTea">
            <div class="row my-2 h-100">
                <div class="col-12">
                    <h3>Cup of tea</h3>
                </div>
                
                <div class="col-12 my-2">
                    Extract all the aroma, texture, body and flavour from your tea leaves with the best accessories created specifically for this purpose
                </div>

                <div class="col-12 my-2 align-self-end">
                    <!-- https://pixabay.com/photos/tea-variety-drink-healthy-chinese-2519551/ -->
                    <img src="./img/teaVariety03.jpg" width="150px" height="150px" alt="Find Us">
                </div>

                <div class="col-12 my-2 align-self-end">
                    <button class="btn btn-primary w-100" type="button">SEE PRODUCTS</button>
                </div>
            </div>
        </div>
    </div>
</div>


<hr class="featurette-divider">


<div id="aboutOurTea">
    <div class="row">
        <div class="col-md-5 my-auto">
            <!-- https://pixabay.com/photos/tea-hand-fresh-green-leaves-623796/ -->
            <img src="./img/fairtradeTea.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" alt="Fairtrade Tea">
        </div>

        <div class="col-md-7">
            <h2 class="featurette-heading">We <b>only</b> sell Fairtrade Tea</h2>
            <p class="lead">The multi-billion dollar tea industry employs millions of people, but working conditions and earnings for the producers are often dire. Fairtrade works with workers on plantations as well as with smallholder farmers to bring Fairtrade tea to consumers around the world.</p>
        </div>
    </div>
</div>


<hr class="featurette-divider">


<div id="findUs">
    <h2 class="mb-5">Find your nearest Tea Shop</h2>
    
    <a href="/" class="col-12 text-center">
        <article>

            <!-- https://pixabay.com/photos/shelf-store-shop-chinese-jars-1853439/ -->
            <img src="./img/findUs.jpg" class="w-100 findUs" alt="Find Us">
        </article>
    </a>   
</div>


<div id="discoverWorkshops">

    <h2>Discover our workshops</h2>

    <div class="row justify-content-around mt-5">
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 discoverWorkshops">
            <div class="row my-2">
                <div class="col-12">
                    <!-- https://pixabay.com/photos/tee-tea-set-chinese-china-3057645/ -->
                    <img src="./img/teaSommelier.jpg" class="w-100" height="220px" alt="Tea">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <h3>TEA SOMMELIER COURSE</h3>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                <i class="fas fa-calendar-day"></i> 12/02/2021
                </div>
                <div class="col-6">
                <i class="fas fa-map-marker-alt"></i> Barcelona
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col-12">
                    <button class="btn btn-primary w-100 moreInformation" type="button">+ INFORMATION</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 discoverWorkshops">
            <div class="row my-2">
                <div class="col-12">
                    <!-- https://pixabay.com/photos/tea-bowl-quality-nature-relax-3801507/ -->
                    <img src="./img/teaBlender.jpg" class="w-100" height="220px" alt="Tea">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <h3>TEA BLENDER COURSE</h3>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                <i class="fas fa-calendar-day"></i> 13/03/2021
                </div>
                <div class="col-6">
                <i class="fas fa-map-marker-alt"></i> Madrid
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col-12">
                    <button class="btn btn-primary w-100 moreInformation" type="button">+ INFORMATION</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 text-center py-3 discoverWorkshops">
            <div class="row my-2">
                <div class="col-12">
                    <!-- https://pixabay.com/photos/tea-pu-erh-brown-pu-er-china-3923907/ -->
                    <img src="./img/teaMaster.jpg" class="w-100" height="220px" alt="Tea">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
                    <h3>TEA MASTER COURSE</h3>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                <i class="fas fa-calendar-day"></i> 14/04/2021
                </div>
                <div class="col-6">
                <i class="fas fa-map-marker-alt"></i> Sevilla
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col-12">
                    <button class="btn btn-primary w-100 moreInformation" type="button">+ INFORMATION</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
