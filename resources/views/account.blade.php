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
        <ul class="qdp-border home-msg-wrapper user-wrapper" data-l2="1">
            <li class="home-msg balance col-sm-3 col-xs-6">
                <div class="home-msg-title"><i class="iconfont icon-price yellow"></i><b><font><font>Ngân quỹ</font></font></b></div>
                <p class="wd-f100"><label>Vàng:</label> <span>0</span></p>
                <p class="wd-f100"><label>Thạch:</label> <span>0</span></p>
                <a class="home-msg-more blue" href="https://truyen.tangthuvien.vn/nap-xu" data-eid="qd_M31"><font><font>Nạp vàng</font></font></a>
            </li>
            <li class="home-msg col-sm-3 col-xs-6">
                <div class="home-msg-title"><i class="iconfont icon-piaojia green"></i><b><font><font>Danh hiệu</font></font></b></div>
                <strong>0</strong>
                <a class="home-msg-more blue" href="https://truyen.tangthuvien.vn/setting?tab=danh-hieu-cua-toi" data-eid="qd_M31"><font><font>Xem tất cả</font></font></a>
            </li>
            <li class="home-msg col-sm-3 col-xs-6">
                <div class="home-msg-title"><i class="iconfont icon-book blue"></i><b><font><font>Truyện theo dõi</font></font></b></div>
                <strong>0</strong>
                <a class="home-msg-more blue" href="https://truyen.tangthuvien.vn/my-follow" data-eid="qd_M31"><font><font>Xem tất cả</font></font></a>
            </li>
            <li class="home-msg col-sm-3 col-xs-6">
                <div class="home-msg-title"><i class="iconfont icon-note highlight"></i><b><font><font>Truyện đề cử</font></font></b></div>
                <strong>0</strong>
                <a class="home-msg-more blue" href="https://truyen.tangthuvien.vn/my-nonimate" data-eid="qd_M31"><font><font>Xem tất cả</font></font></a>
            </li>
        </ul>
    </div>
@endsection
