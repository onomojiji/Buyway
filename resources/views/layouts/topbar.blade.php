<!-- header area start -->
<header>
    <div id="header-sticky" class="header__area header__padding header__transparent header__style-2 header__border header__sticky">
        <div class="container">
            <div class="header__wrapper p-relative">
                <div class="row align-items-center">
                    <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-6 col-4">
                        <div class="logo header__logo">
                            <a href="{{route("home")}}">
                                <img class="logo-white" src="{{asset("assets/img/logo/logo.png")}}" alt="logo">
                                <img class="logo-black" src="{{asset("assets/img/logo/logo-black.png")}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-5 d-none d-lg-block">
                        <div class="header__menu-wrapper d-flex align-items-center ml-10">
                            <div class="header__search mr-30 ml-5">
                                <form action="#">
                                    <div class="header__search-input">
                                        <input type="text" placeholder="Search">
                                        <button type="submit" class="header__search-btn">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{route("home")}}">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="{{route("historique")}}">Historique</a>
                                        </li>
                                        <li>
                                            <a href="{{route("comment-investir")}}">Comment investir ?</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-6 col-8">
                        <div class="header__right-wrapper d-flex justify-content-end align-items-center">

                            @if(\Illuminate\Support\Facades\Auth::user() == null)
                                <div class="login__btn">
                                    <a href="{{route("connexion.create")}}" class="tp-btn-4 w-100">Connectez vous</a>
                                </div>

                            @else
                                <div class="header__right d-none d-sm-flex justify-content-end align-items-center">
                                    <div class="compte__dropdown-user-content">
                                        <h4>{{\Illuminate\Support\Facades\Auth::user()->prenom. " ". \Illuminate\Support\Facades\Auth::user()->nom}}</h4>
                                    </div>
                                </div>
                                <div class="header__compte-wrapper d-none d-sm-flex" id="header__user">

                                    <div class="header__user ml-10">
                                        <a href="#">
                                            <img src="assets/img/user/user.jpg" alt="">
                                        </a>

                                        <div class="compte__dropdown tp-compte-dropdown">
                                            <div class="compte__dropdown-cover">
                                                <img src="assets/img/user/user-cover.png" alt="">
                                            </div>
                                            <div class="compte__dropdown-top d-flex align-items-end">
                                                <div class="compte__dropdown-user mr-15">
                                                    <img src="assets/img/user/user.jpg" alt="">
                                                </div>
                                                <div class="compte__dropdown-user-content">
                                                    <h4>{{\Illuminate\Support\Facades\Auth::user()->prenom. " ". \Illuminate\Support\Facades\Auth::user()->nom}}</h4>
                                                </div>
                                            </div>
                                            <div class="compte__dropdown-balance">
                                                <p>Solde: <span>{{number_format(\Illuminate\Support\Facades\Auth::user()->solde, 2)." Fcfa"}}</span></p>
                                            </div>
                                            <div class="compte__dropdown-action">
                                                <ul>
                                                    <li>
                                                        <a href="profile.html"><i class="fa-regular fa-upload"></i> Recharger</a>
                                                    </li>
                                                    <li>
                                                        <a href="edit-profile.html"><i class="fa-regular fa-download"></i> Retirer</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route("logout")}}" method="post">
                                                            @csrf
                                                            <button class="text-opacity-75 text-light" type="submit"><i class="fa-regular fa-arrow-right-from-bracket"></i> Se déconnecter</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header__user header__user-login ml-30" id="header__user-login">
                                    <a href="#">
                                        <img src="assets/img/user/user-2.jpg" alt="">
                                    </a>

                                    <div class="compte__dropdown">
                                        <div class="compte__dropdown-cover">
                                            <img src="assets/img/user/user-cover.png" alt="">
                                        </div>
                                        <div class="compte__dropdown-top d-flex align-items-end">
                                            <div class="compte__dropdown-user mr-15">
                                                <img src="assets/img/user/user-2.jpg" alt="">
                                            </div>
                                            <div class="compte__dropdown-user-content">
                                                <h4>Robin Milford</h4>
                                            </div>
                                        </div>
                                        <div class="compte__dropdown-action">
                                            <ul>
                                                <li>
                                                    <a href="profile.html"><i class="fa-regular fa-envelope"></i>Recharger</a>
                                                </li>
                                                <li>
                                                    <a href="edit-profile.html"><i class="fa-regular fa-gear"></i>Retirer</a>
                                                </li>
                                                <li>
                                                    <form action="{{route("logout")}}" method="post">
                                                        @csrf
                                                        <button class="text-opacity-75 text-light" type="submit"><i class="fa-regular fa-arrow-right-from-bracket"></i>Se déconnecter</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="header__bar ml-10 d-xl-none">
                                    <button type="button" class="hamurger-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
