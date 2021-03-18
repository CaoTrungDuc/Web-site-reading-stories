@extends('index')
@section('content')
    <div class="main-content-wrap fl">
        <div class="rank-header authors-header">
            <h3 class="lang">Danh sách các tác giả</h3>
        </div>
        <div class="rank-body authors-body">
            <div class="logging-fade hidden"></div>
            <div class="rank-view-list" id="rank-view-list">
                <div class="book-img-text">
                    <ul>
                        <li><p>Không tìm thấy tác giả nào từ danh sách truyện của bạn</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-box cf">
            <div class="pagination fr">

            </div>
        </div>
    </div>
    </div>
@endsection
