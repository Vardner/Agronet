@extends('layout-wrapper')
@section('content')
    <section class="content-block">
        <div class="content-block__wrapper-content">
            <div class="content-block__bread-crumbs">
                <span class="bread-crumbs__text">Главная</span>
                <span class="bread-crumbs__text">Сельхоз оборудование и инвентарь</span>
            </div>

            <div class="content-block__wrapper-filters-and-results">
                <div class="content-block__filters">
                    <span class="content-block__filters-text">Фильтры</span>

                    <div class="content-block__filter-item-volume">
                        <div class="filter-item-volume__menu-volume">
                            <p class="content-block__filter-name-text">Объем</p>
                            <div class="block-content__svg">
                                <svg fill="none" height="9" viewBox="0 0 16 9" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737427C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4" />
                                </svg>
                            </div>
                        </div>

                        <div class="menu-volume__items-menu" id="volume">
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="cats" type="hidden" value="0">
                                    <!-- value="volum-id" и id="items-menu__item-menu-volume-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-01" name="volume" type="checkbox" value="01">
                                    <label for="items-menu__item-menu-01">до 1 л</label>
                                </div>

                                <span class="items-menu__count-posters">(16)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="cats" type="hidden" value="0">
                                    <!-- value="volum-id" и id="items-menu__item-menu-volume-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-02" name="volume" type="checkbox" value="02">
                                    <label for="items-menu__item-menu-02">до 1 л</label>
                                </div>

                                <span class="items-menu__count-posters">(32)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="cats" type="hidden" value="0">
                                    <!-- value="volum-id" и id="items-menu__item-menu-volume-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-03" name="volume" type="checkbox" value="03">
                                    <label for="items-menu__item-menu-03">до 1 л</label>
                                </div>

                                <span class="items-menu__count-posters">(45)</span>
                            </div>
                        </div>
                    </div>

                    <div class="content-block__filter-item-manufacturer">
                        <div class="filter-item-manufacturer__menu-manufacturer active">
                            <p class="content-block__filter-name-text">Производитель</p>
                            <div class="block-content__svg">
                                <svg fill="none" height="9" viewBox="0 0 16 9" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737427C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4" />
                                </svg>
                            </div>
                        </div>

                        <div class="menu-manufacturer__items-menu active" id="manufacturer">
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="manufacturer" type="hidden" value="0">
                                    <!-- value="manufacturer-id" и id="items-menu__item-menu-manufacturer-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-manufacturer-01" name="volume" type="checkbox" value="manufacturer-01">
                                    <label for="items-menu__item-menu-manufacturer-01">Agro+</label>
                                </div>

                                <span class="items-menu__count-posters">(16)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="manufacturer" type="hidden" value="0">
                                    <!-- value="volum-id" и id="items-menu__item-menu-volume-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-manufacturer-02" name="volume" type="checkbox" value="manufacturer-02">
                                    <label for="items-menu__item-menu-manufacturer-02">Agrocity</label>
                                </div>

                                <span class="items-menu__count-posters">(32)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="manufacturer" type="hidden" value="0">
                                    <!-- value="volum-id" и id="items-menu__item-menu-volume-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-manufacturer-03" name="volume" type="checkbox" value="manufacturer-03">
                                    <label for="items-menu__item-menu-manufacturer-03">Agro1</label>
                                </div>

                                <span class="items-menu__count-posters">(45)</span>
                            </div>
                        </div>
                    </div>

                    <div class="content-block__filter-item-price">
                        <div class="filter-item-price__menu-price active">
                            <p class="content-block__filter-name-text">Цена, грн</p>
                            <div class="block-content__svg">
                                <svg fill="none" height="9" viewBox="0 0 16 9" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737427C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4" />
                                </svg>
                            </div>
                        </div>

                        <div class="menu-price__items-menu active" id="price">
                            <input class="menu-price__one-item-menu" placeholder="от" type="number">
                            <span class="menu-price__text">-</span>
                            <input class="menu-price__one-item-menu" placeholder="до" type="number">
                            <button class="menu-price__btn-pice-interval">ок</button>
                        </div>
                    </div>

                    <div class="content-block__filter-item-rating">
                        <div class="filter-item-rating__menu-rating active">
                            <p class="content-block__filter-name-text">Оценка</p>
                            <div class="block-content__svg">
                                <svg fill="none" height="9" viewBox="0 0 16 9" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737427C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4" />
                                </svg>
                            </div>
                        </div>

                        <div class="menu-rating__items-menu active" id="rating">
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="rating" type="hidden" value="0">
                                    <!-- value="rating-id" и id="items-menu__item-menu-rating-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-rating-01" name="rating" type="checkbox" value="rating-01">
                                    <label for="items-menu__item-menu-rating-01">1+</label>
                                </div>

                                <span class="items-menu__count-posters">(16)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="rating" type="hidden" value="0">
                                    <!-- value="rating-id" и id="items-menu__item-menu-rating-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-rating-02" name="rating" type="checkbox" value="rating-02">
                                    <label for="items-menu__item-menu-rating-02">2+</label>
                                </div>

                                <span class="items-menu__count-posters">(32)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="rating" type="hidden" value="0">
                                    <!-- value="rating-id" и id="items-menu__item-menu-rating-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-rating-03" name="rating" type="checkbox" value="rating-03">
                                    <label for="items-menu__item-menu-rating-03">3+</label>
                                </div>

                                <span class="items-menu__count-posters">(45)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="rating" type="hidden" value="0">
                                    <!-- value="rating-id" и id="items-menu__item-menu-rating-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-rating-04" name="rating" type="checkbox" value="rating-04">
                                    <label for="items-menu__item-menu-rating-04">4+</label>
                                </div>

                                <span class="items-menu__count-posters">(5)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="rating" type="hidden" value="0">
                                    <!-- value="rating-id" и id="items-menu__item-menu-rating-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-rating-05" name="rating" type="checkbox" value="rating-05">
                                    <label for="items-menu__item-menu-rating-05">5+</label>
                                </div>

                                <span class="items-menu__count-posters">(1)</span>
                            </div>
                        </div>
                    </div>

                    <div class="content-block__filter-item-type">
                        <div class="filter-item-type__menu-type active">
                            <p class="content-block__filter-name-text">Тип</p>
                            <div class="block-content__svg">
                                <svg fill="none" height="9" viewBox="0 0 16 9" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737427C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4" />
                                </svg>
                            </div>
                        </div>

                        <div class="menu-type__items-menu active" id="type">
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="type" type="hidden" value="0">
                                    <!-- value="type-id" и id="items-menu__item-menu-type-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-type-01" name="type" type="checkbox" value="type-01">
                                    <label for="items-menu__item-menu-type-01">Agro+</label>
                                </div>

                                <span class="items-menu__count-posters">(16)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="type" type="hidden" value="0">
                                    <!-- value="type-id" и id="items-menu__item-menu-type-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-type-02" name="type" type="checkbox" value="type-02">
                                    <label for="items-menu__item-menu-type-02">Agrocity</label>
                                </div>

                                <span class="items-menu__count-posters">(32)</span>
                            </div>
                            <div class="items-menu__one-item-menu">
                                <div class="items-menu__name-item-menu">
                                    <input name="type" type="hidden" value="0">
                                    <!-- value="type-id" и id="items-menu__item-menu-type-id"-->
                                    <input class="items-menu__item-menu" id="items-menu__item-menu-type-03" name="type" type="checkbox" value="type-03">
                                    <label for="items-menu__item-menu-type-03">Agro1</label>
                                </div>

                                <span class="items-menu__count-posters">(45)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block__results-products">
                    <div class="results-products__header-results-products">
                        <div class="header-results-products__sort-results">
                            <span class="sort-shops__name-block-text">Сортировка:</span>
                            <button class="sort-results__btn-sort-popular active">по популярности</button>
                            <button class="sort-results__btn-sort-rating">по рейтингу</button>
                            <button class="sort-results__btn-sort-highest">по убыванию цены</button>
                            <button class="sort-results__btn-sort-lowest">по возрастанию цены</button>
                        </div>
                        <div class="header-results-products__view-display-results">
                            <button class="view-display-results__btn-type-list active">
                                <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#C4C4C4" height="5" rx="1" width="20" />
                                    <rect fill="#C4C4C4" height="6" rx="1" width="20" y="7" />
                                    <rect fill="#C4C4C4" height="5" rx="1" width="20" y="15" />
                                </svg>
                            </button>
                            <button class="view-display-results__btn-type-tile">
                                <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="#03996C" height="9" rx="1" width="9" x="11" />
                                    <rect fill="#03996C" height="9" rx="1" width="9" />
                                    <rect fill="#03996C" height="9" rx="1" width="9" y="11" />
                                    <rect fill="#03996C" height="9" rx="1" width="9" x="11" y="11" />
                                </svg>
                            </button>
                        </div>
                        <div class="header-results-products__sort-results">
                            <ul class="header__menu-region">
                                <li class="menu-region__item-menu-region">
                                    <div class="item-menu-region__wrapper-value">
                                        <div class="item-menu-region__location-svg">
                                            <svg fill="none" height="20" viewBox="0 0 14 20" width="14" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99991 0C3.17296 0 0.0595703 3.11385 0.0595703 6.94089C0.0595703 10.6248 6.35666 19.2316 6.62478 19.596L6.87502 19.9366C6.90428 19.9766 6.95088 20 6.99991 20C7.04969 20 7.09599 19.9766 7.12556 19.9366L7.37564 19.596C7.64391 19.2316 13.9408 10.6248 13.9408 6.94089C13.9408 3.11385 10.827 0 6.99991 0ZM6.99991 4.45468C8.37111 4.45468 9.48612 5.56974 9.48612 6.94089C9.48612 8.31134 8.37106 9.42711 6.99991 9.42711C5.62951 9.42711 4.51369 8.31134 4.51369 6.94089C4.51369 5.56974 5.62946 4.45468 6.99991 4.45468Z" fill="#326BB5" />
                                            </svg>
                                        </div>
                                        <input class="item-menu-region__value-text" placeholder="Вся Украина" type="text">
                                        <div class="item-menu-region__arrow-svg">
                                            <svg fill="none" height="9" viewBox="0 0 15 9" width="15"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.75742 8.24294L0.307861 1.79316C-0.102621 1.38288 -0.102621 0.717672 0.307861 0.307588C0.717978 -0.10253 1.38315 -0.10253 1.79323 0.307588L7.50011 6.01464L13.2068 0.307754C13.6171 -0.102364 14.2822 -0.102364 14.6923 0.307754C15.1026 0.717872 15.1026 1.38304 14.6923 1.79333L8.24263 8.2431C8.03747 8.44816 7.76887 8.55057 7.50014 8.55057C7.23128 8.55057 6.96248 8.44796 6.75742 8.24294Z"
                                                      fill="#C4C4C4" />
                                            </svg>
                                        </div>
                                    </div>
                                    <ul class="menu-region__submenu-region">
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text">
                                                Ивано-Франковская область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> АР Крым
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Винницкая
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Волынская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text">
                                                Днепропетровская область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Донецкая
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Житомирская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Закарпатская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Запорожская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text">
                                                Кировоградская область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Киевская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> курорт
                                                Буковель
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Луганская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Львовская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Николаевская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Одесская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Полтавская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Ровенская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Сумская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text">
                                                Тернопольская область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Харьковская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Херсонская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Хмельницкая
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Черкасская
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Черновицкая
                                                область
                                            </span>
                                        </li>
                                        <li class="submenu-region__item">
                                            <span class="submenu-region__item-text"> Черниговская
                                                область
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h1 class="results-products__seo-text">Сельскохозяйственное оборудование / инвентарь</h1>
                    <!-- По нажатию на button class="view-display-results__btn-type-list" к диву ниже добавляется класс list -->
                    <!-- По нажатию на button class="view-display-results__btn-type-tile" к диву ниже добавляется класс tile -->
                    <div class="results-products__wrapper-results-products list">
                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product top-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product top-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>

                        <!-- Если добавить класс top-product появится метка ТОП -->
                        <div class="results-products__one-product">
                            <!--  Виден если у родителя(div) с классом table-shops__row есть класс top-shop  -->
                            <div class="one-product__top-product">
                                <span class="one-product__top-product-text">ТОП</span>
                            </div>

                            <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                <div class="one-product__wrapper-img">
                                    <div class="one-product__img" style="background-image: url('./img/products/product01.png')"></div>
                                </div>
                            </a>

                            <div class="one-product__wrapper-info-about-product">
                                <a class="one-product__link-on-template-BC-product" href="./template-BC-product.html">
                                    <div class="one-product__name-product">
                                        <p class="name-product__text">Яровая пшеница твердая может быть в две строки</p>
                                    </div>
                                </a>

                                <div class="one-product__location">
                                    <p class="location__text">Киевская область, г. Белая Церковь</p>
                                </div>

                                <div class="one-product__about-product">
                                    <p class="about-product__text">Наш маслосырзавод производит и экспортирует:масло
                                        сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко
                                    </p>
                                </div>
                            </div>

                            <div class="one-product__wrapper-price-btn-sentences">
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
                            </div>

                            <div class="one-product__rating">
                                <div class="rating__svg">
                                    <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z"
                                              fill="#03996C" />
                                    </svg>
                                </div>
                                <span class="rating__text" id="product-rating">4.5</span>
                            </div>

                            <div class="one-product__wrapper-btn-add-favorites">
                                <!-- При клике нужно добавить класс active и она изменит цвет -->
                                <div class="one-product__btn-add-favorites active">
                                    <svg fill="none" height="19" viewBox="0 0 20 19" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z"
                                              fill="#CDCDCD" />
                                    </svg>
                                </div>
                                <span class="btn-add-favorites__text">В избранное</span>
                            </div>
                        </div>
                    </div>

                    <nav class="paginator">
                        <ul class="paginator__list">
                            <li class="paginator__item paginator__item--angle-l">
                                <a href="#" class="paginator__angle">
                                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.336297 7.76392L7.37664 0.536983C7.82449 0.0770262 8.5506 0.0770263 8.99823 0.536983C9.4459 0.996532 9.4459 1.74188 8.99823 2.20139L2.76862 8.59613L8.99805 14.9906C9.44572 15.4504 9.44572 16.1956 8.99805 16.6552C8.55038 17.1149 7.82431 17.1149 7.37645 16.6552L0.336116 9.42814C0.112281 9.19826 0.000489909 8.89729 0.000489934 8.59616C0.000489959 8.2949 0.112498 7.9937 0.336297 7.76392Z" fill="#03996C" />
                                    </svg>
                                </a>
                            </li>
                            <li class="paginator__item">
                                <!--Если пользователь находится на конкретной странице то прячем ссылку, иначе добавляем класс hidden для спана-->
                                <span class="paginator__link paginator__link--active">1</span>
                                <!--<a class="paginator__link" href="javascript: void(0)">1</a>-->
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">2</span>
                                <a class="paginator__link" href="javascript: void(0)">2</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">3</span>
                                <a class="paginator__link" href="javascript: void(0)">3</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">4</span>
                                <a class="paginator__link" href="javascript: void(0)">4</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">5</span>
                                <a class="paginator__link" href="javascript: void(0)">5</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">6</span>
                                <a class="paginator__link" href="javascript: void(0)">6</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">7</span>
                                <a class="paginator__link" href="javascript: void(0)">7</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">8</span>
                                <a class="paginator__link" href="javascript: void(0)">8</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">9</span>
                                <a class="paginator__link" href="javascript: void(0)">9</a>
                            </li>
                            <li class="paginator__item">
                                <span class="paginator__link paginator__link--active hidden">10</span>
                                <a class="paginator__link" href="javascript: void(0)">10</a>
                            </li>
                            <li class="paginator__item paginator__item--angle-r">
                                <a href="#" class="paginator__angle ">
                                    <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.99769 9.23607L1.95735 16.463C1.5095 16.923 0.783385 16.923 0.335752 16.463C-0.111917 16.0035 -0.111917 15.2581 0.335752 14.7986L6.56537 8.40387L0.335933 2.00936C-0.111736 1.54962 -0.111736 0.80435 0.335933 0.344801C0.783603 -0.114934 1.50968 -0.114934 1.95753 0.344801L8.99787 7.57185C9.22171 7.80174 9.3335 8.10271 9.3335 8.40383C9.3335 8.7051 9.22149 9.0063 8.99769 9.23607Z" fill="#03996C" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="content-block__seo-block">
                        <div class="seo-block__wrapper-seo-text">
                            <h2>Техника, удобрения, ветеринария и тд и тп</h2>
                            <br>
                            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt
                                eos
                                qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt
                                eos
                                qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt
                                eos
                                qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt
                                eos
                                qui...
                            </h3>
                        </div>
                        <div class="seo-block__btn-read-more">
                            <span class="seo-block__btn-text">Читать дальше</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
