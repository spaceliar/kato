@extends('main')
@section('content')
<!-- Content strats -->

<div class="content">
	<div class="container" style="padding-left: 30px;padding-right: 30px;background-color: #FFF;">
		<div class="row" style="margin-top: 10px;">
			<div class="span12">

				<!-- Blog starts -->

				<div class="blog">
					<div class="row">
						<div class="span12">

							<!-- Blog Posts -->
							<div class="row">
								<div class="span8">
									<div class="posts pblock">
										@foreach($product as $pr)
										@if(($loop->index+1) == $loop->last && ($loop->index+1)%2 != 0)
										<div class="row">
											<div class="span4">
												<!-- Post 2 -->
												<div class="entry">
													<h2><a href="">{{$pr->name}}</a></h2>
													<!-- Meta details -->
													<div class="meta">
														<i class="icon-calendar"></i> {{date('d-m-Y',strtotime($pr->created_at))}}<i class="icon-folder-open"></i> <a href="">Đồ uống</a> <span class="pull-right">0 <i class="icon-comment"></i></span>
													</div>

													<!-- Thumbnail -->
													<div class="bthumb2">
														<a href=""><img src="public/img/{{$pr->img}}.jpg" alt="{{$pr->name}}" /></a>
													</div>
													<p>&nbsp;</p>
												</div>
											</div>
										</div>

										@elseif(($loop->index+1)%2 != 0)
										<div class="row">
											<div class="span4">
												<!-- Post 2 -->
												<div class="entry">
													<h2><a href="">{{$pr->name}}</a></h2>
													<!-- Meta details -->
													<div class="meta">
														<i class="icon-calendar"></i> {{date('d-m-Y',strtotime($pr->created_at))}}<i class="icon-folder-open"></i> <a href="">Đồ uống</a> <span class="pull-right">0 <i class="icon-comment"></i></span>
													</div>

													<!-- Thumbnail -->
													<div class="bthumb2">
														<a href=""><img src="public/img/{{$pr->img}}.jpg" alt="{{$pr->name}}" /></a>
													</div>
													<p>&nbsp;</p>
												</div>
											</div>
											@else
											<div class="span4">
												<!-- Post 2 -->
												<div class="entry">
													<h2><a href="">{{$pr->name}}</a></h2>
													<!-- Meta details -->
													<div class="meta">
														<i class="icon-calendar"></i> {{date('d-m-Y',strtotime($pr->created_at))}}<i class="icon-folder-open"></i> <a href="">Đồ uống</a> <span class="pull-right">0 <i class="icon-comment"></i></span>
													</div>

													<!-- Thumbnail -->
													<div class="bthumb2">
														<a href=""><img src="public/img/{{$pr->img}}.jpg" alt="{{$pr->name}}" /></a>
													</div>
													<p>&nbsp;</p>
												</div>
											</div>
										</div>

										@endif


										@endforeach

										<div class="clearfix"></div>
									</div>

								</div>                        
								<div class="span4">
									<div class="sidebar">
										<!-- Widget -->
										<div class="widget">
											<h4>Xem nhiều nhất</h4>
											<ul>
												@foreach($product_all as $pa)
												<li><a href=""> {{$pa->name}}</a></li>
												@endforeach
											</ul>
										</div> 
									</div>                                                
								</div>
							</div>

						</div>
					</div>
				</div>


				<!-- Service ends -->

				<!-- CTA starts -->

				<div class="cta">
					<div class="row">
						<div class="span9">
							<!-- First line -->
							<p class="cbig">Sản phẩm đang khuyến mãi.</p>
							<!-- Second line -->
							<p class="csmall">Click để xem thông tin chi tiết về các sản phẩm đang khuyến mãi của Katosangyo.</p>
						</div>
						<div class="span2">
							<!-- Button -->
							<div class="button"><a href="khuyen-mai.html">Xem chi tiết.</a></div>
						</div>
					</div>
				</div>

				<!-- CTA Ends -->

			</div>
		</div>
	</div>
</div>   

<!-- Content ends --> 
@endsection