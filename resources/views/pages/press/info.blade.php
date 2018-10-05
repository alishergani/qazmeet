@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="header-page__title">пресс-центр</h1>
					</div>
				</div>
				<div class="row button-wrapper">
					<div class="col-lg-4 col-12">
						<a href="/press/info">
							<button class="tab-button active" data-name="ИНФОРМАЦИЯ ДЛЯ СМИ"></button>
						</a>
					</div>
					<div class="col-lg-4 col-12">
						<a href="/press/credit">
							<button class="tab-button" data-name="АКРЕДИТАЦИЯ СМИ"></button>
						</a>
					</div>
					<div class="col-lg-4 col-12">
						<a href="/press/photobank">
							<button class="tab-button" data-name="ФОТОБАНК"></button>
						</a>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Пресс-центр</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">Информация</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="press-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="date-filter">
						<p class="title">Архив новостей:</p>
						<div class="select">
							<select name="mounth">
								<option value="Январь">Январь</option>
								<option value="Февраль">Февраль</option>
								<option value="Март">Март</option>
								<option value="Апрель">Апрель</option>
								<option value="Май">Май</option>
								<option value="Июнь">Июнь</option>
								<option value="Июль">Июль</option>
								<option value="Август">Август</option>
								<option value="Сентябрь" selected>Сентябрь</option>
								<option value="Октябрь">Октябрь</option>
								<option value="Ноябрь">Ноябрь</option>
								<option value="Декабрь">Декабрь</option>
							</select>
						</div>
						<div class="select">
							<select name="year">
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018" selected>2018</option>
								<option value="2019">2019</option>
							</select>
						</div>

					</div>
				</div>
			</div>
			<div class="smi-info">
				<div class="row">
					<div class="col-lg-4">
						<div class="press-center__info">
							<div class="number-bg">01</div>
							<span class="press-center__number">01.</span>
							<p class="press-center__name">СМИ</p>
						</div>
						<h1 class="press-center__heading">ИНФОРМАЦИЯ ДЛЯ СМИ</h1>
					</div>
           
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/1" class="more">подробнее</a>
					</div>

					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/2" class="more">подробнее</a>
					</div>
          
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/3" class="more">подробнее</a>
					</div>
           
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/4" class="more">подробнее</a>
					</div>
           
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/5" class="more">подробнее</a>
					</div>
             
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/6" class="more">подробнее</a>
					</div>
           
					<div class="col-lg-4 smi-info__card">
						<div class="img" style="background-image: url('../images/member3.jpg');">
							<div class="date">19.07.2018</div>
						</div>
						<p class="text">ИНФОРМАЦИЯ О БЕЗОПАСНОСТИ И КОНФИДЕНЦИАЛЬНОСТИ ПЛАТЕЖЕЙ</p>
						<a href="/press-center/7" class="more">подробнее</a>
					</div>
         
					<div class="col-lg-4">
						<div class="subscribe">
							<h5 class="subscribe__heading">подписаться на новости</h5>
							<form action="">
								<input type="email" name="email" placeholder="Введите Е-mail"><br>
								<button class="butn" type="submit">подписаться</button>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="pagination">
							<span class="item active">1</span>
							<span class="item">2</span>
							<span class="item">3</span>
							<span>...</span>
							<span class="item">8</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="partner section" id="partner">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section__info">
						<div class="number-bg">06</div>
						<span class="section__number">06.</span>
						<p class="section__name">Партнеры</p>
					</div>
					<h1 class="section__heading">генеральные партнеры форума</h1>
					<div class="icons-slider">
						<div class="wrapper">
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
							<div class="item"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="show">
						<div class="show__content">
							<h3 class="show__heading">все партнеры</h3>
							<a href="" class="show__link">Показать</a>
						</div>
						<div class="next">
							{{-- <img src="images/arrow.png" alt=""> --}}
							<img src="../images/arrow.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
  @include('inc.footer')
@endsection