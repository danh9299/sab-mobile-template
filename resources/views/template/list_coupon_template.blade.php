<h3 class="mt-2 px-2 mb-2">Danh sách mã coupon: </h3>
<div class="text-center mb-2">
<a href="#" class ="btn sab-coupon-list-refresh">Làm mới</a>
<a href="#" class ="btn sab-coupon-buy-new">Mua mới</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Coupon</th>
                <th scope="col">Hạn</th>
                <th scope="col">Xem</th>
            </tr>
        </thead>
        <tbody>
            <!--Một item trong list-->
            <tr class="sab-coupon-list-item">
                <td><b class="sab-coupon-code">01234566812</b><br><p3 class="sab-coupon-name">Coupon 123</p3></td>
                <td>22/1/2024</td>
                <td><a class="sab-coupon-view" href="{{route('pages.coupon.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
            <!--Một item trong list-->
            <tr class="sab-coupon-list-item">
                <td><b class="sab-coupon-code">03455432322</b><br><p3 class="sab-coupon-name">Coupon 3217</p3></td>
                <td>25/1/2024</td>
                <td><a class="sab-coupon-view" href="{{route('pages.coupon.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
        </tbody>
    </table>
</div>