<?php /*
Template Name: Главная
Template Post Type: post, page, product
*/
 ?>
 <?php get_template_part('template-parts/head') ?>
<header class="header" id="header">
		<div class="menu-header d-flex align-items-center">
			<a href="/" class="logo">
				<img src="<?php bloginfo('template_directory')?>/img/logo.png" alt="trans light">
			</a>
			<div class="container">
				<nav class="nav-head">
					<ul class="nav-head__menu d-flex">
						<li>
							<a href="#project">
								Проекты
							</a>
						</li>
						<li>
							<a href="#catalog">
								Каталог
							</a>
						</li>
						<li>
							<a href="#about">
								О компании
							</a>
						</li>
						<li>
							<a href="#footer">
								Контакты
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div id="burger-menu">
				<a class="burger-menu__button">
					<span></span>
				    <span></span>
				    <span></span>
				</a>
				<div class="hamburger-menu">
					<a id="menuClouse"> X </a>
					<ul class="hamburger-menu__list">
						<li>
							<a href="#project">
								Проекты
							</a>
						</li>
						<li>
							<a href="#catalog">
								Каталог
							</a>
						</li>
						<li>
							<a href="#about">
								О компании
							</a>
						</li>
						<li>
							<a href="#footer">
								Контакты
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="offer">
				<div class="offer__content">
					<h1>
						Светотехническое оборудование в Петербурге
					</h1>
					<p class="offer__subtitle">
						Продажа, аренда светотехнического оборудования. Оформление официальных мероприятий под ключ.
					</p>
					<a href="#project" class="offer__link btn-link">
						Перейти
					</a>
				</div>
			</div>
		</div>
	</header>
	<section class="project" id="project">
		<div class="container">
			<div class="section-title">
				<h2>
					Наши проекты
				</h2>
			</div>
			<div class="slider">
				<!-- Slider-->
				<div class="swiper-button swiper-button-prev_project swiper-button-prev"></div>
		    	<div class="swiper-button swiper-button-next_project swiper-button-next"></div>
				<div class="swiper-container" id="swiper-project">
				    <div class="swiper-wrapper">
				    	<!-- navigation buttons -->
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project1.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>	
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project2.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project3.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project4.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project5.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>
				        	</div>
				        </div>
				        <div class="swiper-slide">
				        	<div class="project-slider">
				        		<img src="<?php bloginfo('template_directory')?>/img/project6.jpg" alt="project">
				        		<div class="project-overlay">
				        			<h4>
				        				ССК “ОЛИМП”
				        			</h4>
				        			<p>
				        				Световое оформление форума <b>“Шубы-2019”</b>
				        			</p>
				        		</div>
				        	</div>
				        </div>
				    </div>
				</div>
				<!-- Slider end-->
			</div>
		</div>
	</section>
	<section class="catalog" id="catalog">
		<div class="container">
			<div class="section-title">
				<h2>
					Каталог продукции
				</h2>
			</div>
			<ul class="catalog-tabs">
			   <li class="catalog-tabs__item">
			       <input type="radio" name="tab" id="catalog-robe" checked>
					<label for="catalog-robe">Robe</label>
			    </li>
			    <li class="catalog-tabs__item">
			       <input type="radio" name="tab" id="catalog-uniel">
					<label for="catalog-uniel">Uniel</label>
			    </li>
			    <li class="catalog-tabs__item">
			       <input type="radio" name="tab" id="catalog-compulite">
					<label for="catalog-compulite">Compulite</label>
			    </li>
			</ul>
			<ul class="catalog-content">
				<li class="catalog-production catalog-robe">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog1.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 18
										</span>
										<span>
											Тип ПРА: ЭмПРА
										</span>
										<span>
											Ширина светильника: 158
										</span>
										<span>
											Длина светильника: 671
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												3 999.90 p.
											</span>
											<span class="old-value">
												5 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog2.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 26
										</span>
										<span>
											Тип ПРА: ЭмПРА
										</span>
										<span>
											Ширина светильника: 130
										</span>
										<span>
											Длина светильника: 771
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												2 999.90 p.
											</span>
											<span class="old-value">
												4 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog3.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 33
										</span>
										<span>
											Тип ПРА: ЭмПРА
										</span>
										<span>
											Ширина светильника: 150
										</span>
										<span>
											Длина светильника: 881
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												3 999.90 p.
											</span>
											<span class="old-value">
												6 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="catalog-production catalog-uniel">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog4.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 56
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 210
										</span>
										<span>
											Длина светильника: 934
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												2 999.90 p.
											</span>
											<span class="old-value">
												6 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog5.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 44
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 399
										</span>
										<span>
											Длина светильника: 450
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												5 999.90 p.
											</span>
											<span class="old-value">
												7 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog6.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 76
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 458
										</span>
										<span>
											Длина светильника: 678
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												4 999.90 p.
											</span>
											<span class="old-value">
												6 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="catalog-production catalog-compulite">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog7.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 77
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 610
										</span>
										<span>
											Длина светильника: 994
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												2 999.90 p.
											</span>
											<span class="old-value">
												6 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog8.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 44
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 210
										</span>
										<span>
											Длина светильника: 534
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												3 999.90 p.
											</span>
											<span class="old-value">
												4 999.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="catalog-sale">
								<img src="<?php bloginfo('template_directory')?>/img/catalog9.jpg" alt="Продукция">
								<div class="catalog-sale__content">
									<div class="catalog-sale__info">
										<span>
											Мощность ламп: 26
										</span>
										<span>
											Тип ПРА: КаПРА
										</span>
										<span>
											Ширина светильника: 210
										</span>
										<span>
											Длина светильника: 334
										</span>
									</div>
									<div class="catalog-sale__price d-flex justify-content-between align-items-center">
										<div class="catalog-sale__value">
											<span class="new-value">
												<i class="fas fa-tag"></i>
												2 999.90 p.
											</span>
											<span class="old-value">
												5 699.90 p.
											</span>
										</div>
										<a href="" class="catalog-sale__buy btn-buy">
											<i class="fas fa-shopping-cart"></i>
											Купить
										</a>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="rent" id="rent">
		<div class="container">
			<div class="section-title">
				<h2>
					Аренда оборудования
				</h2>
			</div>
			<div class="rent-content">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="rent-text">
							<p>
								Мы занимаемся прокатом светового и сценического оборудования ведущих мировых производителей, таких как <b>Robe, SGM, StudioDue, ChainMaster, Milos, Universal Effects, ArtLighting, MobilTech, Lampo, Martin, Spotlight, Compulite, Eurolite</b> и др.
							</p>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="slider slider-rent" id="slider">
							<!-- Slider-->
							<div class="swiper-container" id="swiper-rent">
								<div class="slider-head">
									<h4>
										Новое оборудование, предоставляемое в аренду:
									</h4>
									<div class="slider-head__button">
										<div class="swiper-button swiper-button-prev swiper-button-prev_rent"></div>
							    		<div class="swiper-button swiper-button-next swiper-button-next_rent"></div>
									</div>
								</div>
							    <div class="swiper-wrapper">
							    	<!-- navigation buttons -->
							        <div class="swiper-slide swiper-slide__rent">
							        	<img src="<?php bloginfo('template_directory')?>/img/rent1.jpg" alt="Аренда">
							        	<div class="rent-block">
							        		<h5>
							        			Robe Robin ParFect 100
							        		</h5>
							        		<ul class="rent-block__text">
							        			<li>
							        				<p>
							        					Источник света 12 светодиодов по 15 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					Потребляемая мощность 200 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					В комплекте рассеивающая линза 40°
							        				</p>
							        			</li>
							        		</ul>
							        		<a href="#" class="rent-block__order">
							        			Арендовать оборудование
							        		</a>
							        	</div>
							        </div>
							        <div class="swiper-slide swiper-slide__rent">
							        	<img src="<?php bloginfo('template_directory')?>/img/rent2.jpg" alt="Аренда">
							        	<div class="rent-block">
							        		<h5>
							        			Robe Robin ParFect 100
							        		</h5>
							        		<ul class="rent-block__text">
							        			<li>
							        				<p>
							        					Источник света 12 светодиодов по 15 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					Потребляемая мощность 200 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					В комплекте рассеивающая линза 40°
							        				</p>
							        			</li>
							        		</ul>
							        		<a href="#" class="rent-block__order">
							        			Арендовать оборудование
							        		</a>
							        	</div>
							        </div>
							        <div class="swiper-slide swiper-slide__rent">
							        	<img src="<?php bloginfo('template_directory')?>/img/rent3.jpg" alt="Аренда">
							        	<div class="rent-block">
							        		<h5>
							        			Robe Robin ParFect 100
							        		</h5>
							        		<ul class="rent-block__text">
							        			<li>
							        				<p>
							        					Источник света 12 светодиодов по 15 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					Потребляемая мощность 200 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					В комплекте рассеивающая линза 40°
							        				</p>
							        			</li>
							        		</ul>
							        		<a href="#" class="rent-block__order">
							        			Арендовать оборудование
							        		</a>
							        	</div>
							        </div>
							        <div class="swiper-slide swiper-slide__rent">
							        	<img src="<?php bloginfo('template_directory')?>/img/rent4.jpg" alt="Аренда">
							        	<div class="rent-block">
							        		<h5>
							        			Robe Robin ParFect 100
							        		</h5>
							        		<ul class="rent-block__text">
							        			<li>
							        				<p>
							        					Источник света 12 светодиодов по 15 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					Потребляемая мощность 200 Вт
							        				</p>
							        			</li>
							        			<li>
							        				<p>
							        					В комплекте рассеивающая линза 40°
							        				</p>
							        			</li>
							        		</ul>
							        		<a href="#" class="rent-block__order">
							        			Арендовать оборудование
							        		</a>
							        	</div>
							        </div>
							    </div>
							</div>
							<!-- Slider end-->
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<section class="news" id="news">
		<div class="container">
			<div class="news-head d-flex justify-content-between">
				<div class="section-title">
					<h2>
						Новости
					</h2>
				</div>
				<button class="btn-link news-link">Все новости</button>
				<!-- <a href="#" class="btn-link news-link">Все новости</a> -->
			</div>
			<div class="news-block">
				<div class="row">
					<div class="col-lg-6">
						<div class="news-content d-flex">
							<img src="<?php bloginfo('template_directory')?>/img/news1.jpg" class="news-content__first" alt="Новости">
							<div class="news-content__block">
								<div class="news-content__head d-flex">
									<h4>
										Семинар Milos
									</h4>
									<span>
										27.01.2019
									</span>
								</div>
								<p>
									Наши сотрудники прошли последний семинар от компании <b>Milos</b>. Они получили новый объем знаний, который позволит нашей компании заниматься оборудованием не только мероприятий, но производственных помещений.
								</p>
								<a href="#" class="readMore">
									Читать полностью...
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="news-content">
							<h4>
								Выставка Prolight+Sound <br>  NAMM Russia 2016
							</h4>
							<p>
								30 контрактов, тысячи восторженных посетителей...
							</p>
							<div class="news-content__head d-flex align-items-end">
								<img src="<?php bloginfo('template_directory')?>/img/news2.jpg" class="news-content__last" alt="Новости">
								<span>
									27.01.2019
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="news-content">
							<h4>
								Семинар <br> Robe
							</h4>
							<p>
								30 января 2017 года наши сотрудники побывали в Берлине..
							</p>
							<div class="news-content__head d-flex align-items-end">
								<img src="<?php bloginfo('template_directory')?>/img/news3.jpg" class="news-content__last" alt="Новости">
								<span>
									27.01.2019
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="news-block__all" id="news-block__all">
				<div class="row">
					<div class="col-lg-6">
						<div class="news-content d-flex">
							<img src="<?php bloginfo('template_directory')?>/img/news1.jpg" class="news-content__first" alt="Новости">
							<div class="news-content__block">
								<div class="news-content__head d-flex">
									<h4>
										Семинар Milos
									</h4>
									<span>
										27.01.2019
									</span>
								</div>
								<p>
									Наши сотрудники прошли последний семинар от компании <b>Milos</b>. Они получили новый объем знаний, который позволит нашей компании заниматься оборудованием не только мероприятий, но производственных помещений.
								</p>
								<a href="#" class="readMore">
									Читать полностью...
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="news-content">
							<h4>
								Выставка Prolight+Sound <br>  NAMM Russia 2016
							</h4>
							<p>
								30 контрактов, тысячи восторженных посетителей...
							</p>
							<div class="news-content__head d-flex align-items-end">
								<img src="<?php bloginfo('template_directory')?>/img/news2.jpg" class="news-content__last" alt="Новости">
								<span>
									27.01.2019
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="news-content">
							<h4>
								Семинар <br> Robe
							</h4>
							<p>
								30 января 2017 года наши сотрудники побывали в Берлине..
							</p>
							<div class="news-content__head d-flex align-items-end">
								<img src="<?php bloginfo('template_directory')?>/img/news3.jpg" class="news-content__last" alt="Новости">
								<span>
									27.01.2019
								</span>
							</div>
						</div>
					</div>
				</div>
				<button class="btn-link news-link news-link__off">Скрыть</button>
			</div>
		</div>
	</section>
	<section class="about" id="about">
		<div class="container">
			<div class="news-head d-flex justify-content-between">
				<div class="section-title">
					<h2>
						О компании
					</h2>
				</div>
			</div>
			<div class="about-content">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php bloginfo('template_directory')?>/img/about.jpg" class="about-director" alt="Директор">
					</div>
					<div class="col-md-6">
						<div class="about-text">
							<h4 class="about-rext__title">
								Компания Светотехнического оборудования
								<span>Trans Light</span>
							</h4>
							<p>
								Основатель компании <b>Евгений Иванов</b> осуществляет внедрение энергосберегающих технологий освещения, используя высококачественные светодиодные прожекторы, лампы и светильники. Мы на рынке светотехнического оборудования 15 лет.
							</p>
							<p>
								Наша компания представляет собой полностью сбалансированное предприятие, по поставке на Российский рынок источников света на основе сверхъярких светодиодов, от ведущих отечественных и зарубежных производителей!
							</p>
							<p>
								Наш коллектив – это сплоченная команда единомышленников. Каждый сотрудник компании относится к работе с максимальной отдачей, вкладывая в любую мелочь часть своей души. <br>
								Мы гордимся нашей командой и убеждены в том, что именно ориентированность на клиента, наш профессионализм позволяют предложить Вам лучшие инженерные и технологичные решения.
							</p>
							<div class="about-contact">
								<span class="about-contact__title">Связаться с руководителем компании</span>
								<a href="tel:+78127108025">
									+7 (918) 000-99-99
								</a>
								<a href="mailto:director@translight.ru">
									director@translight.ru
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('template-parts/footer') ?>