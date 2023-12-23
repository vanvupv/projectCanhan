

<!-- BEGIN TABLE RESULT -->
<div class="table-responsive">
    <table class="table table-hover">
        @if($sanphams->count() >= 1)
            <tbody>
            @foreach($sanphams as $sanpham)
                <tr>
                    <td class="number text-center">{{ $sanpham->MaSP }}</td>
                    <td class="image"><img src="https://www.bootdey.com/image/400x300/FF8C00" alt=""></td>
                    <td class="product"><strong>{{ $sanpham->TenSP }}</strong><br>{{ $sanpham->MoTa }}</td>
                    <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star-half-o"></i></span></td>
                    <td class="price text-right">{{ $sanpham->GiaBan }}</td>
                    <td class="count">{{ $sanpham->SoLuong }}</td>
                </tr>
            @endforeach
            </tbody>
        @endif
    </table>
</div>
<!-- END TABLE RESULT -->

