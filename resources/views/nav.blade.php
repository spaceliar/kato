<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        Menu
                    </a>
                    <div class="nav-collapse collapse">
                        <!-- Navigation links starts here -->
                        <ul class="nav">
                            <!-- Main menu -->
                            <li><a href="index.html">Trang chủ</a></li>
                            <li><a href="{{route('getGioiThieu')}}">Giới thiệu</a></li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm<b class="caret"></b></a>
                                <!-- Submenus -->
                                <ul class="dropdown-menu">
                                    @foreach($kind as $ki)
                                        <li><a href="sanpham/{{$ki->url}}">{{$ki->name}}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>  
                            <li class="dropdown">
                                <!--<a href="dich-vu.html">Dịch vụ </a>-->
                                <!--                                 Submenus 
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="news-detail.html">Sản phẩm</a></li>
                                                                    <li><a href="#">Dịch vụ</a></li>
                                                                </ul>-->
                            </li> 
                            <li><a href="khuyen-mai.html">Khuyến mãi</a></li>
                            <li><a href="am-thuc-nhat-ban.html">Ẩm thực Nhật Bản</a></li>
                            <li><a href="tuyen-dung.html">Tuyển dụng</a></li>
                            <li><a href="lien-he.html">Liên hệ</a></li>              
                        </ul>
                    </div>
                </div>
            </div>
        </div>