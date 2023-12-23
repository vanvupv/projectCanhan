<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Trang Home</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="./assets/css/main.css"/>
    <link rel="stylesheet" href="./assets/css/home.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <!-- CSS -->
    <link
        rel="stylesheet"
        type="text/css"
        href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../app.css">

    <div>
        Day la thanh filter
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- Navigation  -->
@include('sectionPage.nav',['sanphams' => $sanphams])

@include('home.filterSearch')

@include('home.searchResult')


{{--                            @include('home.searchResult') --}}

<!-- BEGIN PAGINATION -->
<ul class="pagination">
    <li class="disabled"><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">»</a></li>
</ul>
<!-- END PAGINATION -->
</div>
<!-- END RESULT -->
</div>
</div>
</div>
</div>
<!-- END SEARCH RESULT -->
</div>
</div>






<!--  -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- JavaScript -->
<script>
    $(document).ready(function () {
        var arrayOption = [];
        // Sự kiện khi một mục trong dropdown được chọn
        $('.dropdown-item').on('click', function (e) {
            e.preventDefault();

            // Lấy giá trị từ thuộc tính data-value
            let selectedValue = $(this).data('value');

            // Gửi dữ liệu lên thông qua AJAX
            $.ajax({
                type: 'POST',
                url: '/sanpham', // Thay đổi đường dẫn tương ứng với route của bạn
                data: {
                    selectedValue: selectedValue,
                    _token: '{{ csrf_token() }}' // Đảm bảo thêm token CSRF khi sử dụng POST request trong Laravel
                },
                success: function (data) {
                    arrayOption.push(selectedValue);
                    console.log(">>>, ",arrayOption);
                    // Xử lý dữ liệu trả về từ server
                    console.log(data);

                    $('.table-responsive').html(data);
                },

                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });

        // Sự kiện khi checkbox thay đổi
        $('.icheck').on('change', function() {
            // Lấy giá trị của checkbox đã chọn
            let selectedCategories = [];
            $('.icheck:checked').each(function() {
                selectedCategories.push($(this).val());
            });

            //
            console.log(">>>Check: ", selectedCategories);

            // Gửi dữ liệu lên server thông qua AJAX
            $.ajax({
                type: 'POST',
                url: '/sanpham', // Thay đổi đường dẫn tương ứng với endpoint của bạn
                data: {
                    categories: selectedCategories,
                    _token: '{{ csrf_token() }}' // Đảm bảo thêm token CSRF khi sử dụng POST request trong Laravel
                },
                success: function(data) {
                    // Xử lý kết quả từ server (nếu cần)
                    console.log(data);

                    $('.table-responsive').html(data);
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        });

        // Xử Lý Lọc Theo Giá
        // Sự kiện khi giá trị của input range thay đổi
        $('.price-range').on('input', function() {
            // Lấy giá trị của input range
            let selectedPrice = $(this).val();

            // Hiển thị giá trị đã chọn
            $('.price-value').text(selectedPrice);

            // Gửi dữ liệu lên server thông qua AJAX
            $.ajax({
                type: 'POST',
                url: '/sanpham', // Thay đổi đường dẫn tương ứng với endpoint của bạn
                data: {
                    price: selectedPrice,
                    _token: '{{ csrf_token() }}' // Đảm bảo thêm token CSRF khi sử dụng POST request trong Laravel
                },
                success: function(data) {
                    // Xử lý kết quả từ server (nếu cần)
                    console.log(data);
                    //
                    $('.table-responsive').html(data);
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        });


});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/login.js"></script>
<script
    type="text/javascript"
    src="//code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
    type="text/javascript"
    src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script
    type="text/javascript"
    src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>
<script src="./assets/js/slideshow.js"></script>
<script src="./assets/js/tabslider.js"></script>
</body>
</html>
