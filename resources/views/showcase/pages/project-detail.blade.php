@extends('showcase.layouts.main')

@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ $project->name }}</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li>{{ $project->name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="space-top space-extra-bottom">
    <div class="container text-center text-lg-start">
        {!! $project->description !!}
        <div class="row gx-60">
            <div class="col-lg-5 col-xl-auto">
                <div class="mb-30"><img src="{{ asset('assets/img/about/'.$project->image) }}" alt="about" class="w-100"></div>
            </div>
            <div class="col-lg-7 col-xl">
                <h2 class="mt-n2 mb-4 pb-1">Details:</h2>
                @foreach($project->caracteristics as $caracteristic)
                    <h3 class="h4 mb-1">{{ $caracteristic->title }}</h3>
                    <p class="mb-4">{{ $caracteristic->text }}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="bg-theme space-extra">
    <div class="container container-style2">
        <div class="row vs-carousel text-center" data-slide-show="5" data-xl-slide-show="4" data-lg-slide-show="3"
            data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2">
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-1.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-2.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-3.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-4.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-5.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-1.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-2.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-3.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-4.svg') }}" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="{{ asset('assets/img/brand/brand-2-5.svg') }}" alt="image"></div>
            </div>
        </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <h2>Liste des titres</h2>
                <div class="table-style1">
                    @foreach($project->sing_list as $single)
                        <div class="tr">
                            <div class="td">
                                <a href="javascript:void()" class="play-btn"><i class="fal fa-play"></i></a>
                            </div>
                            <div class="td">{{ $single }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-xl-7 offset-xl-2 mb-3 mb-xl-0">
                <h2 class="mb-3 pb-3">Budget</h2>
                <span class="price-style1">
                    <span class="total">{{ $project->amount }}</span>
                    <span class="currency">F CFA</span>
                </span>

                <span class="price-style1">
                    <span class="total">{{ $project->amount_collected . ' Colleté'}}</span>
                </span>

                <div class="price-style2">
                    @foreach($project->collected_details as $collectedDetail)
                        <span class="price-item">{{$collectedDetail}}  <span class="currency">F CFA</span> </span>
                    @endforeach
                </div>

                <a href="javascript:void()" class="vs-btn style7">Investir</a>
            </div>
        </div>
    </div>
</section>
@endsection
