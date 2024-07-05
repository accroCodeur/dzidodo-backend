@extends('showcase.layouts.main')

@section('content')

<section class="vs-hero-wrapper hero-layout3" data-bg-src="{{ asset('assets/img/hero/hero2.jpg') }}" data-overlay="title" data-opacity="8">
    <div class="container">
        <div class="row gx-80">
            <div class="col-lg-auto">
                <div class="hero-img"><img src="{{ asset('assets/img/hero/hero-i-3-1.svg') }}" alt="hero"></div>
            </div>
            <div class="col-lg">
                <div class="hero-content">
                    <p class="hero-subtitle h1">Commencer dès maintenant</p>
                    <h1 class="hero-title">Faites valoir votre talent</h1>
                    <p class="hero-text">Investissez sur les artistes qui vous interessent via la blockchain</p>
                    <div class="hero-shape"><img src="{{ asset('assets/img/hero/hero-shape-3-1.svg') }}" alt="shape"></div>
                    <div class="hero-btn-group">
                        <a href="javascript:void()" class="vs-btn style4"><i class="fa fa-globe"></i>Mondiale</a>
                        <a href="javascript:void()" class="vs-btn style4"><i class="fab fa-soundcloud"></i>Transparent</a>
                        <a href="javascript:void()" class="vs-btn style4"><i class="fa fa-lock"></i>Securisé</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="audio-style2 audio-active" data-track="{{ asset('assets/img/example.mp3') }}" data-wav-height="45" data-wav-color="#F58800" data-progress-color="#266867">
            <div class="audio-left">
                <div class="audio-icon"><img src="{{ asset('assets/img/icon/icon-sound.svg') }}" alt="icon"></div>
                <h3 class="audio-title">Un artiste aléatoire</h3>
            </div>
            <div class="audio-middle">
                <button class="audio-backward"><i class="fas fa-backward"></i></button>
                <button class="audio-pause-play"><i class="fas fa-play"></i></button>
                <button class="audio-forward"><i class="fas fa-forward"></i></button>
            </div>
            <div class="audio-right">
                <div class="audio-body">
                    <div class="audio-time">0:00</div>
                    <div class="audio-waveform"></div>
                    <div class="audio-duration">0:00</div>
                </div>
                <div class="audio-control">
                    <button class="audio-repeat"><i class="far fa-sync"></i></button>
                    <button class="audio-mic"><i class="fas fa-volume"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto col-lg-5 col-xl-6 pb-3 pb-lg-0 mb-4 mb-lg-0">
                <div class="img-box3">
                    <div class="img-1"><img class="singer-img" src="{{ asset('assets/img/about/singer.png') }}" alt="about"></div>
                    <div class="img-2"><img src="{{ asset('assets/img/about/ab-3-2.png') }}" alt="about"></div>
                    <div class="img-3"><img src="{{ asset('assets/img/about/ab-3-3.png') }}" alt="about"></div>
                    <div class="img-4"><img src="{{ asset('assets/img/about/ab-3-4.png') }}" alt="about"></div>
                    <div class="img-5"><img src="{{ asset('assets/img/about/ab-3-5.png') }}" alt="about"></div>
                    <div class="img-6"><img src="{{ asset('assets/img/about/ab-3-6.png') }}" alt="about"></div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle2">
                        <img class="icon" src="{{ asset('assets/img/icon/microphone.svg') }}" alt="icon">
                        Blockchain - Investissement - Musique
                    </span>
                    <h2 class="sec-title">Laissez la blockchain gérer votre investissement</h2>
                    <p class="sec-text">
                        Bienvenue sur Dzidodo, où les artistes du monde entier peuvent se connecter
                         avec des investisseurs passionnés par la culture et les arts.
                         Notre plateforme révolutionnaire permet aux artistes de recevoir un soutien financier directement
                         depuis des portefeuilles crypto.
                    </p>
                    <p class="sec-text">Les investisseurs, quant à eux, ont l'opportunité d'acquérir des tokens représentant leurs investissements,
                        sécurisés sur la blockchain. C'est une nouvelle ère pour le financement artistique, où la créativité rencontre la technologie pour créer un impact global significatif.</p>
                </div>
                <div class="list-style2">
                    <ul class="list-unstyled">
                        <li>Paiement via <a href="https://lideflow.com">Lideflow</a>  </li>
                        <li>Smart contracts pour les actions Tokenisés </li>
                        <li>Ventes des actions possibles</li>
                    </ul>
                </div>
                <a href="{{ url('/projects') }}" class="vs-btn style5">Commencer</a>
            </div>
        </div>
    </div>
</section>

<section class="space-top space-extra-bottom" data-bg-src="{{ asset('assets/img/bg/bg-pod-3-1.jpg') }}">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto text-center text-md-start">
                <div class="title-area">
                    <span class="sec-subtitle2">
                        <img class="icon" src="{{ asset('assets/img/icon/microphone.svg') }}" alt="icon">
                        Appreciez de vous même
                    </span>
                    <h2 class="sec-title text-white">Quelques artistes</h2>
                </div>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="sec-btns">
                    <button class="arrow-btn style2" data-slick-prev="#podcastslide1"><i></i></button>
                    <button class="arrow-btn style2" data-slick-next="#podcastslide1"><i></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" id="podcastslide1" data-center-mode="true" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
            <div class="col-xl-4">
                <div class="podcast-style3">
                    <div class="podcast-img">
                        <a href="{{ url('podcast-details.html') }}">
                            <img src="{{ asset('assets/img/podcast/podcast-1-1.jpg') }}" alt="podcast">
                        </a>
                        <div class="author">
                            <img src="{{ asset('assets/img/podcast/pod-avater-1-1.png') }}" alt="author">
                        </div>
                    </div>
                    <div class="podcast-content">
                        <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video">
                            <i class="fal fa-play"></i>
                        </a>
                        <h3 class="podcast-title h4">
                            <a href="{{ url('podcast.html') }}" class="text-inherit">Jean Kouakou - Artiste R&B</a>
                        </h3>
                        <a href="{{ url('podcast-details.html') }}" class="vs-btn">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="podcast-style3">
                    <div class="podcast-img">
                        <a href="{{ url('podcast-details.html') }}">
                            <img src="{{ asset('assets/img/podcast/podcast-1-2.jpg') }}" alt="podcast">
                        </a>
                        <div class="author">
                            <img src="{{ asset('assets/img/podcast/pod-avater-1-2.png') }}" alt="author">
                        </div>
                    </div>
                    <div class="podcast-content">
                        <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video">
                            <i class="fal fa-play"></i>
                        </a>
                        <h3 class="podcast-title h4">
                            <a href="{{ url('podcast.html') }}" class="text-inherit">Kodjo koume - POP</a>
                        </h3>
                        <a href="{{ url('podcast-details.html') }}" class="vs-btn">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="podcast-style3">
                    <div class="podcast-img">
                        <a href="{{ url('podcast-details.html') }}">
                            <img src="{{ asset('assets/img/podcast/podcast-1-3.jpg') }}" alt="podcast">
                        </a>
                        <div class="author">
                            <img src="{{ asset('assets/img/podcast/pod-avater-1-3.png') }}" alt="author">
                        </div>
                    </div>
                    <div class="podcast-content">
                        <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video">
                            <i class="fal fa-play"></i>
                        </a>
                        <h3 class="podcast-title h4">
                            <a href="{{ url('podcast.html') }}" class="text-inherit">Richard Bona - Zouglou</a>
                        </h3>
                        <a href="{{ url('podcast-details.html') }}" class="vs-btn">Voir</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="podcast-style3">
                    <div class="podcast-img">
                        <a href="{{ url('podcast-details.html') }}">
                            <img src="{{ asset('assets/img/podcast/podcast-1-4.jpg') }}" alt="podcast">
                        </a>
                        <div class="author">
                            <img src="{{ asset('assets/img/podcast/pod-avater-1-2.png') }}" alt="author">
                        </div>
                    </div>
                    <div class="podcast-content">
                        <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video">
                            <i class="fal fa-play"></i>
                        </a>
                        <h3 class="podcast-title h4">
                            <a href="{{ url('podcast.html') }}" class="text-inherit">Assemian jonas - Soul</a>
                        </h3>
                        <a href="{{ url('podcast-details.html') }}" class="vs-btn">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sec-subtitle2">
                <img class="icon" src="{{ asset('assets/img/icon/microphone.svg') }}" alt="icon">
                Albums réalisés
                <img class="icon" src="{{ asset('assets/img/icon/microphone.svg') }}" alt="icon">
            </span>
            <h2 class="sec-title">Ils ont su convaincre</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="podcast-style4">
                            <a href="javascript:void()" class="podcast-episode">5 000 000 FCFA</a>
                            <div class="podcast-meta">
                                <a href="javascript:void()"><i class="fas fa-microphone"></i>Adeve Roland</a>
                                <a href="javascript:void()"><i class="fas fa-clock"></i> il ya 2 mois</a>
                            </div>
                            <h3 class="podcast-title h4">
                                <a href="javascript:void()" class="text-inherit">25 824 700 FCFA comme bénéfice</a>
                            </h3>
                            <p class="podcast-text">Grace à dzidodo j'ai pu réalisé mon rêve d'enfance. Charotte aux personnes qui ont cru en moi.</p>
                            <div class="podcast-bottom">
                                <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video"><i class="fal fa-play"></i></a>
                                <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="vs-btn">Lire l'album</a>
                                <div class="podcast-shape">
                                    <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                                </div>
                                <div class="podcast-shape">
                                    <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="podcast-style4">
                            <a href="javascript:void()" class="podcast-episode">2 700 000 FCFA</a>
                            <div class="podcast-meta">
                                <a href="javascript:void()"><i class="fas fa-microphone"></i>Kuegah Nancy</a>
                                <a href="javascript:void()"><i class="fas fa-clock"></i> il ya 5 mois</a>
                            </div>
                            <h3 class="podcast-title h4">
                                <a href="javascript:void()" class="text-inherit">9 000 700 FCFA de bénéfice</a>
                            </h3>
                            <p class="podcast-text">Je galerais depuis des année à trouver un producteur.
                                Je ne peux qu'etre reconnaissante envers tous les acteurs ayant contribuer à la naissance de cet album</p>
                            <div class="podcast-bottom">
                                <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video"><i class="fal fa-play"></i></a>
                                <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="vs-btn">Lire l'album</a>
                                <div class="podcast-shape">
                                    <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                                </div>
                                <div class="podcast-shape">
                                    <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <div class="podcast-style4 layout2">
                    <div class="podcast-img">
                        <a href="javascript:void()">
                            <img src="{{ asset('assets/img/podcast/pod-img-4-1.jpg') }}" alt="image">
                        </a>
                    </div>
                    <div class="podcast-content">
                        <a href="javascript:void()" class="podcast-episode">8 680 000 FCFA</a>
                        <div class="podcast-meta">
                            <a href="javascript:void()"><i class="fas fa-microphone"></i>Santrinos Raphael</a>
                            <a href="javascript:void()"><i class="fas fa-clock"></i> il y a 3 ans</a>
                        </div>
                        <h3 class="podcast-title">
                            <a href="javascript:void()" class="text-inherit">+ 120 000 000 FCFA générés</a>
                        </h3>

                        <p class="podcast-text">
                            J'etais sur le point de mettre une croix sur cette passion qu'est la musique pour moi. Vous avez été la lumière au bout du tunel.
                            Je suis toujours dan sle deni tellement j'y croyais plus. Grand merci a vous
                        </p>
                        <div class="podcast-bottom">
                            <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="play-btn popup-video"><i class="fal fa-play"></i></a>
                            <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=IL6RZazFYLMcQK5B" class="vs-btn">Voir l'album</a>
                            <div class="podcast-shape">
                                <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                            </div>
                            <div class="podcast-shape">
                                <img src="{{ asset('assets/img/podcast/pod-4-shape-1.png') }}" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="hightlight-style1 layout2">
    <div class="hightlight-inner">
        <div class="hightlight-row">
            <div class="hightlight-text">Ecouter<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Investir<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Ecouter<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Investir<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Ecouter<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Investir<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Ecouter<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Investir<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Ecouter<img src="assets/img/icon/icon.svg" alt="star"></div>
            <div class="hightlight-text">Investir<img src="assets/img/icon/icon.svg" alt="star"></div>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">
        <div class="testi-wrap1" data-bg-src="assets/img/bg/testi-bg-1-1.jpg">
            <div class="row gx-20 align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="img-box4">
                        <div class="title-area"><span class="sec-subtitle2"><img class="icon"
                                    src="assets/img/icon/microphone.svg" alt="icon">Mots des fondateurs</span>
                            <h2 class="sec-title">Grand merci à tous</h2>
                        </div>
                        <div class="img-1"><img src="assets/img/testimonial/testi-1-1.jpg" alt="testimonial"></div>
                        <div class="media-style2">
                            <div class="media-avater"><img src="assets/img/about/avater-1-1.png" alt="about"> <img
                                    src="assets/img/about/avater-1-2.png" alt="about"> <img
                                    src="assets/img/about/avater-1-3.png" alt="about"></div>
                            <div class="media-body"><span class="media-title">198 M+</span>
                                <p class="media-text">d'investissements dans le monde</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="testi-style1 vs-carousel" data-slide-show="1" data-fade="true" data-dots="true">
                        <div>
                            <div class="testi-quote"><i class="fas fa-quote-right"></i></div>
                            <p class="testi-text">
                                La reussite de ce projet est une preuve que la blochchain est un facteur determiné de notre ère
                                pour encourager les uns à croire aux autres.
                            </p>
                            <div class="testi-author">
                                <div class="avater"><img src="assets/img/testimonial/test-auth-1-2.png"
                                        alt="testimonial"></div>
                                <div class="media-body">
                                    <h3 class="auth-name h4">Esso-Dong </h3><span class="auth-degi h5">CEO</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testi-quote"><i class="fas fa-quote-right"></i></div>
                            <p class="testi-text">
                                Nous remiercions toutes ces personnes qui ont permis à plein d'artistes de pouvoir realiser leur reves
                            </p>
                            <div class="testi-author">
                                <div class="avater"><img src="assets/img/testimonial/test-auth-1-1.png"
                                        alt="testimonial"></div>
                                <div class="media-body">
                                    <h3 class="auth-name h4">Diane</h3><span
                                        class="auth-degi h5">CTO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="bg-theme space-extra">
    <div class="container container-style2">
        <div class="row vs-carousel text-center" data-slide-show="5" data-xl-slide-show="4" data-lg-slide-show="3"
            data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="2">
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-1.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-2.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-3.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-4.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-5.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-1.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-2.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-3.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-4.svg" alt="image"></div>
            </div>
            <div class="col-auto">
                <div><img src="assets/img/brand/brand-2-5.svg" alt="image"></div>
            </div>
        </div>
    </div>
</div>
@endsection
