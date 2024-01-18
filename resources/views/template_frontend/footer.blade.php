	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-4">
					<div class="footer-widget">
						<div class="footer-logo">
						<br>	
						<a href="index.html" class="logo"><img src="{{ asset('img/logo-ti-foot.png') }}" alt=""></a>
						<br>
						<br>
						<br>
						<br>
						</div>
						<p>Ini merupakan Portal sistem Informasi Terpusat dari Prodi Teknik Informatika untuk mempermudah mahasiswa dalam meperoleh informasi yang cepat dan valid.</p>
						<ul class="contact-social">
							<li><a href="https://www.facebook.com/" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=6285156001102" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://www.youtube.com/" class="social-youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/raza_gopo/" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<!--<div class="col-md-4">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach ($category_widget as $hasil)
								  <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>-->
				<br>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach ($tag as $hasil)
								  <li><a href="#">{{ $hasil->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Kirim Kritik dan Saran anda, dengan cara berlangganan email di bawah ini.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<!--<ul class="footer-nav">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
					</ul>-->
				</div>
        <div class="col-md-6 col-md-pull-6">
			<div class="footer-copyright">
				Copyright &copy;
				@if (date('Y') == '2023')
					{{ date('Y') }}
				@else
					2023 - {{ date('Y') }}
				@endif
				All rights reserved with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/nailarraza/" target="_blank">Mahasiswa TI Umpo</a>

			</div>
        </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
