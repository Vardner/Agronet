@extends('layout-wrapper')
@section('content')
	<div class="container">
		<div class="row">
			<div class="cell-12">
				<div class="main__breadcrumbs">
					<ul class="breadcrumbs">
						<li class="breadcrumbs__item">
							<a href="javascript: void(0)" class="breadcrumbs__link">
								<span class="breadcrumbs__text">
									Главная
								</span>
							</a>
						</li>
						<li class="breadcrumbs__item">
							<a href="javascript: void(0)" class="breadcrumbs__link">
								<span class="breadcrumbs__text">
									Сельхоз оборудование и инвентарь
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="main__category">
					<aside class="main__category-filter">
						<div class="category-filter">
							<div class="category-filter__section">
								<div class="category-filter__title">Фильтры</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Объем
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<ul class="category-filter-checkboxes">
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Ноль">
												<label for="Ноль">до 1 л</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Раз">
												<label for="Раз">1-2 л</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Два">
												<label for="Два">2-3 л</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Три">
												<label for="Три">3-5 л</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Производители
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<ul class="category-filter-checkboxes">
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Agro1">
												<label for="Agro1">Agro1</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Agro2">
												<label for="Agro2">Agro2</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Agrocity">
												<label for="Agrocity">Agrocity</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="Agro+">
												<label for="Agro+">Agro+</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Цена, грн
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<div class="category-filter-price">
										<form novalidate class="category-filter-price__form">
											<input class="category-filter-price__input" type="text" placeholder="от">
											<div class="category-filter-price__dash">
												&mdash;
											</div>
											<input class="category-filter-price__input" type="text" placeholder="до">
											<button class="button button--submit-prices" type="submit">OK</button>
										</form>
									</div>
								</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Рейтинг
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<ul class="category-filter-checkboxes">
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating5">
												<label for="rating5">5</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating4">
												<label for="rating4">4</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating3">
												<label for="rating3">3</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating2">
												<label for="rating2">2</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating1">
												<label for="rating1">1</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Рейтинг
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<ul class="category-filter-checkboxes">
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating5">
												<label for="rating5">5</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating4">
												<label for="rating4">4</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating3">
												<label for="rating3">3</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating2">
												<label for="rating2">2</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating1">
												<label for="rating1">1</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="category-filter__section" data-dropdown-filter="container">
								<div class="category-filter__title" data-dropdown-filter="toggle">
									Рейтинг
									<svg class="category-filter__section-arrow" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.23281 0.737594L15.6824 7.18737C16.0929 7.59765 16.0929 8.26286 15.6824 8.67294C15.2723 9.08306 14.6071 9.08306 14.197 8.67294L8.49013 2.96589L2.78345 8.67278C2.37317 9.08289 1.70806 9.08289 1.29795 8.67278C0.887664 8.26266 0.887664 7.59749 1.29795 7.1872L7.74761 0.737428C7.95277 0.532369 8.22136 0.429955 8.49009 0.429955C8.75896 0.429955 9.02775 0.532568 9.23281 0.737594Z" fill="#C4C4C4"/>
									</svg>
								</div>
								<div class="category-filter__section-inner" data-dropdown-filter="inner">
									<ul class="category-filter-checkboxes">
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating5">
												<label for="rating5">5</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating4">
												<label for="rating4">4</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating3">
												<label for="rating3">3</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating2">
												<label for="rating2">2</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
										<li class="category-filter-checkboxes__item">
											<a href="" class="category-filter-checkboxes__link">
												<input type="checkbox" class="custom-checkbox" id="rating1">
												<label for="rating1">1</label>
											</a>
											<span class="category-filter-checkboxes__count">(15)</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</aside>
					<section class="main__category-result">
						<div class="filter-bar">
							<span class="filter-bar__tabs-title">
								Сортировка:
							</span>
							<ul class="filter-bar__tabs">
								<li class="filter-bar__item">
									<a class="filter-bar__link" href="#">по популярности</a>
								</li>
								<li class="filter-bar__item">
									<a class="filter-bar__link" href="#">по рейтингу</a>
								</li>
								<li class="filter-bar__item">
									<a class="filter-bar__link" href="#">по убыванию цены</a>
								</li>
								<li class="filter-bar__item">
									<a class="filter-bar__link" href="#">по возрастанию цены</a>
								</li>
							</ul>
							<div class="filter-bar__switches">
								<svg data-control="catalogToList" class="filter-bar__switch" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<rect width="20" height="5" rx="1"/>
									<rect y="7" width="20" height="6" rx="1"/>
									<rect y="15" width="20" height="5" rx="1"/>
								</svg>
								<svg data-control="catalogToTile" class="is-active filter-bar__switch" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<rect x="11" width="9" height="9" rx="1"/>
									<rect width="9" height="9" rx="1"/>
									<rect y="11" width="9" height="9" rx="1"/>
									<rect x="11" y="11" width="9" height="9" rx="1"/>
								</svg>
							</div>
						</div>
						<header class="main__section-header">
							<h3 class="main__section-title">Сельскохозяйственное оборудование / инвентарь</h3>
						</header>
						<div class="catalog-list" id="searchResult">
							<div class="catalog-list__preloader" id="catalogPreloader">
								<img class="catalog-list__preloader-image" src="../images/catalog-icons/catalog-preloader.gif" alt="Catalog-preloader">
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/main-slider/baner03.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/catalog-images/Card2.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span> &ndash;
													<span class="catalog-list__price-value">
														1 480
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/main-slider/baner03.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/catalog-images/Card2.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span> &ndash;
													<span class="catalog-list__price-value">
														1 480
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/main-slider/baner03.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="cell-4">
								<div class="catalog-list__item">
									<div class="catalog-list__item-wrap">
										<a href="#" class="catalog-list__box">
											<div class="catalog-list__scale">
												<img src="../images/catalog-images/Card2.jpg" alt="" class="catalog-list__img">
											</div>
										</a>
									</div>
									<div class="catalog-list__info">
										<div class="catalog-list__info-desc-buy">
											<div class="catalog-list__info-desc">
												<span class="catalog-list__title">
													Яровая пшеница твердая
													может быть в две строки
												</span>
												<span class="catalog-list__city">Киевская область, г. Белая Церковь</span>
												<p class="catalog-list__description">Наш маслосырзавод производит и экспортирует:масло сливочное, 82.5%, твердый сыр "Российский",50%,сырный продукт,50% цельное молоко</p>
											</div>
											<div class="catalog-list__info-buy">
												<span class="catalog-list__price">
													<span class="catalog-list__price-value">
														1 250
													</span> &ndash;
													<span class="catalog-list__price-value">
														1 480
													</span>
													<span class="catalog-list__price-currency">
														грн
													</span>
												</span>
												<a href="#" class="catalog-list__details-btn button button--more">
													Подробнее
												</a>
												<a href="#" class="catalog-list__link catalog-list__title-sub">
													в Агромаркет
												</a>
											</div>
										</div>
										<div class="catalog-list__controls">
											<div class="catalog-list__rating">
												<svg class="catalog-list__rating-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6765 8.32728L15.6177 12.2841L16.5757 17.8716C16.6443 18.2739 16.478 18.681 16.1482 18.9213C15.9615 19.057 15.7394 19.1262 15.5174 19.1262C15.3468 19.1262 15.1752 19.0854 15.018 19.0028L10.0002 16.3649L4.98238 19.0028C4.62086 19.1932 4.18317 19.161 3.85223 18.9224C3.52235 18.6821 3.35661 18.2755 3.4258 17.8727L4.38431 12.2852L0.324463 8.32781C0.0310639 8.043 -0.0729935 7.61657 0.0519827 7.22824C0.178568 6.8399 0.513805 6.55723 0.918234 6.49823L6.52822 5.68239L9.03847 0.598598C9.21816 0.231715 9.59148 0 9.99966 0C10.4089 0 10.7806 0.231716 10.9614 0.598062L13.4716 5.68186L19.0827 6.49769C19.4861 6.55615 19.8224 6.83936 19.9468 7.2277C20.0745 7.61604 19.9677 8.04246 19.6765 8.32728Z" fill="#03996C"/>
												</svg>
												<span class="catalog-list__rating-value">4.5</span>
											</div>
											<div class="catalog-list__favorite">
												<svg class="catalog-list__favorite-icon" data-control="add-to-favorite" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.3575 0C12.6549 0 11.0611 0.747761 10 2.00062C8.93886 0.747761 7.3451 0 5.64255 0C2.53125 0 0 2.45537 0 5.47349C0 7.8368 1.4527 10.5703 4.3178 13.5982C6.52273 15.9284 8.92128 17.7325 9.60382 18.2299L9.99987 18.5185L10.3959 18.2299C11.0785 17.7325 13.4771 15.9283 15.682 13.5983C18.5473 10.5704 20 7.83684 20 5.47349C20 2.45537 17.4687 0 14.3575 0Z" fill="#CDCDCD"/>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<nav class="paginator">
							<ul class="paginator__list">
								<li class="paginator__item paginator__item--angle-l">
									<a href="#" class="paginator__angle">
										<svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0.336297 7.76392L7.37664 0.536983C7.82449 0.0770262 8.5506 0.0770263 8.99823 0.536983C9.4459 0.996532 9.4459 1.74188 8.99823 2.20139L2.76862 8.59613L8.99805 14.9906C9.44572 15.4504 9.44572 16.1956 8.99805 16.6552C8.55038 17.1149 7.82431 17.1149 7.37645 16.6552L0.336116 9.42814C0.112281 9.19826 0.000489909 8.89729 0.000489934 8.59616C0.000489959 8.2949 0.112498 7.9937 0.336297 7.76392Z" fill="#03996C"/>
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
											<path d="M8.99769 9.23607L1.95735 16.463C1.5095 16.923 0.783385 16.923 0.335752 16.463C-0.111917 16.0035 -0.111917 15.2581 0.335752 14.7986L6.56537 8.40387L0.335933 2.00936C-0.111736 1.54962 -0.111736 0.80435 0.335933 0.344801C0.783603 -0.114934 1.50968 -0.114934 1.95753 0.344801L8.99787 7.57185C9.22171 7.80174 9.3335 8.10271 9.3335 8.40383C9.3335 8.7051 9.22149 9.0063 8.99769 9.23607Z" fill="#03996C"/>
										</svg>
									</a>
								</li>
							</ul>
						</nav>
					</section>
				</div>
				<section class="main__section">
					<div class="main__seo">
						<div class="main__seo-content">
							<h1>
								Agronet company. Sed ut perspiciatis unde omnis iste natus error sit voluptatemtt
							</h1>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
								voluptas sit
								aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
								nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
							</p>
							<h2>
								Agronet company. Sed ut pe
							</h2>
							<p>
								aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<p>
								ed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<h3>
								Agronet company
							</h3>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
								voluptas sit
								aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
								nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
							</p>
							<h2>
								Agronet company. Sed ut pe
							</h2>
							<p>
								aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<p>
								ed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<h3>
								Agronet company
							</h3>
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
								voluptas sit
								aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
								nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
							</p>
							<h2>
								Agronet company. Sed ut pe
							</h2>
							<p>
								aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<p>
								ed quia consequuntur magni dolores eos qui ratione nesciunt eos
								qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
								doloremque
								laudantium, totam rem aperiam, eaque ipsa quae
							</p>
							<h3>
								Agronet company
							</h3>
						</div>
						<span class="main__seo-read-more" data-control="show-seo">Читать больше</span>
					</div>
				</section>
			</div>
		</div>
	</div>
@endsection
