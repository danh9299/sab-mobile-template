<!--List icons horizontally with overflow: scroll-->
<div class=" container-fluid mt-2">
    <h3 class="mb-3">Template dạng cuộn:</h3>
    <div class="sab-overflow">
        @for ($i = 0; $i < 20; $i++)
        <!--Tìm máy bán hàng-->
            <a class="text-center">
                <button class="btn rounded-4 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
            </button><br>
                <p>Tìm máy SAB</p>
            </a>
        @endfor
    </div>
   
</div>

