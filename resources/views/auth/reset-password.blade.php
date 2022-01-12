@extends('frontend.frontend_master')

@section('main_content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">

<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Reset Password</h4>
	<p class="">Enter the new password for your account.</p>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="form-group">
		    <label class="info-title">Email Address <span>*</span></label>
		    <input name="email" id="email" type="email" class="form-control unicase-form-control text-input" required autofocus >
		</div>

        <div class="form-group">
		    <label class="info-title">New Password <span>*</span></label>
		    <input name="password" id="password" type="password" class="form-control unicase-form-control text-input" required autocomplete="new-password" >
		</div>

        <div class="form-group">
		    <label class="info-title">Password Confirmation <span>*</span></label>
		    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control unicase-form-control text-input" required autocomplete="new-password">
		</div>

	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>
	</form>					
</div>

</div><!-- /.row -->
</div>
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

        @include('frontend.body.brand')
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection