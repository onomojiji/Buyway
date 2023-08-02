@extends('layouts.app')

@section('title')
Accueil
@endsection

@section('content')
    <!-- sllider area start -->
    <section class="slider__area pt-40 pb-70 p-relative fix">
        <div class="slider__shape">
            <img class="slider__shape-1" src="assets/img/slider/2/slider-shape-1.png" alt="">
            <img class="slider__shape-2" src="assets/img/slider/2/slider-shape-2.png" alt="">
        </div>
        <div class="slider__active-2 slider__bid-area">
            <div class="single-slider slider__height-2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="slider__content-2">
                                <div class="slider__purchase ">
                                    <div class="slider__purchase-thumb">
                                        <img src="assets/img/slider/2/user/user-1.jpg" alt="">
                                    </div>
                                    <div class="slider__purchase-content">
                                        <p>Milford... purchased <span class="purchase-notification">Ruüd</span> at <span class="purchase-notification">1.2 ETH</span> <span class="purchase-time">1 mins ago</span> </p>
                                    </div>
                                </div>
                                <h3 class="slider__title-2">
                                    Create, <span>Explore</span> & Collect digital Art and <span class="has-shape">NFTs <img class="slider-title-shape" src="assets/img/icon/slider-stoke-shape.svg" alt=""> </span>
                                </h3>
                                <p>If you are an artist and want to be a successfull artist then learn to covernt your art into NFT art</p>

                                <div class="slider__btn-2 d-sm-flex align-items-center">
                                    <a href="shop.html" class="tp-btn-gradient active mr-15  mb-15">View Market</a>
                                    <a href="create-single.html" class="tp-btn-border mb-15">Create NFT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="slider__bid-item pl-70">
                                <div class="slider__bid-item-bg" ></div>
                                <img class="slider__shape-3" src="assets/img/slider/2/slider-shape-3.png" alt="">
                                <div class="slider__bid-thumb">
                                    <img src="assets/img/slider/2/slider-1.jpg" alt="">
                                </div>
                                <div class="slider__bid-content">
                                    <div class="slider__bid-top">
                                        <h3>Hottest Auction</h3>
                                    </div>
                                    <div class="slider__bid-info">
                                        <h3 class="slider__bid-title">
                                            <a href="#">Silver coin_3d print</a>
                                        </h3>
                                        <div class="slider__bid-popularity">
                                            <a href="#"><i class="fa-solid fa-heart"></i> 24</a>
                                        </div>
                                        <div class="slider__bid-Historique">
                                            <p>Historique</p>

                                            <div class="slider__bid-user d-flex align-items-center">
                                                <div class="slider__bid-user-thumb mr-10">
                                                    <img src="assets/img/slider/2/user/user-1.jpg" alt="">
                                                </div>
                                                <div class="slider__bid-user-content">
                                                    <h3>Ruüd Driver</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider__bid-highest">
                                            <p>Highest bid</p>
                                            <h4><span>4.17</span> with <span>$746.634</span></h4>
                                        </div>
                                    </div>
                                    <div class="slider__bid-btn">
                                        <button type="button"  class="slider-bid-btn" data-bs-toggle="modal" data-bs-target="#bidmodal"> <img src="assets/img/icon/historique/historique-bid.svg" alt=""> Place a bid <i class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider__height-2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="slider__content-2">
                                <div class="slider__purchase ">
                                    <div class="slider__purchase-thumb">
                                        <img src="assets/img/slider/2/user/user-1.jpg" alt="">
                                    </div>
                                    <div class="slider__purchase-content">
                                        <p>Milford... purchased <span class="purchase-notification">Ruüd</span> at <span class="purchase-notification">1.2 ETH</span> <span class="purchase-time">1 mins ago</span> </p>
                                    </div>
                                </div>
                                <h3 class="slider__title-2">
                                    Create, <span>Explore</span> & Collect digital Art and <span class="has-shape">NFTs <img class="slider-title-shape" src="assets/img/icon/slider-stoke-shape.svg" alt=""> </span>
                                </h3>
                                <p>If you are an artist and want to be a successfull artist then learn to covernt your art into NFT art</p>

                                <div class="slider__btn-2 d-sm-flex align-items-center">
                                    <a href="shop.html" class="tp-btn-gradient active mr-15  mb-15">View Market</a>
                                    <a href="create-single.html" class="tp-btn-border mb-15">Create NFT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="slider__bid-item pl-70">
                                <img class="slider__shape-3" src="assets/img/slider/2/slider-shape-3.png" alt="">
                                <div class="slider__bid-thumb">
                                    <img src="assets/img/slider/2/slider-2.jpg" alt="">
                                </div>
                                <div class="slider__bid-content">
                                    <div class="slider__bid-top">
                                        <h3>Hottest Auction</h3>
                                    </div>
                                    <div class="slider__bid-info">
                                        <h3 class="slider__bid-title">
                                            <a href="#">Silver coin_3d print</a>
                                        </h3>
                                        <div class="slider__bid-popularity">
                                            <a href="#"><i class="fa-solid fa-heart"></i> 24</a>
                                        </div>
                                        <div class="slider__bid-Historique">
                                            <p>Historique</p>

                                            <div class="slider__bid-user d-flex align-items-center">
                                                <div class="slider__bid-user-thumb mr-10">
                                                    <img src="assets/img/slider/2/user/user-1.jpg" alt="">
                                                </div>
                                                <div class="slider__bid-user-content">
                                                    <h3>Ruüd Driver</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider__bid-highest">
                                            <p>Highest bid</p>
                                            <h4><span>4.17</span> with <span>$746.634</span></h4>
                                        </div>
                                    </div>
                                    <div class="slider__bid-btn">
                                        <button type="button"  class="slider-bid-btn" data-bs-toggle="modal" data-bs-target="#bidmodal"> <img src="assets/img/icon/historique/historique-bid.svg" alt=""> Place a bid <i class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sllider area end -->

    <!-- cta area start -->
    <section class="cta__area p-relative z-index-1">
        <div class="container">
            <div class="cta__wrapper-2 p-relative">
                <div class="cta__shape">
                    <img class="cta__shape-1" src="assets/img/cta/2/cta-shape-1.png" alt="">
                    <img class="cta__shape-2" src="assets/img/cta/2/cta-shape-2.png" alt="">
                    <img class="cta__shape-3" src="assets/img/cta/2/cta-shape-3.png" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="cta__thumb-2">
                            <img src="assets/img/cta/2/cta-graph.png" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="cta__content-2">
                            <h3>Explore and discover Top trending NFTs</h3>
                            <p>Raroin is a shared liquidity NFT market smart contract which is used by multiple websites to provide the users.</p>

                            <a href="create-single.html" class="tp-btn-gradient active">upload work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area pt-160 pb-40 p-relative">
        <div class="breadrumb__shape">
            <img class="breadcrumb__shape-1" src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about__area p-relative">
        <div class="about__shape">
            <img class="about__shape-1" src="assets/img/about/shape/about-shape-1.png" alt="">
            <img class="about__shape-2" src="assets/img/about/shape/about-shape-2.png" alt="">
            <img class="about__shape-3" src="assets/img/about/shape/about-shape-3.png" alt="">
            <img class="about__shape-4" src="assets/img/about/shape/about-shape-4.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-md-10">
                    <div class="about__wrapper">
                        <div class="about__content">
                            <div class="about__title-wrapper text-center mb-60">
                                <span class="about__title-pre">About Foundation</span>
                                <h3 class="about__title">We do not create the future. We explore it.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4">
                    <div class="about__thumb-wrapper">
                        <div class="about__thumb w-img">
                            <img src="assets/img/about/about-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8">
                    <div class="row align-items-end">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="about__thumb-wrapper">
                                <div class="about__thumb w-img">
                                    <img src="assets/img/about/about-7.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- about marquee area start -->
    <section class="about__marque">
        <div class="container-fluid p-0">
            <div class="about__marque-inner">
                <div class="row gx-0">
                    <div class="col-xxl-12">
                        <div class="about__marque-wrapper">
                            <div class="about__marque-slider">
                                <div class="about__marque-item">
                                    <p>Créez votre futur en gagnat votre liberté financière.</p>
                                </div>
                                <div class="about__marque-item">
                                    <p>Créez votre futur en gagnat votre liberté financière.</p>
                                </div>
                                <div class="about__marque-item">
                                    <p>Créez votre futur en gagnat votre liberté financière.</p>
                                </div>
                                <div class="about__marque-item">
                                    <p>Créez votre futur en gagnat votre liberté financière.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about marquee area end -->

    <!-- mission area start -->
    <section class="mission__area pb-50">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xxl-8 col-xl-8 col-lg-10">
                    <div class="mission__wrapper">
                        <div class="mission__title-wrapper">
                            <span class="mission__title-pre">Our Mission</span>
                            <p>Chez BuyWay CEO, notre mission est de créer des opportunités exceptionnelles pour nos clients en investissant leurs fonds avec une vision tournée vers l'avenir sur les marchés boursiers. Nous nous engageons à fournir des solutions d'investissement innovantes et à réaliser des rendements supérieurs pour nos clients.

                                Investissement en Bourse Axé sur la Croissance

                            <p>Chez BuyWay CEO, nous croyons en la puissance de l'investissement en bourse pour atteindre des objectifs financiers ambitieux. Notre équipe de professionnels hautement qualifiés et expérimentés analyse minutieusement les tendances du marché et sélectionne des entreprises prometteuses affichant un fort potentiel de croissance. Nous investissons dans des opportunités qui alignent les intérêts de nos clients sur des perspectives de croissance à long terme.

                                Des Rendements Exceptionnels pour Nos Clients.</p>

                            <p>Nous sommes fiers de notre capacité démontrée à générer des rendements extraordinaires pour nos clients. Grâce à notre approche d'investissement stratégique, nous avons permis à de nombreux investisseurs de voir leur capital croître de plus de 500% de leur investissement initial. Cette performance remarquable témoigne de notre dévouement à l'excellence et à la réalisation de succès financiers pour nos clients.

                                Gestion Rigoureuse des Risques</p>

                            <p>Chez BuyWay CEO, nous comprenons l'importance de protéger les actifs de nos clients tout en saisissant les opportunités du marché. Notre approche intègre une gestion rigoureuse des risques, où nous utilisons des stratégies prudentes pour atténuer les impacts potentiels des fluctuations du marché. La préservation du capital de nos clients est une priorité essentielle pour nous.

                                Partenariat et Transparence</p>

                            <p>Nous considérons nos clients comme des partenaires essentiels dans notre aventure d'investissement. Chez BuyWay CEO, la transparence est au cœur de notre relation avec nos clients. Nous entretenons une communication ouverte et honnête, fournissant des rapports détaillés sur la performance de leur portefeuille, les décisions d'investissement et les perspectives du marché.

                                Engagement envers l'Éducation Financière</p>

                            <p> Nous croyons fermement en l'émancipation financière par l'éducation. BuyWay CEO s'engage à fournir des informations approfondies et des ressources éducatives à nos clients, afin de les aider à mieux comprendre les mécanismes de l'investissement en bourse, les risques associés et les opportunités de croissance. Nous encourageons nos clients à prendre des décisions éclairées pour atteindre leurs objectifs financiers.

                                Un Avenir Financier Prospère Ensemble</p>

                            <p>Chez BuyWay CEO, nous sommes animés par une vision de prospérité financière pour nos clients. Notre mission est de continuer à exceller dans la gestion des fonds de nos clients, de fournir des solutions innovantes d'investissement et de créer un avenir financier prospère ensemble. Nous restons déterminés à être un partenaire de confiance dans la réalisation des objectifs financiers de nos clients et à être à l'avant-garde de l'investissement en bourse pour les années à venir. </p>
                        </div>

                        <div class="mission__counter p-relative">
                            <span class="mission__counter-vr-br"></span>
                            <span class="mission__counter-vr-br mission__counter-vr-br-2"></span>
                            <span class="mission__counter-hr-br"></span>
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-1.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4><span class="counter">2018</span></h4>
                                            <p>Depuis le lancement</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start justify-content-md-center">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-2.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4><span class="counter">8</span>M+</h4>
                                            <p>Total utilisateurs</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start justify-content-md-end">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-3.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4><span class="counter">170</span>+</h4>
                                            <p>Total Employés</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-4.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4><span class="counter">650</span>M+</h4>
                                            <p>Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start justify-content-md-center">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-5.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4><span class="counter">57</span></h4>
                                            <p>Pays</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                    <div class="mission__counter-item d-flex align-items-start justify-content-md-end">
                                        <div class="mission__counter-icon mr-10">
                                            <img src="assets/img/icon/counter/counter-6.png" alt="">
                                        </div>
                                        <div class="mission__counter-content">
                                            <h4>$<span class="counter">24</span>B+</h4>
                                            <p>Trading Volume</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission area end -->

    <!-- video area start -->
    <section class="video__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="video__content">
                        <div class="video__thumb w-img">
                            <img src="assets/img/video/video-bg.jpg" alt="">
                            <div class="video__play">
                                <a href="https://www.youtube.com/watch?v=6WQCJx_vEX4" class="video__play-btn popup-video"><i class="fa-solid fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video area end -->

    <!-- team area start -->
    <section class="team__area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper text-center mb-35">
                        <span class="section__title-pre-4">Team Member</span>
                        <h3 class="section__title-4">Meet our team member</h3>
                    </div>
                </div>
            </div>
            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-4 row-cols-md-2">
                <div class="col">
                    <div class="team__item text-center mb-30 transition-3">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="assets/img/team/team-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="profile.html">Bessie Cooper</a>
                            </h3>
                            <p class="team__position">Co-founder</p>

                            <div class="team__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__item text-center mb-30 transition-3">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="assets/img/team/team-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="profile.html">Wade Warren</a>
                            </h3>
                            <p class="team__position">Finance</p>

                            <div class="team__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__item text-center mb-30 transition-3">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="assets/img/team/team-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="profile.html">Esther Howard</a>
                            </h3>
                            <p class="team__position">UI Designer</p>

                            <div class="team__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__item text-center mb-30 transition-3">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="assets/img/team/team-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="profile.html">Guy Hawkins</a>
                            </h3>
                            <p class="team__position">Manager</p>

                            <div class="team__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="team__item text-center mb-30 transition-3">
                        <div class="team__thumb">
                            <a href="#">
                                <img src="assets/img/team/team-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="team__content">
                            <h3 class="team__title">
                                <a href="profile.html">Mark Cuban</a>
                            </h3>
                            <p class="team__position">Co-founder</p>

                            <div class="team__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team__line mt-55 mb-90"></div>
        </div>
    </section>
    <!-- team area end -->

    <!-- brand area start -->
    <section class="brand__area pb-80">
        <div class="container">
            <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 justify-content-center">
                <div class="col">
                    <div class="brand__item mb-30 text-center">
                        <img src="assets/img/brand/2/brand-1.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-2.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-3.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-4.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-5.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-6.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-7.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-8.png" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="brand__item-2 mb-30 text-center">
                        <img src="assets/img/brand/2/brand-9.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->

    <!-- join area start -->
    <section class="join__area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper text-center mb-55">
                        <h3 class="section__title-4 section__title-5">Interested in joining us?</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="join__item text-center mb-30">
                        <div class="join__thumb mb-25">
                            <img src="assets/img/icon/join/join-1.png" alt="">
                        </div>
                        <div class="join__content">
                            <h3 class="join__title">Join our <span>Community</span></h3>

                            <div class="join__social">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-discord"></i></a>
                                <a href="#"><i class="fa-brands fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="join__item text-center mb-30">
                        <div class="join__thumb mb-25">
                            <img src="assets/img/icon/join/join-2.png" alt="">
                        </div>
                        <div class="join__content">
                            <h3 class="join__title">Become a  <span>Creator</span></h3>

                            <div class="join__btn">
                                <a href="register.html" class="tp-btn-4">sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="join__item text-center mb-30">
                        <div class="join__thumb mb-25">
                            <img src="assets/img/icon/join/join-3.png" alt="">
                        </div>
                        <div class="join__content">
                            <h3 class="join__title">Reach out to  <span>our team</span></h3>

                            <div class="join__btn-gradient">
                                <a href="mailto:team@Bitakon.com" class="tp-btn-4">team@Bitakon.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join area end -->

    <!-- share modal start -->
    <div class="share__modal modal fade" id="sharemodal" tabindex="-1" aria-labelledby="sharemodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="share__modal-content text-center">
                    <div class="share__nft-content">
                        <div class="share__thumb">
                            <img src="assets/img/bid/bid-img-1.jpg" alt="">
                        </div>

                    </div>
                    <div class="share__social">
                        <h3>Share this NFT</h3>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- share modal end -->

    <!-- report modal start -->
    <div class="report__modal modal fade" id="reportmodal" tabindex="-1" aria-labelledby="reportmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="report__close">
                    <button type="button" class="report__close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="report__wrapper">
                    <h3 class="report__title">Why are you reporting ?</h3>
                    <p>Describe briefly about your report.</p>
                    <form action="#">
                        <div class="report__input-box">
                            <h4>Message</h4>
                        </div>
                        <div class="report__input">
                            <textarea placeholder="Write your message"></textarea>
                        </div>
                        <div class="report__button">
                            <button type="button" class="tp-btn-square">Send </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- report modal end -->

    <!-- bid popup area start -->
    <div class="bid__modal modal fade" id="bidmodal" tabindex="-1" aria-labelledby="bidmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="bid__modal-close">
                    <button type="button" class="bid__modal-close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="bid__modal">
                    <h3 class="bid__modal-title">Nouvel investissement</h3>
                    <p>Veuillez remplir le formulaire ci dessous pour placer votre investissement</p>

                    <div class="bid__modal-form">
                        <form action="#" method="post">
                            <div class="bid__modal-input">
                                <input type="number" placeholder="Entrez le montant" min="100">
                                <span class="bid__modal-price">USD</span>
                            </div>
                            <div class="login__input-box">
                                <div class="login__input-title">
                                    <h4>Nombre de jour d'investissement <span>*</span></h4>
                                </div>
                                <div class="login__input">
                                    <select name="nbjours" required>
                                        @for($i=1; $i<=30; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="bid__modal-btn">
                                <button type="submit" class="tp-btn-3">Place bid</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

