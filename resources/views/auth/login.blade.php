@extends('layouts.app')

@section("title")
    Connexion
@endsection

@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb__area pt-120 p-relative">
        <div class="breadrumb__shape">
            <img class="breadcrumb__shape-1" src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- login area start -->
    <section class="login__area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8">
                    <div class="login__wrapper">
                        <div class="login__shape">
                            <img class="login__shape-1" src="assets/img/login/login-person.png" alt="">
                            <img class="login__shape-2" src="assets/img/login/login-shape-1.png" alt="">
                            <img class="login__shape-3" src="assets/img/login/login-shape-2.png" alt="">
                            <img class="login__shape-4" src="assets/img/login/login-shape-3.png" alt="">
                        </div>
                        <div class="login__top text-center">
                            <h3>Connexion</h3>
                            <p>Vous n'avez pas de compte ? <a href="{{route("inscription.create")}}">Inscrivez-vous</a></p>
                        </div>

                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{$error}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach

                        <div class="login__form">
                            <form action="{{route("connexion.store")}}" method="post">
                                @csrf
                                <div class="login__input-box">
                                    <div class="login__input-title">
                                        <h4>Adresse email <span>*</span></h4>
                                    </div>
                                    <div class="login__input">
                                        <input type="text" placeholder="Entrer votre adresse email" name="email" required>
                                        <span class="login__input-icon">
                                       <i class="fa-light fa-envelope"></i>
                                    </span>
                                    </div>
                                </div>
                                <div class="login__input-box">
                                    <div class="login__input-title d-flex align-items-center justify-content-between">
                                        <h4>Mot de passe <span>*</span></h4>
                                        <div class="forgot-password">
                                            <a href="#">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                    <div class="login__input">
                                        <input type="password" placeholder="Entrer votre mot de passe" name="password" required>
                                        <span class="login__input-icon">
                                       <i class="fa-light fa-lock"></i>
                                    </span>
                                        <span class="login__input-password-visible">
                                       <i class="fa-light fa-eye"></i>
                                    </span>
                                    </div>
                                </div>

                                <div class="login__btn mb-20">
                                    <button class="tp-btn-4 w-100">Se connecter</button>
                                </div>
                                <div class="login__signup text-center">
                                    <p>Ou <a href="{{route("inscription.create")}}">Incrivez vous</a> avec votre adresse email</p>
                                </div>
                                <div class="login__option-wrapper">
                                    <div class="login__option-item mb-15">
                                        <a href="#" class="login__option-btn w-100"><img src="assets/img/icon/google.png" alt=""> Continuer avec Google</a>
                                    </div>
                                    <div class="login__option-item">
                                        <a href="#" class="login__option-btn w-100"><img src="assets/img/icon/facebook.png" alt=""> Continuer avec Facebook</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->

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
                    <p>Describe briefly A propos your report.</p>
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
                    <h3 class="bid__modal-title">Place your bid</h3>
                    <p>You are A propos to place bid on this product</p>

                    <div class="bid__modal-form">
                        <form action="#">
                            <div class="bid__modal-input">
                                <input type="text" placeholder="Enter your bid">
                                <span class="bid__modal-price">ETH</span>
                            </div>
                            <div class="bid__modal-info">
                                <p>Your Balance <span>254 ETH</span></p>
                                <p>Service fee <span>10 ETH</span></p>
                                <p>Total <span class="color-theme">264 ETH</span></p>
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
    <!-- bid popup area end -->

@endsection
