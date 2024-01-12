<!--List icons in 1 line-->
<div class=" container-fluid mt-2 mb-2">
    <h3 class="mb-3">Template dạng 1 dòng icons:</h3>
    <div class="sab-1-line-icons">
        @for ($i = 0; $i < 20; $i++) 
        <a class="text-center">
            <img class="sab-icons" src="{{ asset('img/icons/coupon.png') }}" />
            <br>
            <p>Mua coupon</p>
        </a>
        @endfor
    </div>
</div>