@extends('quantri.layouts.main')
@section('content')
<!-- Content strats -->

<div class="content">
	<div class="container" style="padding-left: 30px;padding-right: 30px;background-color: #FFF;">
		<div class="row" style="margin-top: 10px;">
			<div class="span12">
				<h5><i>Xin chào {{Auth::user()->email}}, <a href='logout.php'>Đăng xuất</a></i></h5>
				<hr>
				<!-- Contact hero -->
				<div class="hero">
					<!-- Title. Don't forget the <span> tag -->
						<h3><span>Quản lý Thông tin công ty</span></h3>
						<!-- para -->
						
				</div>
					<!-- Contact -->
				<div class="col-md-6 col-md-offset-3">
					<form role="form" method="post" action="{{route('getInfo')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label for="name">Tên công ty</label>
							<input type="text" class="input-group-lg"  name="name" value="{{$about->name}}">

						</div>

					</form>
				</div>
				</div>
			</div>
		</div>
</div>


		<!-- Content ends --> 

		@endsection