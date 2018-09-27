@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Giới thiệu</li>
  </ol>
  <div class="row">
    <div class="col-12">
      <h1 class="text-center"><strong>Giới thiệu</strong></h1>
      <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-6 margin-bottom-20">
                <form role="form" method="post" action="{{route('getInfo')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="ex">Tên công ty</label>
                        <input id="name" class="form-control input-lg" type="text" name="name" value="{{$about->name}}">
                    </div>
                    <div class="form-group">
                        <label for="ex">Adress</label>
                        <input id="address" class="form-control" name="address" value="{{$about->address}}">
                    </div>
                    <div class="form-group">
                        <label for="ex">Phone</label>
                        <input id="phone" class="form-control" name="phone" value="{{$about->phone}}" >
                    </div>
                    <div class="form-group">
                        <label for="ex">Fax</label>
                        <input id="fax" class="form-control" name="fax" value="{{$about->fax}}">
                    </div>
                    <div class="form-group">
                        <label for="ex">Email</label>
                        <input id="email" class="form-control" name="email" value="{{$about->email}}">
                    </div>
                    <button type="submit" class="btn btn-default">Thay đổi</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
            <div class="col col-lg-3">
                <p>Trạng thái</p>
                @if(session('success'))
                <div class="alert alert-success" height="10">
                    <p>{{session('success')}}</p>
                </div>
                @endif
                @if(count($errors) > 0)
                <div class="alert alert-success" height="10">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </div>
                @endif
            </div>
            
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © Your Website 2018</small>
  </div>
</div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="{{route('getLogout')}}">Logout</a>
</div>
</div>
</div>
</div>
</div>

@endsection