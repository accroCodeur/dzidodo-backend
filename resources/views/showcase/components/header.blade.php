<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="Dzidodo"></a></div>
        <div class="vs-mobile-menu">
            <ul>
                <li><a class="active" href="{{ route('home') }}">Accueil</a></li>
                <li><a href="javascript:void()">A propos</a></li>
                <li><a href="javascript:void()">Contactez nous</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="Que rechercher vous">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container-xxl">
            <div class="row justify-content-between align-items-center gx-50">
                <div class="col">
                    <div class="header-info">
                        <ul>
                            <li><i class="fas fa-clock"></i>24H /24</li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:info@dzidodo.com">info@dzidodo.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><a href="javascript:void()">Investir</a></li>
                            <li><a href="javascript:void()">Qui sommes nous</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="header-social">
                        <ul>
                            <li><a href="javascript:void()"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void()"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:void()"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrap">
        <div class="sticky-active">
            <div class="container-xxl">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.html"><img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li><a href="javascript:void()">A propos</a></li>
                                <li><a href="javascript:void()">Contactez nous</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-flex">
                        <div class="header-btn">
                            <button type="button" class="icon-btn searchBoxTggler">
                                <i class="far fa-search"></i>
                            </button>
                            <a href="javascript:void()" class="vs-btn style2 d-none d-lg-inline-block">Soumettre un projet</a>

                        </div>
                        <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
