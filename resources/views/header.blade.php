<!-- Header starts -->

        <header>
            <div class="container" style="padding-left: 30px;padding-right: 30px;padding-top: 30px;background-color: #FFF;">
                <div class="row">
                    <div class="span4">
                        <!-- Logo and site link -->
                        <div class="logo">
                            <h1><a href="index.html">
                                    <img src="public/img/logo.png"/>
                                </a></h1>
                        </div>
                    </div>
                    <div class="span4 offset4">
                        <div class="list">
                            <!-- Add your phone number here -->
                            <div class="phone">
                                <i class="icon-phone"></i>Điện thoại: {{$about->phone}}
                            </div>
                            <!--<hr />-->
                            <!-- Add your email id here -->
                            <!--                            <div class="email">
                                                            <i class="icon-envelope-alt"></i> Email: someting@gmail.com
                                                        </div>-->
                            <hr />
                            <!-- Add your address here -->
                            <div class="address">
                                <i class="icon-home"></i> Địa chỉ: {{$about->address}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header ends -->