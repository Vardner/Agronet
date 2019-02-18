@extends('layout-wrapper')
@section('content')
    <section class="content-block">
        <div class="content-block__wrapper-content">
            <div class="content-block__main-slider">
                <div class="main-slider__slider">
                    <div class="slider__wrapper-img">
                        <div class="slider__img" style="background-image: url('../images/main-slider/baner01.png')"></div>
                    </div>
                    <div class="slider__wrapper-img">
                        <div class="slider__img" style="background-image: url('../images/main-slider/baner02.jpg')"></div>
                    </div>
                    <div class="slider__wrapper-img">
                        <div class="slider__img" style="background-image: url('../images/main-slider/baner03.jpg')"></div>
                    </div>
                    <div class="slider__wrapper-img">
                        <div class="slider__img" style="background-image: url('../images/main-slider/baner04.jpg')"></div>
                    </div>
                </div>
            </div>

            <div class="content-block__top-products">
                <div class="top-products__header-top-products">
                    <span class="top-products__header-text">Топ предложений</span>
                    <a href="#" class="top-products__header-link-show-all">Все предложения</a>
                </div>
                <div class="top-products__wrapper-top-products">
                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product01.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div>

                        <!-- Кнопка видна, если предложение только 1 -->
                        <!-- <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div> -->

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <span class="number-of-sentences__text">25 предложений</span>
                            <!-- Такой текст, если предложение только 1 -->
                            <!-- <span class="number-of-sentences__text">в Агромаркет</span>  -->
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product02.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Удобрение</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">450</span>
                            <!-- <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span> -->
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <!-- <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div> -->

                        <!-- Кнопка видна, если предложение только 1 -->
                        <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <!-- <span class="number-of-sentences__text">25 предложений</span> -->
                            <!-- Такой текст, если предложение только 1 -->
                            <span class="number-of-sentences__text">в Агромаркет</span>
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product03.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div>

                        <!-- Кнопка видна, если предложение только 1 -->
                        <!-- <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div> -->

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <span class="number-of-sentences__text">25 предложений</span>
                            <!-- Такой текст, если предложение только 1 -->
                            <!-- <span class="number-of-sentences__text">в Агромаркет</span>                             -->
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product04.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <!-- <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div> -->

                        <!-- Кнопка видна, если предложение только 1 -->
                        <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <!-- <span class="number-of-sentences__text">25 предложений</span> -->
                            <!-- Такой текст, если предложение только 1 -->
                            <span class="number-of-sentences__text">в Агромаркет</span>
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product01.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div>

                        <!-- Кнопка видна, если предложение только 1 -->
                        <!-- <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div> -->

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <span class="number-of-sentences__text">25 предложений</span>
                            <!-- Такой текст, если предложение только 1 -->
                            <!-- <span class="number-of-sentences__text">в Агромаркет</span>                             -->
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product02.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <!-- <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div> -->

                        <!-- Кнопка видна, если предложение только 1 -->
                        <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <!-- <span class="number-of-sentences__text">25 предложений</span> -->
                            <!-- Такой текст, если предложение только 1 -->
                            <span class="number-of-sentences__text">в Агромаркет</span>
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product03.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">1 250</span>
                            <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span>
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div>

                        <!-- Кнопка видна, если предложение только 1 -->
                        <!-- <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div> -->

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <span class="number-of-sentences__text">25 предложений</span>
                            <!-- Такой текст, если предложение только 1 -->
                            <!-- <span class="number-of-sentences__text">в Агромаркет</span>                             -->
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="top-products__one-product">
                        <a href="./template-BC-product.html" class="one-product__link-on-template-BC-product">
                            <div class="one-product__wrapper-img">
                                <div class="one-product__img" style="background-image: url('../images/products/product04.png')"></div>
                            </div>

                            <div class="one-product__name-product">
                                <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                            </div>
                        </a>

                        <div class="one-product__price-block">
                            <span class="price-block__price-interval">480</span>
                            <!-- <span class="price-block__text">-</span>
                            <span class="price-block__price-interval">1 480</span> -->
                            <span class="price-block__text">грн</span>
                        </div>

                        <!-- Кнопка видна, если предложений больше 1 -->
                        <div class="one-product__btn-compare-prices">
                            <span class="one-product__btn-text">СРАВНИТЬ ЦЕНЫ</span>
                        </div>

                        <!-- Кнопка видна, если предложение только 1 -->
                        <!-- <div class="one-product__btn-details">
                            <span class="one-product__btn-text">ПОДРОБНЕЕ</span>
                        </div> -->

                        <div class="one-product__number-of-sentences">
                            <!-- Такой текст виден, если предложений больше 1 -->
                            <span class="number-of-sentences__text">25 предложений</span>
                            <!-- Такой текст, если предложение только 1 -->
                            <span class="number-of-sentences__text">в Агромаркет</span>
                        </div>

                        <div class="one-product__rating">
                            <div class="rating__svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                          fill="#03996C" />
                                </svg>
                            </div>
                            <span class="rating__text">4.5</span>
                        </div>

                        <div class="one-product__wrapper-btn-add-favorites">
                            <!-- При клике нужно добавить класс active и она изменит цвет -->
                            <div class="one-product__btn-add-favorites">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                    <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                          fill="#CDCDCD" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-block__top-shops">
                <div class="top-shops__header-top-shops">
                    <span class="top-shops__header-text">Топ магазинов</span>
                    <a href="#" class="top-shops__header-link-show-all">Смотреть все</a>
                </div>
                <div class="top-shops__wrapper-top-shops">
                    <div class="top-shops__one-shop">
                        <a href="/BC-shop.html" class="one-shop__link-on-BC-shop">
                            <!-- Alt в теге img должен соответствовать названию магазина!!! -->
                            <div class="one-shop__wrapper-img">
                                <img class="one-shop__img" src='../images/shops/shop01.png' alt="Эпицентр">
                            </div>

                            <div class="one-shop__name-shop">
                                <p class="name-shop__text">Эпицентр</p>
                            </div>
                        </a>

                        <div class="one-shop__btn-details">
                            <span class="one-shop__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-shop__number-of-products">
                            <span class="number-of-sentences__text">25 товаров</span>
                        </div>
                    </div>

                    <div class="top-shops__one-shop">
                        <a href="/BC-shop.html" class="one-shop__link-on-BC-shop">
                            <!-- Alt в теге img должен соответствовать названию магазина!!! -->
                            <div class="one-shop__wrapper-img">
                                <img class="one-shop__img" src='../images/shops/shop02.png' alt="Зелений світ">
                            </div>

                            <div class="one-shop__name-shop">
                                <p class="name-shop__text">Зеленый свет</p>
                            </div>
                        </a>

                        <div class="one-shop__btn-details">
                            <span class="one-shop__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-shop__number-of-products">
                            <span class="number-of-sentences__text">25 товаров</span>
                        </div>
                    </div>

                    <div class="top-shops__one-shop">
                        <a href="/BC-shop.html" class="one-shop__link-on-BC-shop">
                            <!-- Alt в теге img должен соответствовать названию магазина!!! -->
                            <div class="one-shop__wrapper-img">
                                <img class="one-shop__img" src='../images/shops/shop03.png' alt="Метро">
                            </div>

                            <div class="one-shop__name-shop">
                                <p class="name-shop__text">Метро</p>
                            </div>
                        </a>

                        <div class="one-shop__btn-details">
                            <span class="one-shop__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-shop__number-of-products">
                            <span class="number-of-sentences__text">25 товаров</span>
                        </div>
                    </div>

                    <div class="top-shops__one-shop">
                        <a href="/BC-shop.html" class="one-shop__link-on-BC-shop">
                            <!-- Alt в теге img должен соответствовать названию магазина!!! -->
                            <div class="one-shop__wrapper-img">
                                <img class="one-shop__img" src='../images/shops/shop01.png' alt="Эпицентр">
                            </div>

                            <div class="one-shop__name-shop">
                                <p class="name-shop__text">Эпицентр</p>
                            </div>
                        </a>

                        <div class="one-shop__btn-details">
                            <span class="one-shop__btn-text">ПОДРОБНЕЕ</span>
                        </div>

                        <div class="one-shop__number-of-products">
                            <span class="number-of-sentences__text">25 товаров</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-block__seo-block">
                <div class="seo-block__wrapper-seo-text">
                    <h1>Agronet company. Sed ut perspiciatis unde omnis iste natus error sit voluptatemtt</h1>
                    <h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
                        qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
                        qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
                        qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
                        qui...
                    </h2>
                    <h3>техника, удобрения, ветеринария и тд и тп</h3>
                </div>
                <div class="seo-block__btn-read-more">
                    <span class="seo-block__btn-text">Читать дальше</span>
                </div>
            </div>
        </div>
    </section>
@endsection
