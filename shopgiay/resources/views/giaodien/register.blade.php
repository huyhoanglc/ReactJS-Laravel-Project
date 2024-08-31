@extends("giaodien/layout")
@section("noidung")
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="{{asset('public/frontend')}}/img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Register</h3>
						<form class="row login_form"  method="post" >
							@csrf
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" name="hoten" value="{{old('hoten')}}" placeholder="fullname" >
								{!!$errors->first('hoten','<div class="text-danger">:message</div>')!!}
							</div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
								{!!$errors->first('email','<div class="text-danger">:message</div>')!!}
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password">
								{!!$errors->first('password','<div class="text-danger">:message</div>')!!}
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Register</button>
								<a href="#">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection