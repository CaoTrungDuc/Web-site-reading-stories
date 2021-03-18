@extends('index')
@section('content')
    <div class="qdp-content home-content">
        <div class="list-in-user">
            <div class="story-user">
                <div class="col-xs-4 col-md-4 col-sm-4">
                    <h4>Tên truyện</h4>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                    <h5><strong>Sửa</strong></h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                    <h5><strong>Quản lý chương</strong></h5>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                    <h5><strong>KTra Chương mới</strong></h5>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                    <h5><strong>Thêm chương</strong></h5>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                    <h5><strong>Trạng thái</strong></h5>
                </div>
                @foreach($list_story as $story)
                    <div class="list-in-user">
                        <div class="story-user">
                            <div class="col-xs-4 col-md-4 col-sm-4">
                                <a><strong>{{$story->name}}</strong></a>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <a href=""><strong>Sửa</strong></a>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <a><strong>Quản lý chương</strong></a>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                <a><strong>KTra Chương mới</strong></a>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                                <a><strong>Thêm chương</strong></a>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1 text-center">
                                <a><strong>{{$story->status === 1 ? "Hoàn thành" : "Đang ra"}}</strong></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
