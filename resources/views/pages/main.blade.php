@extends('layout-wrapper')
@push('additional-styles')
	<link rel="stylesheet" href="css/slick.min.css">
@endpush
@section('content')
	<section class="main__slider">
		<div class="main__slider-item">
			<img class="main__slider-image" src="../images/main-slider/baner01.png" alt="">
		</div>
		<div class="main__slider-item">
			<img class="main__slider-image" src="../images/main-slider/baner02.jpg" alt="">
		</div>
		<div class="main__slider-item">
			<img class="main__slider-image" src="../images/main-slider/baner03.jpg" alt="">
		</div>
		<div class="main__slider-item">
			<img class="main__slider-image" src="../images/main-slider/baner04.jpg" alt="">
		</div>
	</section>
	<section class="main__section">
		<header class="main__section-header">
			<h3 class="main__section-title">Топ предложений</h3>
			<a href="#" class="main__section-link">
				Все предложения
				<svg class="main__section-link-arrow" width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.24238 8.24258L1.79304 14.6921C1.38278 15.1026 0.717624 15.1026 0.307568 14.6921C-0.102523 14.282 -0.102523 13.6169 0.307568 13.2068L6.01424 7.49989L0.307733 1.79321C-0.102357 1.38293 -0.102357 0.717829 0.307733 0.307712C0.717824 -0.102571 1.38295 -0.102571 1.79321 0.307712L8.24255 6.75737C8.44759 6.96253 8.55 7.23113 8.55 7.49986C8.55 7.76872 8.44739 8.03752 8.24238 8.24258Z" fill="#326BB5"/>
				</svg>
			</a>
		</header>
		<div class="catalog-list">
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/main-slider/baner03.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 250
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card2.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 250
						</span> &ndash;
						<span class="price__val">
							1 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card3.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							11 250
						</span> &ndash;
						<span class="price__val">
							134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card4.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 011 250
						</span> &ndash;
						<span class="price__val">
							2 134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card3.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							11 250
						</span> &ndash;
						<span class="price__val">
							134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card4.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 011 250
						</span> &ndash;
						<span class="price__val">
							2 134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
	</section>
	<section class="main__section">
		<header class="main__section-header">
			<h3 class="main__section-title">Топ магазинов</h3>
			<a href="#" class="main__section-link">
				Смотреть все
				<svg class="main__section-link-arrow" width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.24238 8.24258L1.79304 14.6921C1.38278 15.1026 0.717624 15.1026 0.307568 14.6921C-0.102523 14.282 -0.102523 13.6169 0.307568 13.2068L6.01424 7.49989L0.307733 1.79321C-0.102357 1.38293 -0.102357 0.717829 0.307733 0.307712C0.717824 -0.102571 1.38295 -0.102571 1.79321 0.307712L8.24255 6.75737C8.44759 6.96253 8.55 7.23113 8.55 7.49986C8.55 7.76872 8.44739 8.03752 8.24238 8.24258Z" fill="#326BB5"/>
				</svg>
			</a>
		</header>
		<div class="catalog-list">
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/main-slider/baner03.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 250
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card2.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 250
						</span> &ndash;
						<span class="price__val">
							1 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card3.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							11 250
						</span> &ndash;
						<span class="price__val">
							134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card4.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 011 250
						</span> &ndash;
						<span class="price__val">
							2 134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card3.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Яровая пшеница твердая
						может быть в две строки
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							11 250
						</span> &ndash;
						<span class="price__val">
							134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
			<div class="cell-3">
				<div class="catalog-list__item">
					<a href="#" class="catalog-list__box">
						<div class="catalog-list__scale">
							<img src="../images/catalog-images/Card4.jpg" alt="" class="catalog-list__img">
						</div>
					</a>
					<span class="catalog-list__title">
						Удобрение
					</span>
					<span class="catalog-list__price price">
						<span class="price__val">
							1 011 250
						</span> &ndash;
						<span class="price__val">
							2 134 480
						</span>
						<span class="price__curr">
							грн
						</span>
					</span>
					<a href="" class="catalog-list__details-btn button button--more">
						Подробнее
					</a>
					<a href="#" class="catalog-list__link catalog-list__title-sub">
						в Агромаркет
					</a>
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
	</section>
	<section class="main__section">
		<div class="main__seo">
			<div class="main__seo-content">
				<h1>
					Agronet company. Sed ut perspiciatis unde omnis iste natus error sit voluptatemtt
				</h1>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
					architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
					aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
				</p>
				<h2>
					Agronet company. Sed ut pe
				</h2>
				<p>
					aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<p>
					ed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<h3>
					Agronet company
				</h3>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
					architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
					aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
				</p>
				<h2>
					Agronet company. Sed ut pe
				</h2>
				<p>
					aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<p>
					ed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<h3>
					Agronet company
				</h3>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
					architectobe atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
					aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
				</p>
				<h2>
					Agronet company. Sed ut pe
				</h2>
				<p>
					aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<p>
					ed quia consequuntur magni dolores eos qui ratione nesciunt eos
					qui...Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
					laudantium, totam rem aperiam, eaque ipsa quae
				</p>
				<h3>
					Agronet company
				</h3>
			</div>
			<span class="main__seo-read-more" data-control="show-seo">Читать больше</span>
		</div>
	</section>
@endsection
@push('additional-scripts')
	<script src='js/slick.min.js'></script>
	<script>
      window.addEventListener('load', function () {
        $('.main__slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
          lazyLoad: 'ondemand',
          autoplay: true,
          autoplaySpeed: 4000,
          infinite: true,
          dotsClass: 'slider-dots'
        });
      });
	</script>
@endpush