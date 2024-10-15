    <!-- Mobile Header -->
    <div class="header-mobile header_sticky">
        <div class="container d-flex align-items-center h-100">
            <a class="mobile-nav-activator d-block position-relative" href="#">
                <svg class="nav-icon" width="25" height="18" viewBox="0 0 25 18" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon_nav" />
                </svg>
                <span class="btn-close-lg position-absolute top-0 start-0 w-100"></span>
            </a>

            <div class="logo">
                <a href="index.html">
                    @if ($configData)
                        <img src="{{ asset('files/config/' . $configData->logo) }}" alt="Uomo"
                            class="logo__image d-block">
                    @endif
                </a>
            </div><!-- /.logo -->

            <a href="#" class="header-tools__item header-tools__cart js-open-aside" data-aside="cartDrawer">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.2236 12.5257C19.6384 9.40452 19.3458 7.84393 18.2349 6.92196C17.124 6 15.5362 6 12.3606 6H11.6394C8.46386 6 6.87608 6 5.76518 6.92196C4.65428 7.84393 4.36167 9.40452 3.77645 12.5257C2.95353 16.9146 2.54207 19.1091 3.74169 20.5545C4.94131 22 7.17402 22 11.6394 22H12.3606C16.826 22 19.0587 22 20.2584 20.5545C20.9543 19.7159 21.108 18.6252 20.9537 17"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="#000000"
                        stroke-width="1.5" stroke-linecap="round" />
                </svg>
                <span class="cart-amount d-block position-absolute js-cart-items-count" id="total-cart-item">0</span>
            </a>
        </div><!-- /.container -->

        <nav
            class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto">
            <div class="container">
                <form action="https://uomo-html.flexkitux.com/Demo2/search.html" method="GET"
                    class="search-field position-relative mt-4 mb-3">
                    <div class="position-relative">
                        <input class="search-field__input w-100 border rounded-1" type="text" name="search-keyword"
                            placeholder="Search products">
                        <button class="btn-icon search-popup__submit pb-0 me-2" type="submit">
                            <svg class="d-block" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_search" />
                            </svg>
                        </button>
                        <button class="btn-icon btn-close-lg search-popup__reset pb-0 me-2" type="reset"></button>
                    </div>

                    <div class="position-absolute start-0 top-100 m-0 w-100">
                        <div class="search-result"></div>
                    </div>
                </form>
            </div>

            <div class="container">
                <div class="overflow-hidden">
                    <ul class="navigation__list list-unstyled position-relative">
                        <li class="navigation__item">
                            <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Home<svg
                                    class="ms-auto" width="7" height="11" viewBox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link js-nav-right d-flex align-items-center">Shop<svg
                                    class="ms-auto" width="7" height="11" viewBox="0 0 7 11"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use href="#icon_next_sm" />
                                </svg></a>
                        </li>


                        <li class="navigation__item">
                            <a href="contact.html" class="navigation__link">Contact</a>
                        </li>

                        <li class="navigation__item">
                            <a href="about.html" class="navigation__link">About</a>
                        </li>

                    </ul><!-- /.navigation__list -->
                </div><!-- /.overflow-hidden -->
            </div><!-- /.container -->

            <div class="border-top mt-auto pb-2">
                <div class="customer-links container mt-4 mb-2 pb-1">
                    <svg class="d-inline-block align-middle" width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon_user" />
                    </svg>
                    <span class="d-inline-block ms-2 text-uppercase align-middle fw-medium">My Account</span>
                </div>

                <div class="container d-flex align-items-center">
                    <label for="footerSettingsLanguage_mobile" class="me-2 text-secondary">Language</label>
                    <select id="footerSettingsLanguage_mobile"
                        class="form-select form-select-sm bg-transparent border-0" aria-label="Default select example"
                        name="store-language">
                        <option class="footer-select__option" selected>United Kingdom | English</option>
                        <option class="footer-select__option" value="1">United States | English</option>
                        <option class="footer-select__option" value="2">German</option>
                        <option class="footer-select__option" value="3">French</option>
                        <option class="footer-select__option" value="4">Swedish</option>
                    </select>
                </div>

                <div class="container d-flex align-items-center">
                    <label for="footerSettingsCurrency_mobile" class="me-2 text-secondary">Currency</label>
                    <select id="footerSettingsCurrency_mobile"
                        class="form-select form-select-sm bg-transparent border-0" aria-label="Default select example"
                        name="store-language">
                        <option selected>$ USD</option>
                        <option value="1">£ GBP</option>
                        <option value="2">€ EURO</option>
                    </select>
                </div>

                <ul class="container social-links list-unstyled d-flex flex-wrap mb-0">
                    <li>
                        <a href="https://www.facebook.com/" class="footer__social-link d-block ps-0">
                            <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_instagram" width="14" height="13"
                                viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" class="footer__social-link d-block">
                            <svg class="svg-icon svg-icon_pinterest" width="14" height="15"
                                viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav><!-- /.navigation -->
    </div>

    <!-- Header Type 2 -->
    <header id="header" class="header header-fullwidth header-transparent-bg">
        <div class="header-top d-flex bg-black color-white align-items-center">
            <ul class="list-unstyled d-flex flex-1 gap-3 m-0">
                <li><a href="#" class="menu-link menu-link_us-s color-white">FAQ</a></li>
                <li><a href="#" class="menu-link menu-link_us-s color-white">Contact</a></li>
                <li><a href="#" class="menu-link menu-link_us-s color-white">Track Order</a></li>
            </ul>
            <p class="mx-auto mb-0">FREE SHIPPING WORLDWIDE</p>
            <div class="heeader-top__right flex-1 d-flex gap-1 justify-content-end">
                <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
                    <li>
                        <a href="#" class="footer__social-link d-block color-white">
                            <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block color-white">
                            <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block color-white">
                            <svg class="svg-icon svg-icon_instagram" width="14" height="13"
                                viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="footer__social-link d-block color-white">
                            <svg class="svg-icon svg-icon_pinterest" width="14" height="15"
                                viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <select class="form-select form-select-sm bg-transparent color-white" name="store-language">
                    <option value="english" selected>English</option>
                    <option value="german">Bangla</option>
                </select>
            </div>
        </div>
        <div class="header-desk header-desk_type_2">
            <nav class="navigation d-flex">
                <a class="navigation__item" href="#" data-bs-toggle="modal" data-bs-target="#siteMap">
                    <svg width="30" height="11" viewBox="0 0 30 11" xmlns="http://www.w3.org/2000/svg">
                        <rect width="30" height="2" />
                        <rect y="9" width="25" height="2" />
                    </svg>
                </a>

                <ul class="navigation__list list-unstyled d-flex">
                    <li class="navigation__item">
                        <a href="{{ route('index') }}" class="navigation__link">Home</a>
                    </li>
                    <li class="navigation__item">
                        <a href="{{ route('shop') }}" class="navigation__link">Shop</a>
                    </li>
                    <li class="navigation__item">
                        <a href="{{ route('aboutus') }}" class="navigation__link">About</a>
                    </li>
                </ul>
            </nav>

            <div class="logo">
                <a href="index.html">
                    @if ($configData)
                        <img src="{{ asset('files/config/' . $configData->logo) }}" alt="Uomo"
                            class="logo__image d-block">
                    @endif
                </a>
            </div><!-- /.logo -->

            <div class="header-tools d-flex align-items-center">
                <div class="header-tools__item hover-container">
                    <div class="js-hover__open position-relative">
                        <a class="js-search-popup search-field__actor" href="#">
                            <svg width="22px" height="22px" viewBox="0 0 32 32" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                                <title>search</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs>

                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd" sketch:type="MSPage">
                                    <g id="Icon-Set" sketch:type="MSLayerGroup"
                                        transform="translate(-256.000000, -1139.000000)" fill="#000000">
                                        <path
                                            d="M269.46,1163.45 C263.17,1163.45 258.071,1158.44 258.071,1152.25 C258.071,1146.06 263.17,1141.04 269.46,1141.04 C275.75,1141.04 280.85,1146.06 280.85,1152.25 C280.85,1158.44 275.75,1163.45 269.46,1163.45 L269.46,1163.45 Z M287.688,1169.25 L279.429,1161.12 C281.591,1158.77 282.92,1155.67 282.92,1152.25 C282.92,1144.93 276.894,1139 269.46,1139 C262.026,1139 256,1144.93 256,1152.25 C256,1159.56 262.026,1165.49 269.46,1165.49 C272.672,1165.49 275.618,1164.38 277.932,1162.53 L286.224,1170.69 C286.629,1171.09 287.284,1171.09 287.688,1170.69 C288.093,1170.3 288.093,1169.65 287.688,1169.25 L287.688,1169.25 Z"
                                            id="search" sketch:type="MSShapeGroup">

                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <i class="btn-icon btn-close-lg"></i>
                        </a>
                    </div>

                    <div class="search-popup js-hidden-content">
                        <form action="https://uomo-html.flexkitux.com/Demo2/search_result.html" method="GET"
                            class="search-field container">
                            <p class="text-uppercase text-secondary fw-medium mb-4">What are you looking for?</p>
                            <div class="position-relative">
                                <input class="search-field__input search-popup__input w-100 fw-medium" type="text"
                                    name="search-keyword" placeholder="Search products">
                                <button class="btn-icon search-popup__submit" type="submit">
                                    <svg class="d-block" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <use href="#icon_search" />
                                    </svg>
                                </button>
                                <button class="btn-icon btn-close-lg search-popup__reset" type="reset"></button>
                            </div>

                            <div class="search-popup__results">
                                <div class="sub-menu search-suggestion">
                                    <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                                    <ul class="sub-menu__list list-unstyled">
                                        <li class="sub-menu__item"><a href="shop2.html"
                                                class="menu-link menu-link_us-s">New Arrivals</a></li>
                                        <li class="sub-menu__item"><a href="#"
                                                class="menu-link menu-link_us-s">Dresses</a></li>
                                        <li class="sub-menu__item"><a href="shop3.html"
                                                class="menu-link menu-link_us-s">Accessories</a></li>
                                        <li class="sub-menu__item"><a href="#"
                                                class="menu-link menu-link_us-s">Footwear</a></li>
                                        <li class="sub-menu__item"><a href="#"
                                                class="menu-link menu-link_us-s">Sweatshirt</a></li>
                                    </ul>
                                </div>

                                <div class="search-result row row-cols-5"></div>
                            </div>
                        </form><!-- /.header-search -->
                    </div><!-- /.search-popup -->
                </div><!-- /.header-tools__item hover-container -->
                <a href="#" class="header-tools__item header-tools__cart js-open-aside"
                    data-aside="cartDrawer">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.2236 12.5257C19.6384 9.40452 19.3458 7.84393 18.2349 6.92196C17.124 6 15.5362 6 12.3606 6H11.6394C8.46386 6 6.87608 6 5.76518 6.92196C4.65428 7.84393 4.36167 9.40452 3.77645 12.5257C2.95353 16.9146 2.54207 19.1091 3.74169 20.5545C4.94131 22 7.17402 22 11.6394 22H12.3606C16.826 22 19.0587 22 20.2584 20.5545C20.9543 19.7159 21.108 18.6252 20.9537 17"
                            stroke="#000000" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M9 6V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V6" stroke="#000000"
                            stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span class="cart-amount d-block position-absolute js-cart-items-count"
                        id="total-cart-item">0</span>
                </a>
            </div><!-- /.header__tools -->
        </div><!-- /.header-desk header-desk_type_2 -->
    </header>
