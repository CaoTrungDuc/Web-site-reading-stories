@extends('index')
@section('content')
    <div class="qdp-content home-content">
        <div class="qdp-border home-msg-wrapper nap-xu">
            <form action="https://truyen.tangthuvien.vn/nap-xu" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="kLHAY9E79CzA9vgK9Z1xjL0DqrFB1KgGcggmuuht">
                <div class="box-buy col-xs-12">
                    <div class="box-top col-xs-2">
                        <h1>Nạp Vàng</h1>
                    </div>
                    <div class="box-top  col-xs-6">

                        <h2>
                            <input type="number" min="10000" placeholder="Số tiền muốn nạp. Tối thiểu 10.000VNĐ" name="amount" class="form-control">
                        </h2>
                    </div>
                    <p class="col-xs-12"><i>Số vàng nhận được sẽ tương ứng % giá trị thẻ nạp ghi bên dưới, % bị trừ là phí do nhà mạng thu. Ví dụ nạp thẻ 10.000 bạn sẽ nhận được 80 vàng.<br>
                            - Thanh toán chuyển khoản trực tuyến thì nhận 95%<br>
                            - Thanh toán trực tuyến bằng thẻ quốc tế (visa) nhận 90%<br>
                            - Thanh toán bằng thẻ cào nhận 80%</i></p>
                    <div class="box-content col-xs-12">
                        <h2 class="box-title text-center"><span>Chọn hình thức thanh toán</span></h2>
                        <ul class="select-method">
                            <li class="local-bank">
                                <button type="button">
                                    <i class="glyphicon glyphicon-record" aria-hidden="true"></i>
                                    <input class="hidden" type="radio" disabled="" name="method" value="0">
                                    <span class="icon">&nbsp;</span>
                                    <span>Thẻ ngân hàng nội địa  <small style="color: red;">( Đang chờ cấp phép )</small></span>
                                </button>
                            </li>
                            <li class="world-bank">
                                <button type="button">
                                    <input class="hidden" type="radio" name="method" disabled="" value="1">
                                    <i class="glyphicon glyphicon-record" aria-hidden="true"></i>
                                    <span class="icon">&nbsp;</span>
                                    <span style="width: calc( 100% - 65px );"><img style="max-width: 100%" src="https://truyen.tangthuvien.vn/images/world-bank.png"><small style="color: red;">( Đang chờ cấp phép )</small></span>
                                </button>
                            </li>
                            <li class="ebanking">
                                <button type="button" onclick="chooseMethod(this)" class="active">
                                    <i class="glyphicon glyphicon-record" aria-hidden="true"></i>
                                    <input class="hidden" type="radio" name="method" value="10">
                                    <span class="icon">&nbsp;</span>
                                    <span>Chuyển khoản trực tiếp</span>
                                </button>
                                <div class="form-group col-xs-12 hidden">
                                    <p style="    border: 1px solid #dcdcdc;padding: 15px;margin-left: 10px;">
                                        <span>Chủ Tài Khoản: <strong>Lê Quốc Thạo</strong></span><br><br>
                                        <span>+ Techcombank, chi nhánh Trần Não, Tp HCM, số tài khoản: <strong>19024096879013</strong></span><br><br>
                                        <span>+ Vietcombank, chi nhánh Nha Trang, số tài khoản: <strong>0061000162678</strong></span><br><br>
                                        <span>+ Vietinbank chi nhánh 11, HCM số tài khoản: <strong>105867052964</strong></span><br><br>
                                        <span>+ Tài khoản Momo: <strong>0389000500</strong></span><br><br>
                                    </p>
                                </div>
                            </li>
                            <li class="local-store" style="display: none;">
                                <button type="button" onclick="chooseMethod(this)">
                                    <input class="hidden" type="radio" name="method" value="2">
                                    <i class="glyphicon glyphicon-record" aria-hidden="true"></i>
                                    <span class="icon">&nbsp;</span>
                                    <span>Tại điểm giao dịch</span>
                                </button>
                            </li>
                            <li class="card" style="display: none;">
                                <button type="button" onclick="chooseMethod(this)">
                                    <input class="hidden" type="radio" name="method" value="3">
                                    <i class="glyphicon glyphicon-record" aria-hidden="true"></i>
                                    <span class="icon">&nbsp;</span>
                                    <span>Thẻ cào</span>
                                </button>
                                <div class="col-xs-12 list-card card-checkout form-group hidden">
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="viettel" class="">
                                            <img src="https://truyen.tangthuvien.vn/images/viettel.png" alt="Viettel">
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="mobifone" class="">
                                            <img src="https://truyen.tangthuvien.vn/images/mobifone.png" alt="Mobifone">
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="vinaphone" class="">
                                            <img src="https://truyen.tangthuvien.vn/images/vinaphone.png" alt="Vinaphone">
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="vnmobile" class="">
                                            <img src="https://truyen.tangthuvien.vn/images/vnmobile2.png" alt="VNmobile">
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="gate" class="">
                                            <img src="https://truyen.tangthuvien.vn/images/fptgate.png" alt="Gate">
                                        </label>
                                    </div>
                                    <!--div class="col-xs-6 col-sm-3 checkout">
                                        <label onclick="chooseCard(this)">
                                            <input type="radio" name="card_type" value="zing" class=""/>
                                            <img src="https://truyen.tangthuvien.vn/images/zing.png" alt="Zing" />
                                        </label>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 checkout">
                                        <label>
                                            <input type="radio" name="card_type" value="vcoin" class=""/>
                                            <img src="https://truyen.tangthuvien.vn/images/vcoin.png" alt="Vcoin" />
                                        </label>
                                    </div-->
                                </div>
                                <div class="col-xs-12 card-input-box form-group hidden">
                                    <div class="form-group col-xs-12">
                                        <input type="text" class="form-control" placeholder="Nhập mã thẻ cào" name="card_code" value="">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <input type="text" class="form-control" placeholder="Nhập số seri" name="card_seri" value="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0 text-center condition">
                            <p>Bằng việc sử dụng dịch vụ của chúng tôi, bạn đồng ý với <a href="#">Điều khoản sử dụng</a> của Tàng thư viện</p>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0 text-center button-sets">
                            <button id="button-checkout" type="submit" class="btn btn-primary"><span>Thanh toán</span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
