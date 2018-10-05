@extends('layouts.app')

@section('content')
	<header>
		@include('inc.nav')
		<div class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="header-page__title">программа форума</h1>
					</div>
				</div>
				<nav class="page-bread">
				  <ul class="bread">
				    <li class="bread__item">
				    	<a href="#">Главная</a>
				    </li>
				    <li class="bread__item active">
				    	<a href="#">программа</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="programm-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section__info">
						<div class="number-bg">Programm</div>
						<span class="section__number">Qazmeet</span>
					</div>
					<h2 class="section__heading">Программа форума <br>“АПК- новый драйвер экономики”</h2>

					<div class="list">
						<div id="accordion">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
						          <span class="time">08.00 - 09.00</span>
						          <p class="title">Регистрация участников, утренний кофе-брейк</p>
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">tab1</div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <span class="time">10.30 - 11.30</span>
						          <p class="title">Демонстрация цифровых решений АПК</p>
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">tab2</div>
						    </div>
						  </div>
						</div>
					</div>

				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</div>

	
  @include('inc.footer')
@endsection