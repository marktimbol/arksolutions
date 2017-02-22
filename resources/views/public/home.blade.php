@extends('public.app')

@section('pageTitle', 'Home')

@section('content')
	<div class="container">
		<h1 class="title">Ark Solutions</h1>
		<div class="tile is-ancestor">
			<div class="tile is-8">
				<div class="tile is-parent">
					<article class="tile is-child">
						<figure class="img">
							<img src="/images/main-article.jpg" alt="" title="" class="has-radius"/>
						</figure>
					</article>
				</div>
			</div>

			<div class="tile">
				<div class="tile is-parent is-vertical">
					<article class="tile is-child notification is-danger">
						<p class="title">Newsletter</p>
						<p>
							Join the weekly newsletter and never miss out on new tips, tutorials, and more.
						</p>
					</article>

					<article class="tile is-child notification is-info">
						<p class="title">Other News</p> 
					</article>					
				</div>
			</div>
		</div>

		<div class="tile is-ancestor">
			<div class="tile is-4">
				<div class="tile is-parent is-vertical">
					<article class="tile is-child notification is-primary">
						<p class="title">Some Title</p> 
					</article>
					<article class="tile is-child notification is-danger">
						<p class="title">Some Title</p> 
					</article>
				</div>
			</div>

			<div class="tile">
				<div class="tile is-parent">
					<article class="tile is-child">
						<figure class="image">
							<img src="/images/second-article.jpg" alt="" title="" class="has-radius" />
						</figure>
					</article>
				</div>
			</div>
		</div>
	</div>

	<section class="bg-gray padding-y-40">
		<div class="container">
			<h2 class="title">Other News</h2>

			<div class="columns">
				<div class="column">
					<div class="card">
						<div class="card-image">
							<figure class="image">
								<img src="/images/350x177.png" alt="Image" />
							</figure>
						</div>
						<div class="card-content">
							<div class="media-content">
								<h4 class="title">John Doe</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="card-image">
							<figure class="image">
								<img src="/images/350x177.png" alt="Image" />
							</figure>
						</div>
						<div class="card-content">
							<div class="media-content">
								<h4 class="title">John Doe</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<div class="card-image">
							<figure class="image">
								<img src="/images/350x177.png" alt="Image" />
							</figure>
						</div>
						<div class="card-content">
							<div class="media-content">
								<h4 class="title">John Doe</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection