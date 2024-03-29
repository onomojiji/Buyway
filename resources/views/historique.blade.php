@extends('layouts.app')

@section("title")
    Historique des transactions
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
                        <h3 class="breadcrumb__title">Historique</h3>
                        <div class="breadcrumb__list">
                            <span><a href="{{route("home")}}">Accueil</a></span>
                            <span class="dvdr tp-dot"><i class="fa-solid fa-period"></i></span>
                            <span>Historique</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- historique area start -->
    <section class="historique__area pt-80 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="historique__wrapper mr-60">
                        <div class="historique__item d-md-flex align-items-center justify-content-between mb-10">
                            <div class="historique__item-inner d-flex align-items-center">
                                <div class="historique__thumb mr-20">
                                    <a href="product-details.html">
                                        <img src="assets/img/historique/user-1.jpg" alt="">
                                    </a>
                                    <span class="historique__tag">
                                   <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.6691 6.54838L6.55412 10.6634C6.44752 10.7701 6.32092 10.8547 6.18158 10.9125C6.04223 10.9703 5.89287 11 5.74203 11C5.59119 11 5.44182 10.9703 5.30248 10.9125C5.16313 10.8547 5.03654 10.7701 4.92994 10.6634L0 5.73916V0H5.73916L10.6691 4.92994C10.8829 5.145 11.0029 5.43592 11.0029 5.73916C11.0029 6.0424 10.8829 6.33332 10.6691 6.54838Z" fill="white"/>
                                    <path d="M2.86914 2.8696H2.87542" stroke="#006EED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                </div>
                                <div class="historique__content">
                                    <h3 class="historique__title">
                                        <a href="product-details.html">Brave Tigers NFT</a>
                                    </h3>
                                    <p>1 edition listed by <a href="profile.html">@xander_hall</a> for <span>0.048 ETH</span>  each</p>
                                </div>
                            </div>
                            <div class="historique__status">
                                <p>just now</p>
                            </div>
                        </div>
                        <div class="historique__item d-md-flex align-items-center justify-content-between mb-10">
                            <div class="historique__item-inner d-flex align-items-center">
                                <div class="historique__thumb mr-20">
                                    <a href="product-details.html">
                                        <img src="assets/img/historique/user-2.jpg" alt="">
                                    </a>
                                    <span class="historique__tag heart">
                                   <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.53247 8.14011e-05C3.88684 0.0101653 4.22996 0.068059 4.5624 0.173847H4.59559C4.61809 0.183847 4.63496 0.194899 4.64621 0.204899C4.77052 0.242267 4.88808 0.284371 5.00058 0.342265L5.21433 0.431737C5.2987 0.473842 5.39995 0.552261 5.4562 0.584366C5.51245 0.615418 5.57433 0.647523 5.62495 0.683838C6.24988 0.237004 7.00869 -0.00509763 7.79055 8.14011e-05C8.14549 8.14011e-05 8.49986 0.0470068 8.83679 0.152794C10.913 0.784363 11.6611 2.91591 11.0361 4.77903C10.6818 5.73112 10.1024 6.60006 9.3436 7.31004C8.25742 8.29424 7.0655 9.16791 5.78245 9.92053L5.64183 10L5.49558 9.91526C4.20803 9.16791 3.00935 8.29424 1.91305 7.30478C1.15931 6.59479 0.579378 5.73112 0.219382 4.77903C-0.416236 2.91591 0.331881 0.784363 2.43055 0.141742C2.59367 0.0891113 2.76186 0.0522698 2.9306 0.0317439H2.9981C3.15616 0.0101653 3.3131 8.14011e-05 3.4706 8.14011e-05H3.53247ZM8.54429 1.6633C8.31367 1.58909 8.06055 1.7054 7.97618 1.92645C7.89743 2.1475 8.02118 2.3896 8.25742 2.46802C8.61798 2.59433 8.85929 2.92643 8.85929 3.29432V3.31064C8.8486 3.43116 8.88742 3.54747 8.96617 3.63695C9.04491 3.72642 9.16304 3.77852 9.28679 3.78958C9.51741 3.78379 9.71428 3.61063 9.73116 3.38906V3.32643C9.74803 2.58907 9.27047 1.92119 8.54429 1.6633Z" fill="white"/>
                                    </svg>
                                 </span>
                                </div>
                                <div class="historique__content">
                                    <h3 class="historique__title">
                                        <a href="product-details.html">Brave Tigers NFT</a>
                                    </h3>
                                    <p>like by <a href="profile.html">@CloneX_1070</a></p>
                                </div>
                            </div>
                            <div class="historique__status">
                                <p>just now</p>
                            </div>
                        </div>
                        <div class="historique__item d-md-flex align-items-center justify-content-between mb-10">
                            <div class="historique__item-inner d-flex align-items-center">
                                <div class="historique__thumb mr-20">
                                    <a href="product-details.html">
                                        <img src="assets/img/historique/user-3.jpg" alt="">
                                    </a>
                                    <span class="historique__tag check">
                                   <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.1818 1L4.18182 8L1 4.81818" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                </div>
                                <div class="historique__content">
                                    <h3 class="historique__title">
                                        <a href="product-details.html">Based Mafia</a>
                                    </h3>
                                    <p>started following <a href="profile.html">@Ruüd van</a></p>
                                </div>
                            </div>
                            <div class="historique__status">
                                <p>just now</p>
                            </div>
                        </div>
                        <div class="historique__item d-md-flex align-items-center justify-content-between mb-10">
                            <div class="historique__item-inner d-flex align-items-center">
                                <div class="historique__thumb mr-20">
                                    <a href="product-details.html">
                                        <img src="assets/img/historique/user-4.jpg" alt="">
                                    </a>
                                    <span class="historique__tag bid">
                                   <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.9372 11.1824C12.8366 11.283 12.7092 11.3299 12.5817 11.3299C12.4543 11.3299 12.3269 11.283 12.2262 11.1824L8.90625 7.86238L9.26173 7.5069L9.6172 7.15143L12.9372 10.4714C13.1317 10.6659 13.1317 10.9879 12.9372 11.1824Z" fill="white"/>
                                    <path d="M3.50116 4.63624L7.39126 8.52634C7.65283 8.78791 7.65283 9.21046 7.39126 9.47203L6.78762 10.0824C6.24435 10.6189 5.38584 10.6189 4.84928 10.0824L1.93841 7.17151C1.40855 6.64165 1.40855 5.77644 1.93841 5.23987L2.54875 4.62953C2.81033 4.37466 3.23958 4.37466 3.50116 4.63624Z" fill="white"/>
                                    <path d="M11.6304 5.24661L9.07497 7.79529C8.80668 8.06358 8.37743 8.06358 8.10915 7.79529L4.23246 3.91861C3.96418 3.65032 3.96418 3.22107 4.23246 2.95279L6.78786 0.397394C7.31771 -0.132465 8.18293 -0.132465 8.71949 0.397394L11.6304 3.30826C12.1602 3.84483 12.1602 4.70333 11.6304 5.24661Z" fill="white"/>
                                    <path d="M4.52727 13H0.50303C0.22804 13 0 12.772 0 12.497C0 12.222 0.22804 11.994 0.50303 11.994H4.52727C4.80226 11.994 5.0303 12.222 5.0303 12.497C5.0303 12.772 4.80226 13 4.52727 13Z" fill="white"/>
                                    </svg>
                                 </span>
                                </div>
                                <div class="historique__content">
                                    <h3 class="historique__title">
                                        <a href="product-details.html">New Year Evangelist</a>
                                    </h3>
                                    <p>bid cancelled by <a href="profile.html">@Benjamin_025</a></p>
                                </div>
                            </div>
                            <div class="historique__status">
                                <p>just now</p>
                            </div>
                        </div>
                        <div class="historique__item d-md-flex align-items-center justify-content-between mb-10">
                            <div class="historique__item-inner d-flex align-items-center">
                                <div class="historique__thumb mr-20">
                                    <a href="product-details.html">
                                        <img src="assets/img/historique/user-5.jpg" alt="">
                                    </a>
                                    <span class="historique__tag eth">
                                    <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M9.25288 7.12967L4.87826 0V5.17527L8.70826 6.88648L4.87826 5.1763V9.66948L9.25288 7.12981L9.25302 7.12985L9.25298 7.12976L9.25302 7.12971L9.25288 7.12967ZM4.87709 5.17527V0L0.503024 7.12967L0.502931 7.12971L0.502978 7.12976L0.502931 7.12985L0.503071 7.12981L4.87709 9.66948V5.1763L1.0476 6.88648L4.87709 5.17527ZM4.87709 10.4835V14L0.5 7.94431L4.87709 10.4835ZM4.87826 10.4829V14L9.25302 7.94431L4.87826 10.4829Z" fill="white"/>
                                       </svg>
                                 </span>
                                </div>
                                <div class="historique__content">
                                    <h3 class="historique__title">
                                        <a href="product-details.html">Chickolatev2</a>
                                    </h3>
                                    <p>purchased by <a href="profile.html"> @Ruüd van</a>  for <span>0.2 ETH</span> from <a href="profile.html">@xander_hall</a></p>
                                </div>
                            </div>
                            <div class="historique__status">
                                <p>just now</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="historique__sidebar mr-10">
                        <div class="historique__widget">
                            <h3 class="historique__widget-title">Filter by Tags</h3>

                            <div class="historique__filter-tag">
                                <a href="#">
                                    <svg width="12" height="12" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6691 6.54838L6.55412 10.6634C6.44752 10.7701 6.32092 10.8547 6.18158 10.9125C6.04223 10.9703 5.89287 11 5.74203 11C5.59119 11 5.44182 10.9703 5.30248 10.9125C5.16313 10.8547 5.03654 10.7701 4.92994 10.6634L0 5.73916V0H5.73916L10.6691 4.92994C10.8829 5.145 11.0029 5.43592 11.0029 5.73916C11.0029 6.0424 10.8829 6.33332 10.6691 6.54838Z" fill="#8D8D8D"/>
                                        <path d="M2.86914 2.8696H2.87542" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Listings
                                </a>
                                <a href="#">
                                    <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.25288 7.12967L4.87826 0V5.17527L8.70826 6.88648L4.87826 5.1763V9.66948L9.25288 7.12981L9.25302 7.12985L9.25298 7.12976L9.25302 7.12971L9.25288 7.12967ZM4.87709 5.17527V0L0.503024 7.12967L0.502931 7.12971L0.502978 7.12976L0.502931 7.12985L0.503071 7.12981L4.87709 9.66948V5.1763L1.0476 6.88648L4.87709 5.17527ZM4.87709 10.4835V14L0.5 7.94431L4.87709 10.4835ZM4.87826 10.4829V14L9.25302 7.94431L4.87826 10.4829Z" fill="white"/>
                                    </svg>
                                    Purchase
                                </a>
                                <a href="#">
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.9372 11.1824C12.8366 11.283 12.7092 11.3299 12.5817 11.3299C12.4543 11.3299 12.3269 11.283 12.2262 11.1824L8.90625 7.86238L9.26173 7.5069L9.6172 7.15143L12.9372 10.4714C13.1317 10.6659 13.1317 10.9879 12.9372 11.1824Z" fill="white"/>
                                        <path d="M3.50116 4.63624L7.39126 8.52634C7.65283 8.78791 7.65283 9.21046 7.39126 9.47203L6.78762 10.0824C6.24435 10.6189 5.38584 10.6189 4.84928 10.0824L1.93841 7.17151C1.40855 6.64165 1.40855 5.77644 1.93841 5.23987L2.54875 4.62953C2.81033 4.37466 3.23958 4.37466 3.50116 4.63624Z" fill="white"/>
                                        <path d="M11.6304 5.24661L9.07497 7.79529C8.80668 8.06358 8.37743 8.06358 8.10915 7.79529L4.23246 3.91861C3.96418 3.65032 3.96418 3.22107 4.23246 2.95279L6.78786 0.397394C7.31771 -0.132465 8.18293 -0.132465 8.71949 0.397394L11.6304 3.30826C12.1602 3.84483 12.1602 4.70333 11.6304 5.24661Z" fill="white"/>
                                        <path d="M4.52727 13H0.50303C0.22804 13 0 12.772 0 12.497C0 12.222 0.22804 11.994 0.50303 11.994H4.52727C4.80226 11.994 5.0303 12.222 5.0303 12.497C5.0303 12.772 4.80226 13 4.52727 13Z" fill="white"/>
                                    </svg>
                                    Bids
                                </a>
                                <a href="#">
                                    <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.53247 8.14011e-05C3.88684 0.0101653 4.22996 0.068059 4.5624 0.173847H4.59559C4.61809 0.183847 4.63496 0.194899 4.64621 0.204899C4.77052 0.242267 4.88808 0.284371 5.00058 0.342265L5.21433 0.431737C5.2987 0.473842 5.39995 0.552261 5.4562 0.584366C5.51245 0.615418 5.57433 0.647523 5.62495 0.683838C6.24988 0.237004 7.00869 -0.00509763 7.79055 8.14011e-05C8.14549 8.14011e-05 8.49986 0.0470068 8.83679 0.152794C10.913 0.784363 11.6611 2.91591 11.0361 4.77903C10.6818 5.73112 10.1024 6.60006 9.3436 7.31004C8.25742 8.29424 7.0655 9.16791 5.78245 9.92053L5.64183 10L5.49558 9.91526C4.20803 9.16791 3.00935 8.29424 1.91305 7.30478C1.15931 6.59479 0.579378 5.73112 0.219382 4.77903C-0.416236 2.91591 0.331881 0.784363 2.43055 0.141742C2.59367 0.0891113 2.76186 0.0522698 2.9306 0.0317439H2.9981C3.15616 0.0101653 3.3131 8.14011e-05 3.4706 8.14011e-05H3.53247ZM8.54429 1.6633C8.31367 1.58909 8.06055 1.7054 7.97618 1.92645C7.89743 2.1475 8.02118 2.3896 8.25742 2.46802C8.61798 2.59433 8.85929 2.92643 8.85929 3.29432V3.31064C8.8486 3.43116 8.88742 3.54747 8.96617 3.63695C9.04491 3.72642 9.16304 3.77852 9.28679 3.78958C9.51741 3.78379 9.71428 3.61063 9.73116 3.38906V3.32643C9.74803 2.58907 9.27047 1.92119 8.54429 1.6633Z" fill="white"/>
                                    </svg>
                                    Likes
                                </a>
                                <a href="#">
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6745 8.55304L9.23438 12" stroke="#8D8D8D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 8.55304H12.6729" stroke="#8D8D8D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M1 4.44694L4.44008 1" stroke="#8D8D8D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.6729 4.44693H1" stroke="#8D8D8D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Transfer
                                </a>
                                <a href="#">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3427 2.14922H10.1027L8.07497 0.121484C7.91299 -0.0404948 7.64902 -0.0404948 7.48104 0.121484C7.31906 0.283464 7.31906 0.54743 7.48104 0.715408L8.91486 2.14922H3.0836L4.51742 0.715408C4.6794 0.553429 4.6794 0.289463 4.51742 0.121484C4.35544 -0.0404948 4.09148 -0.0404948 3.9235 0.121484L1.90176 2.14922H1.66179C1.12186 2.14922 0 2.14922 0 3.68503C0 4.26695 0.119985 4.6509 0.371952 4.90287C0.515934 5.05285 0.689912 5.13084 0.875888 5.17284C1.04987 5.21483 1.23584 5.22083 1.41582 5.22083H10.5826C10.7686 5.22083 10.9426 5.20883 11.1106 5.17284C11.6145 5.05285 11.9985 4.6929 11.9985 3.68503C11.9985 2.14922 10.8766 2.14922 10.3427 2.14922Z" fill="#8D8D8D"/>
                                        <path d="M10.23 6.00076H1.72309C1.35114 6.00076 1.06917 6.33072 1.12917 6.69667L1.6331 9.78028C1.80108 10.8121 2.25102 12 4.24877 12H7.61434C9.63608 12 9.99603 10.9861 10.212 9.85227L10.8179 6.71467C10.8899 6.34272 10.608 6.00076 10.23 6.00076ZM5.16665 9.87027C5.16665 10.1042 4.98067 10.2902 4.7527 10.2902C4.51873 10.2902 4.33276 10.1042 4.33276 9.87027V7.89052C4.33276 7.66255 4.51873 7.47057 4.7527 7.47057C4.98067 7.47057 5.16665 7.66255 5.16665 7.89052V9.87027ZM7.73432 9.87027C7.73432 10.1042 7.54834 10.2902 7.31437 10.2902C7.0864 10.2902 6.89443 10.1042 6.89443 9.87027V7.89052C6.89443 7.66255 7.0864 7.47057 7.31437 7.47057C7.54834 7.47057 7.73432 7.66255 7.73432 7.89052V9.87027Z" fill="#8D8D8D"/>
                                    </svg>
                                    Sales
                                </a>
                                <a href="#">
                                    <svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1818 1L4.18182 8L1 4.81818" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Followings
                                </a>
                            </div>
                            <div class="historique__filter-reset">
                                <button type="button">Reset filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- historique area end -->

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
