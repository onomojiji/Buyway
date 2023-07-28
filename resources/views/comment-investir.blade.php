@extends('layouts.app')

@section("title")
    Comment investir
@endsection

@section("content")
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area breadcrumb__border pt-160 pb-85 p-relative">
        <div class="breadrumb__shape">
            <img class="breadcrumb__shape-1" src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">Comment investir ?</h3>
                        <div class="breadcrumb__list">
                            <span><a href="{{route("home")}}">Accueil</a></span>
                            <span class="dvdr tp-dot"><i class="fa-solid fa-period"></i></span>
                            <span>Comment investir ?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- support area start -->
    <section class="support__area pt-120 pb-120">
        <div class="container tp-container">
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="features__item mb-30 theme-bg-dark">
                        <div class="features__item-inner">
                            <div class="features__icon">
                                <img class="dark" src="assets/img/icon/features/features-icon-1.png" alt="">
                                <img class="light" src="assets/img/icon/features/features-icon-1-light.png" alt="">
                            </div>
                            <div class="features__content">
                                <h4 class="features__title">
                                    Grow your digital art Historique
                                </h4>
                                <p>Add new, trending and rare artwork to your Historique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="features__item mb-30 yellow-bg theme-bg-dark">
                        <div class="features__item-inner">
                            <div class="features__icon">
                                <img class="dark" src="assets/img/icon/features/features-icon-2.png" alt="">
                                <img class="light" src="assets/img/icon/features/features-icon-2-light.png" alt="">
                            </div>
                            <div class="features__content">
                                <h4 class="features__title">
                                    Earn money dy trading NFTs
                                </h4>
                                <p>Get paid by selling NFTs with secured payment methods.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="features__item mb-30 green-bg theme-bg-dark">
                        <div class="features__item-inner">
                            <div class="features__icon">
                                <img class="dark" src="assets/img/icon/features/features-icon-3.png" alt="">
                                <img class="light" src="assets/img/icon/features/features-icon-3-light.png" alt="">
                            </div>
                            <div class="features__content">
                                <h4 class="features__title">
                                    Discover <br> Top artists & Creators
                                </h4>
                                <p>Explore beautiful digital art by talented artists from around the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div class="features__item mb-30 pink-bg theme-bg-dark">
                        <div class="features__item-inner">
                            <div class="features__icon">
                                <img class="dark" src="assets/img/icon/features/features-icon-4.png" alt="">
                                <img class="light" src="assets/img/icon/features/features-icon-4-light.png" alt="">
                            </div>
                            <div class="features__content">
                                <h4 class="features__title">
                                    Buy and sell your <br> NFTs
                                </h4>
                                <p>Easily buy and sell your NFTs in the largest marketplace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support area end -->

    <!-- faq area start -->
    <section class="faq__area pb-110">
        <div class="container tp-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq__tab-content">
                        <div class="accordion" id="sale-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Which plan should I choose?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#sale-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Do you offer custom services & development?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#sale-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How To create NFT?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sale-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How to place bid?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#sale-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How to connect compte?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#sale-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq__tab-content">
                        <div class="accordion" id="template-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Do you offer custom services & development?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#template-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSev">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSev" aria-expanded="false" aria-controls="collapseSev">
                                        What are your office hours?
                                    </button>
                                </h2>
                                <div id="collapseSev" class="accordion-collapse collapse" aria-labelledby="headingSev" data-bs-parent="#template-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEig">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEig" aria-expanded="false" aria-controls="collapseEig">
                                        Can I get support for the free version?
                                    </button>
                                </h2>
                                <div id="collapseEig" class="accordion-collapse collapse" aria-labelledby="headingEig" data-bs-parent="#template-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Do your products support RTL?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#template-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        Which plan should I choose?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#template-accordion">
                                    <div class="accordion-body">
                                        <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end -->

    <!-- marque text area start -->
    <div class="marque__area">
        <div class="container">
            <div class="marque__inner p-relative">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="marque__wrapper">
                            <div class="marque__slider">
                                <div class="marque__item ">
                                    <p>Discover  &  Callect  Extraordinary  Digital  Art  and  Rare   NFT’s</p>
                                </div>
                                <div class="marque__item">
                                    <p>Discover  &  Callect  Extraordinary  Digital  Art  and  Rare   NFT’s</p>
                                </div>
                                <div class="marque__item">
                                    <p>Discover  &  Callect  Extraordinary  Digital  Art  and  Rare   NFT’s</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- marque text area end -->

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
