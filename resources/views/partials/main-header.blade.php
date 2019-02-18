<header class="header">
    <div class="header__wrapper">
        <div class="header__first-line">
            <div class="container">
                <div class="row flex-row">
                    <div class="cell-3">
                        <div class="header__items-wrapper">
                            <a href="./Main-page.html" class="header__logo">
                                <img src="../images/static/logo-agronet.png" alt="Agronet" class="header__img logo-img">
                            </a>
                            <div class="header__lang">
                                <img src="../images/static/ru.png" alt="" class="header__img lang-img">
                                <span class="header__text lang-val">Рус</span>
                            </div>
                        </div>
                    </div>
                    <div class="cell-3">
                        <div class="header__items-wrapper">
                            <div class="header__phone">
                                <img src="../images/static/vodafone.png" alt="" class="header__img lang-img">
                                <a href="0665565656" class="header__text">066-556-56-56</a>
                            </div>
                            <div class="header__phone">
                                <img src="../images/static/kievstar.png" alt="" class="header__img lang-img">
                                <a href="0978999696" class="header__text">097-899-96-96</a>
                            </div>
                        </div>
                    </div>
                    <div class="cell-6">
                        <!-- Блок который видит неавторизированный пользователь -->
                        <!-- <div class="header__wrapper-btn-singin-basket">
                            <button class="header__btn-singup">
                                <p class="header__btn-text">Зарегистрироваться</p>
                            </button>
                            <div class="header__singin">
                                <img src="../images/static/user.png" alt="" class="header__img user-img">
                                <p class="header__text singin-text">Вход</p>
                            </div>
                            <div class="header__basket">
                                <img src="../images/static/basket.png" alt="" class="header__img basket-img">
                                <div class="basket__number"><span class="basket__number-text">25</span></div>

                                <p class="header__text basket-text">Корзина</p>
                            </div>
                        </div> -->
                        <!-- Блок который видит авторизированный пользователь -->
                        <div class="header__items-wrapper">
                            <button class="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                    <rect x="4.75" y="0.75" width="1.5" height="9.5" fill="white" stroke="white" stroke-width="0.5" />
                                    <rect x="10.25" y="4.75" width="1.5" height="9.5" transform="rotate(90 10.25 4.75)" fill="white" stroke="white" stroke-width="0.5" />
                                </svg>
                                Добавить товар
                            </button>
                            <div class="header__notifications">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                    <path d="M12.3312 9.4397C12.1633 9.29272 12.0049 9.15389 11.9217 9.00438C11.917 8.99561 11.9118 8.98685 11.9064 8.97799L11.9038 8.97359C11.6096 8.50276 11.5028 7.36689 11.439 6.68832C11.4296 6.58827 11.4206 6.4924 11.4115 6.40207C11.4107 6.3944 11.4098 6.38672 11.4084 6.37577C11.2662 5.38152 10.9138 3.94862 10.0419 2.76839C9.4277 1.93713 8.66164 1.38309 7.76303 1.11965C7.71069 0.493551 7.18443 0 6.54507 0C5.90563 0 5.37928 0.493594 5.32712 1.11982C4.42847 1.38304 3.66245 1.93709 3.04826 2.76861C2.17639 3.94858 1.82393 5.38147 1.68136 6.37887C1.68035 6.38672 1.67939 6.3944 1.67861 6.40251C1.66954 6.49257 1.66051 6.58822 1.65113 6.68823C1.58737 7.36697 1.48055 8.50298 1.18453 8.9766C1.17996 8.98423 1.17555 8.99182 1.16992 9.00172C1.0854 9.15363 0.926899 9.29263 0.759111 9.43975C0.358286 9.79111 -0.387885 10.4415 0.245366 11.6173C0.356498 11.8238 0.571216 11.9484 0.805736 11.9484H12.2845C12.5188 11.9484 12.7334 11.8239 12.8449 11.6174C13.4779 10.4416 12.732 9.79124 12.3312 9.4397Z" fill="#F6B639" />
                                    <path d="M7.99433 12.9951H5.15205C4.99587 12.9951 4.90384 13.0593 4.85407 13.1157C4.78132 13.1982 4.74992 13.3107 4.76571 13.4354C4.87863 14.3278 5.64299 15 6.54377 15C7.45446 15 8.21987 14.3183 8.32411 13.4147C8.33095 13.3555 8.33614 13.2088 8.23727 13.0979C8.17651 13.0297 8.09024 12.9951 7.99433 12.9951Z" fill="#F6B639" />
                                </svg>
                                <!-- Виден если уведомления есть -->
                                <div class="notifications__number">
                                    <span class="notifications__number-text">5</span>
                                </div>
                            </div>
                            <div class="header__user">
                                <img src="../images/static/user.png" alt="" class="header__img user-img">
                                <p class="header__text user-text">Вася Пупкин-Иванов</p>
                            </div>
                            <div class="header__basket">
                                <img src="../images/static/basket.png" alt="" class="header__img basket-img">
                                <div class="basket__number">
                                    <span class="basket__number-text">25</span>
                                </div>

                                <p class="header__text basket-text">Корзина</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header__two-subblock-header">
            <nav class="header__wrapper-catalog">
                <ul id="menu-catalog" class="header__menu-catalog">
                    <li class="menu-catalog__item-menu">
                        <div class="menu-catalog__wrapper-item-text">
                            <span class="menu-catalog__item-text">Каталог товаров</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                                <path d="M6.75742 8.46767L0.307864 2.01789C-0.102617 1.60761 -0.102617 0.942403 0.307864 0.532319C0.717981 0.122201 1.38315 0.122201 1.79323 0.532319L7.50011 6.23937L13.2068 0.532485C13.6171 0.122368 14.2822 0.122368 14.6923 0.532486C15.1026 0.942603 15.1026 1.60777 14.6923 2.01806L8.24263 8.46783C8.03747 8.67289 7.76887 8.77531 7.50014 8.77531C7.23128 8.77531 6.96248 8.67269 6.75742 8.46767Z"
                                      fill="white" />
                            </svg>
                        </div>
                        <ul id="submenu-catalog" class="header__submenu-catalog">
                            <li class="submenu-catalog__item-submenu">
                                <a href="./Main-page.html">
                                    <img src="../images/catalog-icons/biologic.png" alt="Биопрепараты" class="item-menu__img">
                                    <span class="item-submenu__text">
                                        <!-- Біопрепарати -->
                                        Биопрепараты
                                    </span>
                                </a>
                                <ul class="submenu-catalog__sub-submenu-catalog">
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="./Main-page.html">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="./Main-page.html">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="./Main-page.html">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="./Main-page.html">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Другое
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/means-plant-protection.png" alt="Средства защиты растений"
                                         class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Засоби захисту рослин -->
                                        Средства защиты растений
                                    </span>
                                </a>
                                <ul class="submenu-catalog__sub-submenu-catalog">
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/fertilizer.png" alt="Удобрения" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Добрива -->
                                        Удобрения
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/sowing-material.png" alt="Посевной материал"
                                         class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Посівний матеріал -->
                                        Посевной материал
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/packaging.png" alt="Тара и упаковка" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        Тара/упаковка
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/inventory.png" alt="Инвентарь" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Інвентар -->
                                        Инвентарь
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/feed.png" alt="Корма" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Корми -->
                                        Корма
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/windbreak.png" alt="Ветеренария" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Ветеренарія -->
                                        Ветеринария
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/agricultural-machinery.png" alt="Агротехника"
                                         class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Агротехніка -->
                                        Агротехника
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="#">
                                    <img src="../images/catalog-icons/spare-parts.png" alt="Запчасти" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Запчастини -->
                                        Запчасти
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/tires.png" alt="Шины" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Шини -->
                                        Шины
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/oil.png" alt="Масло" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Мастило -->
                                        Масло
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/fuel.png" alt="Топливо" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Паливо -->
                                        Топливо
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/structures-equipment.png" alt="Сооружения и Оборудование"
                                         class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Споруди/обладнання -->
                                        Сооружения/Оборудование
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/metal-rolling.png" alt="Металопрокат" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        Металопрокат
                                    </span>
                                </a>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/software.png" alt="Программное обеспечение" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Програмне забезпечення -->
                                        Программное обеспечение
                                    </span>
                                </a>
                                <ul class="submenu-catalog__sub-submenu-catalog">
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Программа полива растений</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Приложение управлением освещения в теплице
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Программа для подсчета урожая
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Программа домашней бухгалтерии
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Приложение для фотоколлажей</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Приложение по замеру влажности воздуха в помещении
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/arkacid.png" alt="Акарциды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>Акарциды</p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt=" Гербециды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Гербециды
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/desikant.png" alt="Десиканты"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Десиканты
                                            </p>
                                        </a>
                                    </li>
                                    <li class="sub-submenu-catalog__item-sub-submenu-catalog">
                                        <a href="#">
                                            <div class="sub-submenu-catalog__wrapper-img">
                                                <img src="../images/catalog-subcategories/gerbecid.png" alt="Инстициды"
                                                     class="item-menu__img">
                                            </div>
                                            <p>
                                                Инстициды
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu-catalog__item-submenu">
                                <a href="">
                                    <img src="../images/catalog-icons/different.png" alt="Разное" class="item-submenu__img">
                                    <span class="item-submenu__text">
                                        <!-- Різне -->
                                        Разное
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <form class="header__form-search">
                <div class="header__wrapper-search-input">
                    <input type="text" class="header__search-input" placeholder="Поиск по объявлениям">
                    <!-- <div class="header__search-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                            <path d="M6.75742 8.24294L0.307861 1.79316C-0.102621 1.38288 -0.102621 0.717672 0.307861 0.307588C0.717978 -0.10253 1.38315 -0.10253 1.79323 0.307588L7.50011 6.01464L13.2068 0.307754C13.6171 -0.102364 14.2822 -0.102364 14.6923 0.307754C15.1026 0.717872 15.1026 1.38304 14.6923 1.79333L8.24263 8.2431C8.03747 8.44816 7.76887 8.55057 7.50014 8.55057C7.23128 8.55057 6.96248 8.44796 6.75742 8.24294Z" fill="#C4C4C4"/>
                        </svg>
                    </div> -->
                </div>
                <ul class="header__menu-region">
                    <li class="menu-region__item-menu-region">
                        <div class="item-menu-region__wrapper-value">
                            <div class="item-menu-region__location-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                                    <path d="M6.99991 0C3.17296 0 0.0595703 3.11385 0.0595703 6.94089C0.0595703 10.6248 6.35666 19.2316 6.62478 19.596L6.87502 19.9366C6.90428 19.9766 6.95088 20 6.99991 20C7.04969 20 7.09599 19.9766 7.12556 19.9366L7.37564 19.596C7.64391 19.2316 13.9408 10.6248 13.9408 6.94089C13.9408 3.11385 10.827 0 6.99991 0ZM6.99991 4.45468C8.37111 4.45468 9.48612 5.56974 9.48612 6.94089C9.48612 8.31134 8.37106 9.42711 6.99991 9.42711C5.62951 9.42711 4.51369 8.31134 4.51369 6.94089C4.51369 5.56974 5.62946 4.45468 6.99991 4.45468Z" fill="#326BB5" />
                                </svg>
                            </div>
                            <input class="item-menu-region__value-text" type="text" placeholder="Вся Украина">
                            <div class="item-menu-region__arrow-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9"
                                     fill="none">
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
                <button class="header__btn-search">
                    <span class="header__btn-text">ИСКАТЬ</span>
                </button>
            </form>
        </div>
    </div>
</header>
