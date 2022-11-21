<div class="row">
                <div class="col-6">
                    <a
                        class="btn text-white"
                        data-bs-toggle="offcanvas"
                        href="#offcanvasExample"
                        role="button"
                        aria-controls="offcanvasExample">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div class="col-6 text-end">
                    <img
                        class="me-xl-5"
                        onclick="myFunction()"
                        src="{{asset('asset/images/logo/icon.png')}}"
                        alt="">
                    <div
                        id="logout"
                        class="border-0 rounded shadow text-center position-absolute end-0  top-popup">
                        <p class="text-white m-0 p-0 pt-2">Auth Name</p>
                        <a class="text-white text-decoration-none" href="">Log out</a>
                    </div>
                </div>
            </div>