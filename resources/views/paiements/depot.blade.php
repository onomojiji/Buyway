@extends('layouts.app')

@section("title")
    Dépôt
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
                <div class="col-xxl-7 col-xl-7 col-lg-8">
                    <div class="login__wrapper">
                        <div class="login__shape">
                            <img class="login__shape-1" src="assets/img/login/login-person.png" alt="">
                            <img class="login__shape-2" src="assets/img/login/login-shape-1.png" alt="">
                            <img class="login__shape-3" src="assets/img/login/login-shape-2.png" alt="">
                            <img class="login__shape-4" src="assets/img/login/login-shape-3.png" alt="">
                        </div>
                        <div class="login__top text-center">
                            <h3>Recharche du compte</h3>
                            <p>Veuillez remplir ce formulaire et valider pour la suite</p>
                        </div>

                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{$error}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach

                        @if(session("success"))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session("success")}}</strong>
                                <strong>
                                    <span>
                                        Veuillez éffectuer un dépôt <span class="text-primary">{{session("mode")}}</span> de <span class="text-primary">{{session("montant")}}</span> au numéro <span class="text-primary">{{session("numero")}}</span>  puis
                                    </span>
                                    <a href=" https://wa.me/699653467?text={{session("reference")}}" class="link-primary text-decoration-underline">
                                        cliquez ici
                                    </a>
                                    <span>
                                        pour envoyer les preuves de votre opération pour valider votre transaction
                                    </span>
                                </strong>
                            </div>
                        @elseif(session("fail"))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{session("fail")}}</strong>
                                <button  type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="login__form">
                            <form action="{{route("depot.store")}}" method="post">
                                @csrf
                                <div class="login__input-box">
                                    <div class="login__input-title">
                                        <h4>Montant en USD <span>*</span></h4>
                                    </div>
                                    <div class="login__input">
                                        <input type="number" placeholder="Entrer le montant du dépôt" name="montant" required min="100">
                                        <span class="login__input-icon">
                                       <i class="fa-light fa-input-numeric"></i>
                                    </span>
                                        <span class="bid__modal-price">USD</span>
                                    </div>
                                </div>

                                <div class="login__input-box">
                                    <div class="login__input-title">
                                        <h4>Mode de paiement <span>*</span></h4>
                                    </div>
                                    <ul class="list">
                                        @foreach($mode_paiement as $mp)
                                            <li class="list-group-item mb-3">
                                                <input class="form-radio" id="{{$mp->id}}" type="radio" value="{{$mp->id}}" name="mode_paiement" checked>
                                                <label for="{{$mp->id}}" class="fw-bold">
                                                    {{" ".$mp->nom." "}}
                                                    <img src="{{asset($mp->icon)}}" alt="" width="auto" height="100px">
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="login__btn mb-20">
                                    <button class="tp-btn-4 w-100">Suivant</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->


@endsection
