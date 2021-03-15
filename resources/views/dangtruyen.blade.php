@extends('index')
@section('content')
    <div class="qdp-content home-content">
        <div class="list-in-user">
            <div class="col-xs-12">
                <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Đăng truyện</h3>
            </div>
            <form action="https://truyen.tangthuvien.vn/post-truyen" method="post" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="_token" value="kLHAY9E79CzA9vgK9Z1xjL0DqrFB1KgGcggmuuht">
                <input type="hidden" name="id" value="0">
                <div class="form-group">
                    <label class="col-sm-2" for="story_name">Tên truyện</label>
                    <div class="col-sm-8">
                        <input class="form-control" value="" name="story_name" placeholder="Viết hoa chữ đầu mỗi từ" type="text" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="china_name">Tên tiếng trung</label>
                    <div class="col-sm-8">
                        <input class="form-control" value="" placeholder="Nhập tên tiếng trung nếu có" name="china_name" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="china_link">Link tiếng trung</label>
                    <div class="col-sm-8">
                        <input class="form-control" value="" placeholder="Nhập link Trung Quốc nếu có" name="china_link" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="author">Tác giả</label>
                    <div class="col-sm-8">
                        <input class="form-control ui-autocomplete-input" value="" id="author" placeholder="Nhập tên tác giả" name="author" type="text" required="" autocomplete="off">
                        <p id="res1"><ul id="ui-id-3" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul></p>
                        <input type="hidden" value="0" name="author_id" id="res2">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="type">Thể loại</label>
                    <div class="col-sm-8">
                        <select name="type" class="form-control" onchange="updateCat(this)" required="">
                            <option disabled="" selected="" value=""> -- Chọn thể loại -- </option>
                            <option value="1">Truyện convert - Nam</option>
                            <option value="2">Truyện dịch</option>
                            <option disabled="" value="3">Truyện ngôn tình - Sưu Tầm</option>
                            <option value="4">Truyện sáng tác</option>
                            <option value="5">Truyện ngôn tình</option>
                        </select>
                    </div>
                </div>
                <div class="form-group " id="cat-nomal">
                    <label class="col-sm-2" for="category">Danh mục</label>
                    <div class="col-sm-8">
                        <select name="category" class="form-control" onchange="updateTag(this)" required="">
                            <option selected="" value="1">Tiên Hiệp</option>
                            <option value="2">Huyền Huyễn</option>
                            <option value="3">Đô Thị</option>
                            <option value="4">Khoa Huyễn</option>
                            <option value="5">Kỳ Huyễn</option>
                            <option value="6">Võ Hiệp</option>
                            <option value="7">Lịch Sử</option>
                            <option value="8">Đồng Nhân</option>
                            <option value="9">Quân Sự</option>
                            <option value="10">Du Hí</option>
                            <option value="11">Cạnh Kỹ</option>
                            <option value="12">Linh Dị</option>
                        </select>
                    </div>
                </div>
                <div class="form-group  hidden " id="ngon-tinh-new">
                    <label class="col-sm-2" for="category">Danh mục</label>
                    <div class="col-sm-8">
                        <select name="category" class="form-control" disabled="" onchange="updateTag(this)">
                            <option value="49">Cổ Đại</option>
                            <option value="50">Chủng Điền</option>
                            <option value="51">Dị Thế</option>
                            <option value="52">Đồng Nhân</option>
                            <option value="53">Hiện Đại</option>
                            <option value="54">Huyền Huyễn</option>
                            <option value="55">Nữ Tôn</option>
                            <option value="56">Trùng Sinh</option>
                            <option value="57">Võng Du</option>
                            <option value="58">Xuyên Việt</option>
                            <option value="59">Nguyên Thủy</option>
                            <option value="60">Tương Lai</option>
                            <option value="61">Khác</option>
                        </select>
                    </div>
                </div>
                <div id="tag-container">
                    <div class="form-group subcat">
                        <label class="col-sm-2" for="category">Danh mục con</label>
                        <div class="col-sm-10">
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="200">Cổ điển tiên hiệp</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="160">Hiện đại tu chân</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="162">Huyễn tưởng tu tiên</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="163">Thần thoại tu chân</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="161">Tu chân văn minh</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-sm-2" for="category">Gắn thẻ (tag)</label>
                        <div class="col-sm-10">
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="114">Ác cảo</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="97">Bác sĩ</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="212">Báo thù</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="123">Bình tĩnh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="98">Cảm tình</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="101">Chức tràng</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="214">Chủng điền</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="140">Chủng điền văn</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="78">Cô nhi</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="120">Cơ trí</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="213">Công sở</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="137">Cường giả hồi quy</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="124">Cương thi</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="215">Dị năng</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="129">Dị thú lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="108">Dũng mãnh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="118">Dương quang</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="99">Giám bảo</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="119">Giảo hoạt</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="81">Hacker</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="205">Hàn môn</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="210">Hào môn</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="102">Hấp huyết quỷ</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="130">Hệ thống lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="121">Hèn mọn bỉ ổi</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="93">Hộ đoản</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="86">Học sinh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="132">Học viện lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="131">Hồng hoang lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="109">Huyền học</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="138">Kiếm tiền</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="136">Kiên nghị</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="122">Kiêu ngạo</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="208">Kinh dị</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="143">Kỹ thuật lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="116">Lãnh khốc</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="85">Lão sư</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="135">Lệ chí</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="91">LOL</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="103">Long</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="112">Luyện công lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="107">Ma thú</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="90">Ma vương phụ thể</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="87">Mập mạp</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="206">Mạt thế</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="82">Minh tinh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="115">Nhẹ nhõm</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="145">Nhiệt huyết</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="127">Nhuyễn phạn lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="144">Phàm nhân lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="96">Pháp sư</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="92">Phế vật lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="117">Phúc hắc</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="217">Phương Tây</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="110">Quần xuyên</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="105">Quỷ quái</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="84">Sát thủ</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="88">Sủng vật</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="94">Tạp phiến</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="104">Tây du</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="218">Thể thao</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="134">Thiết huyết</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="95">Thủ du</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="89">Thục sơn</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="141">Trạch nam</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="106">Trận pháp</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="139">Tranh phách lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="113">Triệu hoán lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="207">Trinh thám</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="146">Trùng sinh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="199">Tu chân</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="126">Tùy thân lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="133">Vị diện</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="142">Vô hạn lưu</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="128">Vô địch văn</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="211">Võng du</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="100">Vong linh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="201">Xuyên việt</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="83">Đặc chủng binh</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="80">Đặc công</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="111">Đan dược</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="125">Đạo mộ</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="79">Đạo tặc</label>
                            </div>
                            <div class="checkbox col-sm-4">
                                <label><input type="checkbox" name="tags[]" value="209">Đồng nhân</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="introduce">Giới thiệu</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" required="" name="introduce" rows="3" placeholder="Giới thiệu truyện sẽ quyết định số người muốn đọc truyện của bạn, hãy giới thiệu chi tiết và dễ hiểu nhất có thể" type="text"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="image">Poster truyện</label>
                    <div class="col-sm-8">
                        <img src="https://www.nae.vn/ttv/ttv/public/images/story/.jpg" width="35px" height="25px"> <input name="image" type="file">
                        <input type="hidden" name="img" id="img2" value="">
                        <p class="help-block">Hoặc chọn một poster bên dưới.&nbsp; <a href="javascript:void(0);" onclick="refreshImage()">Refresh</a></p>
                        <div class="row img-block">
                            <div class="col-md-3 col-xs-6 col-sm-3">
                                <a href="javascript:void(0);">
                                    <img onclick="jQuery('#img2').val(jQuery(this).attr('value'));active(this)" value="c7e6f717cb8a17d06688d7b1ba7bc37dedf098575fd1d6498b16264266fa421b" data="c7e6f717cb8a17d06688d7b1ba7bc37dedf098575fd1d6498b16264266fa421b" class="img-responsive poster" src="https://www.nae.vn/ttv/ttv/public/images/story/c7e6f717cb8a17d06688d7b1ba7bc37dedf098575fd1d6498b16264266fa421b.jpg" alt="cover">
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6 col-sm-3">
                                <a href="javascript:void(0);">
                                    <img onclick="jQuery('#img2').val(jQuery(this).attr('value'));active(this)" value="50a436a7c568081dcf683f9ccbc7fdf9c6d867a1ce3d2e8dee9f75b8d54c1b28" data="50a436a7c568081dcf683f9ccbc7fdf9c6d867a1ce3d2e8dee9f75b8d54c1b28" class="img-responsive poster" src="https://www.nae.vn/ttv/ttv/public/images/story/50a436a7c568081dcf683f9ccbc7fdf9c6d867a1ce3d2e8dee9f75b8d54c1b28.jpg" alt="cover">
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6 col-sm-3">
                                <a href="javascript:void(0);">
                                    <img onclick="jQuery('#img2').val(jQuery(this).attr('value'));active(this)" value="2683" data="2683" class="img-responsive poster" src="https://www.nae.vn/ttv/ttv/public/images/story/2683.jpg" alt="cover">
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-6 col-sm-3">
                                <a href="javascript:void(0);">
                                    <img onclick="jQuery('#img2').val(jQuery(this).attr('value'));active(this)" value="f2ee292813f842496ae0fa30c9afbcb208b15d9f1cde7af1a17ac4382bf0e06f" data="f2ee292813f842496ae0fa30c9afbcb208b15d9f1cde7af1a17ac4382bf0e06f" class="img-responsive poster" src="https://www.nae.vn/ttv/ttv/public/images/story/f2ee292813f842496ae0fa30c9afbcb208b15d9f1cde7af1a17ac4382bf0e06f.jpg" alt="cover">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2" for="introduce">Link thảo luận forum</label>
                    <div class="col-sm-8">
                        <input class="form-control" id="link_forum" placeholder="Link thảo luận forum" name="link_forum" type="text">
                    </div>
                </div>
                <div class="form-group text-right">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn btn-default" onclick="return checkTag();"><span>Đăng truyện</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            // var authors = ;
            jQuery("#author").autocomplete({
                source:  "https://truyen.tangthuvien.vn/tim-author",
                minLength: 1,
                appendTo: "#res1",
                select: function (event, ui) {
                    // Prevent value from being put in the input:
                    this.value = ui.item.label;
                    this.id =  ui.item.id;
                    // Set the next input's value to the "value" of the item.
                    jQuery(this).next("input").val(ui.item.value);
                    jQuery('#res2').val(ui.item.id);

                    event.preventDefault();
                }
            }).data("ui-autocomplete")._renderItem = function(ul, item) {
                return jQuery("<li>").data("ui-autocomplete-item", item).append("<a>" + item.label + "</a>").appendTo(ul);
            };
        });
        function active(element) {
            jQuery('.poster').removeClass('active');
            jQuery(element).addClass('active');
        }

        function refreshImage(){
            var url = 'https://truyen.tangthuvien.vn/api/refresh/image';
            jQuery.ajax({
                url: url,
                method: "GET",
                success: function(result){
                    $jq(".img-block").html(result);
                }
            });
        }

        function updateCat(el){
            if(jQuery(el).val() == 5){
                jQuery('#ngon-tinh-new').removeClass('hidden');
                jQuery('#ngon-tinh-new select').attr('disabled',false);
                jQuery('#cat-nomal').addClass('hidden');
                jQuery('#cat-nomal select').attr('disabled',true);
                updateTag('#ngon-tinh-new select');
            }else {
                jQuery('#ngon-tinh-new').addClass('hidden');
                jQuery('#ngon-tinh-new select').attr('disabled',true);
                jQuery('#cat-nomal').removeClass('hidden');
                jQuery('#cat-nomal select').attr('disabled',false);
                updateTag('#cat-nomal select');
            }
        }

        function updateTag(e) {
            var url = 'https://truyen.tangthuvien.vn/refresh-tag';
            jQuery.ajax({
                url: url,
                method: "GET",
                data:{
                    category_id: jQuery(e).val(),
                    story_id:'0'
                },
                success: function(result){
                    jQuery("#tag-container").html(result);
                }
            });
        }

        function checkTag() {
            if(jQuery('#ngon-tinh-new').hasClass("hidden")) {
                if (jQuery('#tag-container .subcat input[type=checkbox]:checked').length > 0) {
                    return true;
                }else if(jQuery('#tag-container .subcat input[type=checkbox]').length < 1){
                    return true;
                }else {
                    alert('Vui lòng chọn danh mục con!');
                    return false;
                }
            }else{
                if(jQuery('#tag-container input[type=checkbox]:checked').length >0){
                    return true;
                }
            }
            alert('Vui lòng chọn tag cho truyện!');
            return false;
        }
    </script>
@endsection
