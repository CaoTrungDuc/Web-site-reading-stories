@extends('index')
@section('content')
    <div class="qdp-content home-content">
        <div class="home-user-wrapper qdp-border" data-l2="1">
            <div class="home-user-avatar" data-l3="1">
                <a href="https://truyen.tangthuvien.vn/setting" class="user-avatar-a">
                    <img class="user-avatar-img" src="https://truyen.tangthuvien.vn/images/default-avatar.jpeg" alt="lyt996" onerror="this.src='https://truyen.tangthuvien.vn/images/default-avatar.jpeg'">
                </a>
            </div>
            <div class="home-user" data-l3="1">
                <h3><a href="https://truyen.tangthuvien.vn/setting" data-eid="qd_M25"><font><font>lyt996 (ID: 803346)</font></font></a>
                </h3>
                <div class="home-user-safety">
                    <a href="javascript:void(0);" class="home-user-level" data-eid="qd_M26"> Bá Tánh Bình Dân </a>
                </div>
                <div class="home-user-data">
            <span id="elFriendGuide" style="height:56px;display:inline-block;">
                                <a href="javascript:void(0);" class="mr12" data-eid="qd_M27"><font><font>Số phiếu đề cử có:  </font></font><b class="home-user-b"><font><font>0</font></font></b></a>
                <a href="javascript:void(0);" class="mr12" data-eid="qd_M27"><font><font>Số chương đã convert:  </font></font><b class="home-user-b"><font><font>0</font></font></b></a>
                <a href="javascript:void(0);" class="mr12" data-eid="qd_M27"><font><font>Convert tháng này:  </font></font><b class="home-user-b"><font><font>0</font></font></b></a>
                <a href="javascript:void(0);" class="mr12" data-eid="qd_M27"><font><font>Xếp hạng tháng này:  </font></font><b class="home-user-b"><font><font>0</font></font></b></a>
            </span>
                </div>
                <div class="qdp-button">
                    <a href="https://truyen.tangthuvien.vn/setting" class="qdp-button-a qdp-button-icon ml12" data-eid="qd_M22"><i class="iconfont fa fa-cog" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="qdp-border home-msg-wrapper wd-f100">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="#top-xem-nhieu" aria-controls="top-xem-nhieu" role="tab" data-toggle="tab">Thông tin cá nhân</a></li>
                <li role="presentation"><a href="#top-yeu-thich" class="ajax-tab" aria-controls="profile" role="tab" data-toggle="tab">Thay đổi avatar</a></li>
                <li role="presentation"><a href="#top-theo-doi" class="ajax-tab" aria-controls="messages" role="tab" data-toggle="tab">Danh hiệu</a></li>
                <li role="presentation"><a href="#top-binh-luan" class="ajax-tab" aria-controls="messages" role="tab" data-toggle="tab">Lịch sử mua hàng</a></li>
                <li role="presentation" class="active"><a href="#top-de-cu" class="ajax-tab" aria-controls="messages" role="tab" data-toggle="tab">Lịch sử nạp tiền</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane " id="top-xem-nhieu">
                    <div class="list-in-user no-border">
                        <form action="https://truyen.tangthuvien.vn/update-info" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="_token" value="kLHAY9E79CzA9vgK9Z1xjL0DqrFB1KgGcggmuuht">
                            <div class="form-group">
                                <label class="col-sm-2">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="full_name" value="lyt996">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="email" value="anhcomql123@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Mật khẩu hiện tại</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Mật khẩu mới</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">Xác nhận lại</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" class="btn btn-default"><span>Cập nhật</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="top-yeu-thich">
                    <div class="list-in-user no-border">
                        <form action="https://truyen.tangthuvien.vn/upload-avatar" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="_token" value="kLHAY9E79CzA9vgK9Z1xjL0DqrFB1KgGcggmuuht">
                            <div id="avatarXChoose" class="avatar-x-choose">
                                <img class="avatar-show" src="https://nae.vn/ttv/ttv/public/images_user/803346.png" alt="" width="80px" height="80px">


                                <!--   -->
                                <div class="avatar-text">
                                    <p class="gray"><font><font>Support jpg, gif, png format images, upload file size does not exceed 5MB, picture size should be greater than<br> 80 * 80.</font></font></p>
                                </div>

                                <div>

                                    <input type="file" name="image"><br>
                                    <button type="submit" class="ui-button" for="fileAvatar" id="elLabelforup" role="button" tabindex="-1" data-eid="qd_M141"><font><font>Local upload </font></font></button>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="top-theo-doi">
                    <div class="list-in-user no-border">
                        <div class="story-user">
                            <div class="col-xs-3 col-md-3 col-sm-3">
                                <h5><strong>Danh hiệu</strong></h5>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                                <h5><strong>Image</strong></h5>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                                <h5><strong>Mô tả</strong></h5>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <h5><strong>Ngày nhận</strong></h5>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <h5><strong></strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="top-binh-luan">
                    <a class="pull-right next-to" href="https://truyen.tangthuvien.vn/shop-vat-pham">Vào xem cửa hàng &gt;&gt;</a>
                    <div class="list-in-user no-border">
                        <div class="story-user">
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <h5><strong>Hành động</strong></h5>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 text-center">
                                <h5><strong>Thời gian </strong></h5>
                            </div>
                            <div class="col-xs-5 col-md-5 col-sm-5">
                                <h5>Mô tả</h5>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <h5><strong>Giá trị</strong></h5>
                            </div>


                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane  active " id="top-de-cu">
                    <a class="pull-right next-to" href="https://truyen.tangthuvien.vn/nap-xu">Nạp vàng vào tài khoản &gt;&gt;</a>
                    <div class="list-in-user no-border">
                        <div class="story-user">
                            <div class="col-xs-6 text-center">
                                <h5>Mô tả</h5>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <h5><strong>Số lượng</strong></h5>
                            </div>
                            <div class="col-xs-4 text-center">
                                <h5><strong>Thời gian </strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
