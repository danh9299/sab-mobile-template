<footer>
<div class="mt-5 container">
      <div class="row">
        <ul
          class="nav nav-tabs fixed-bottom bg-warning p-2"
          id="myTab"
          role="tablist"
        >
        <!--Home-->
          <div class="col-3">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link {{ request()->routeIs('pages.home') ? 'active' : '' }}"
                id="home-tab"
                data-bs-toggle="tab"
                data-bs-target="#home-tab-pane"
                type="button"
                role="tab"
                aria-controls="home-tab-pane"
                aria-selected="true"
              >
                <a href="{{route('pages.home')}}" style="color: black">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-house-door-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"
                    /></svg><br/>
                </a>
                <p6 class="text-nowrap text-dark text-center">Trang chủ</p6>
              </button>
            </li>
          </div>
          <!--Coupon-->
          <div class="col-3">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link {{ (request()->routeIs('pages.coupon') || request()->routeIs('pages.coupon.show')) ? 'active' : '' }}"
                id="profile-tab"
                data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane"
                type="button"
                role="tab"
                aria-controls="profile-tab-pane"
                aria-selected="false"
              >
                <a href="{{ route('pages.coupon') }}" style="color: black">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-wallet2"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"
                    /></svg
                  ><br />
                </a>
                <p6 class="text-nowrap text-dark text-center">Coupon</p6>
              </button>
            </li>
          </div>
          <!--Transaction history-->
          <div class="col-3">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link {{ (request()->routeIs('pages.transaction-history.show') || request()->routeIs('pages.transaction-history')) ? 'active' : '' }}"
                id="contact-tab"
                data-bs-toggle="tab"
                data-bs-target="#contact-tab-pane"
                type="button"
                role="tab"
                aria-controls="contact-tab-pane"
                aria-selected="false"
              >
                <a href="{{ route('pages.transaction-history') }}" style="color: black">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-clock-history"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
                    />
                    <path
                      d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"
                    />
                    <path
                      d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"
                    /></svg
                  ><br />
                </a>
                <p6 class="text-nowrap text-dark text-center">Giao dịch</p6>
              </button>
            </li>
          </div>
          <!--Account-->
          <div class="col-3">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link {{ request()->routeIs('pages.account') ? 'active' : '' }}"
                id="contact-tab"
                data-bs-toggle="tab"
                data-bs-target="#contact-tab-pane"
                type="button"
                role="tab"
                aria-controls="contact-tab-pane"
                aria-selected="false"
              >
                <a href="{{ route('pages.account') }}" style="color: black">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    fill="currentColor"
                    class="bi bi-file-person"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"
                    />
                    <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6" /></svg
                  ><br />
                </a>
                <p6 class="text-nowrap text-dark text-center">Tài khoản</p6>
              </button>
            </li>
          </div>
        </ul>
      </div>
    </div>
</footer>