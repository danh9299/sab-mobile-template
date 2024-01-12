<h3 class="mt-2 px-2 mb-2">Tra cứu giao dịch: </h3>

<!--Tìm kiếm giao dịch-->
<div class="container">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mã giao dịch</label>
    <input type="text" class="form-control" id="transaction_code" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Từ ngày:</label>
    <input type="date" class="form-control" id="transaction_start_date">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Đến ngày:</label>
    <input type="date" class="form-control" id="transaction_end_date">
  </div>
  <button type="submit" class="btn btn-primary">Tìm kiếm</button>
</form>
</div>
<!--Liệt kê các giao dịch-->
<h3 class="mt-2 px-2 mb-2">Danh sách giao dịch: </h3>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Giao dịch</th>
                <th scope="col">Ngày</th>
                <th scope="col">Xem</th>
            </tr>
        </thead>
        <tbody>
            <!--Một item trong list-->
            <tr class="sab-transaction-history-list-item">
                <td><b class="sab-transaction-history-code">01234566812</b></td>
                <td>22/1/2024</td>
                <td><a class="sab-transaction-history-view" href="{{route('pages.transaction-history.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
             <!--Một item trong list-->
             <tr class="sab-transaction-history-list-item">
                <td><b class="sab-transaction-history-code">01234566812</b></td>
                <td>22/1/2024</td>
                <td><a class="sab-transaction-history-view" href="{{route('pages.transaction-history.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
             <!--Một item trong list-->
             <tr class="sab-transaction-history-list-item">
                <td><b class="sab-transaction-history-code">01234566812</b></td>
                <td>22/1/2024</td>
                <td><a class="sab-transaction-history-view" href="{{route('pages.transaction-history.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-eye" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg></a></td>
            </tr>
             <!--Một item trong list-->
             <tr class="sab-transaction-history-list-item">
                <td><b class="sab-transaction-history-code">01234566812</b></td>
                <td>22/1/2024</td>
                <td><a class="sab-transaction-history-view" href="{{route('pages.transaction-history.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
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