@extends('index')
@section('content')
    <div class="qdp-content home-content">
        <div class="list-in-user">
            <div class="col-xs-12">
                <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Gửi tin nhắn</h3>
            </div>
            <form action="https://truyen.tangthuvien.vn/send-message" method="post" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="_token" value="kLHAY9E79CzA9vgK9Z1xjL0DqrFB1KgGcggmuuht">
                <div class="form-group">
                    <label class="col-sm-2" for="chap_stt">Gửi tới</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="send_to" placeholder="Người nhận tin" type="text">
                        <p><small><em>Điền tên tài khoản và các tài khoản phân định bằng dấu ;</em></small></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="introduce">Tin nhắn</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="message" rows="10" placeholder="Tin nhắn" type="text"></textarea>
                    </div>
                </div>
                <div class="form-group text-right">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn btn-default"><span>Gửi tin nhắn</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
