@extends('frontend.layouts.main')
@section('content')

        <div class="container">
        <article class="row cart__head pc">
            <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <svg class="menu__item-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M509.982,380.674c-6.038-18.941-23.777-30.446-37.593-36.763c-28.384-12.976-59.512-40.574-87.356-72.09l4.154-2.551
                                        c3.575-2.195,4.694-6.874,2.499-10.449c-2.196-3.577-6.873-4.692-10.45-2.499l-6.225,3.822c-3.638-4.361-7.201-8.769-10.678-13.2
                                        l6.181-4.017c3.518-2.286,4.516-6.992,2.229-10.51c-2.286-3.519-6.994-4.517-10.51-2.23l-7.15,4.648
                                        c-4.004-5.39-7.858-10.775-11.537-16.111l5.307-3.296c3.565-2.214,4.659-6.898,2.444-10.462c-2.216-3.566-6.899-4.66-10.463-2.444
                                        l-5.737,3.565c-10.014-15.469-18.31-30.17-24.198-42.89c-0.851-2.282-8.099-23.21,6.35-37.658
                                        c2.967-2.967,2.967-7.778-0.001-10.744c-2.966-2.967-7.777-2.967-10.744,0c-15.575,15.576-14.263,35.425-11.94,46.271
                                        c-9.082,2.578-26.163,6.855-45.351,8.775c-45.518,4.558-67.888-7.296-78.633-18.042c-39.043-39.042-41.575-77.949-41.595-78.311
                                        c-0.149-3.186-2.272-5.938-5.314-6.893c-3.044-0.955-6.357,0.091-8.3,2.621L1.572,217.365c-1.292,1.684-1.822,3.83-1.461,5.921
                                        c0.361,2.091,1.58,3.935,3.362,5.087c2.126,1.375,213.344,137.893,272.866,174.032c48.443,29.412,114.283,43.351,164.693,43.35
                                        c15.222,0,29.044-1.272,40.546-3.773c1.89-0.41,3.552-1.526,4.648-3.12l23.617-34.354c0.016-0.023,0.027-0.051,0.044-0.075
                                        c0.183-0.273,0.349-0.558,0.496-0.853c0.028-0.054,0.051-0.109,0.077-0.165c0.13-0.278,0.243-0.563,0.339-0.857
                                        c0.01-0.029,0.025-0.057,0.034-0.086c0.006-0.021,0.019-0.066,0.028-0.094c0.009-0.032,0.019-0.064,0.028-0.096
                                        C511.359,400.686,513.584,391.969,509.982,380.674z M181.707,293.419c58.135,37.165,97.92,62.275,118.252,74.632
                                        c48.443,29.413,114.283,43.35,164.692,43.35c8.021,0,15.638-0.363,22.747-1.063l-11.957,17.392
                                        c-23.67,4.537-56.217,3.738-89.962-2.261c-38.183-6.788-74.143-19.592-101.254-36.052
                                        C231.002,357.104,55.745,244.043,18.642,220.085l16.18-21.064c54.161,34.954,96.012,61.822,121.842,78.373
                                        c1.269,0.813,2.687,1.201,4.091,1.201c2.503,0,4.953-1.236,6.403-3.5c2.264-3.533,1.236-8.231-2.298-10.495
                                        c-11.441-7.331-26.032-16.691-43.438-27.877c7.952-14.643,12.129-31.048,12.129-47.885c0-23.357-8.193-46.109-23.068-64.065
                                        c-2.678-3.232-7.468-3.68-10.698-1.004c-3.23,2.677-3.68,7.467-1.003,10.697c12.623,15.236,19.575,34.546,19.575,54.371
                                        c0,13.913-3.365,27.469-9.763,39.638c-18.828-12.109-40.434-26.023-64.486-41.545l72.964-94.991
                                        c4.646,16.911,15.844,43.684,42.761,70.601c38.645,38.645,116.899,19.603,140.053,12.831c5.899,11.911,13.541,25.097,22.354,38.7
                                        l-25.812,16.034c-3.565,2.214-4.659,6.898-2.444,10.462c1.439,2.317,3.921,3.589,6.461,3.589c1.37,0,2.754-0.37,4.002-1.145
                                        l26.238-16.299c3.753,5.455,7.662,10.933,11.692,16.382l-20.513,13.333c-3.518,2.287-4.516,6.993-2.229,10.511
                                        c1.456,2.24,3.891,3.458,6.377,3.458c1.419,0,2.855-0.397,4.133-1.229l21.443-13.938c3.402,4.366,6.867,8.683,10.373,12.929
                                        l-19.075,11.713c-3.575,2.195-4.694,6.874-2.499,10.449c1.434,2.336,3.928,3.623,6.481,3.623c1.356,0,2.728-0.363,3.969-1.124
                                        l21.08-12.944c41.558,47.63,73.969,68.628,94.155,77.855c27.515,12.579,30.867,28.587,30.756,36.049
                                        c-23.464,4.075-55.031,3.148-87.729-2.665c-38.183-6.788-74.143-19.592-101.251-36.05
                                        c-20.233-12.295-59.919-37.343-117.957-74.446c-3.536-2.26-8.232-1.227-10.493,2.309
                                        C177.139,286.462,178.172,291.159,181.707,293.419z"/>
                                </g>
                            </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>

                            Giày bảo hộ</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <svg class="menu__item-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M376,304H112c-4.418,0-8,3.582-8,8v112c0,4.418,3.582,8,8,8h264c4.418,0,8-3.582,8-8V312C384,307.582,380.418,304,376,304
                                        z M368,416H120v-56h192v16c0,4.418,3.582,8,8,8s8-3.582,8-8v-16h16c4.418,0,8-3.582,8-8s-3.582-8-8-8H120v-24h248V416z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="136" y="232" width="16" height="16"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="328" y="232" width="16" height="16"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M472,208h-32V104c-0.091-28.207-11.641-55.165-32-74.688V8c0-4.418-3.582-8-8-8H80c-4.418,0-8,3.582-8,8v21.312
                                        C51.641,48.835,40.091,75.793,40,104v104H8c-4.418,0-8,3.582-8,8v160c0,4.418,3.582,8,8,8h32.408
                                        c4.21,54.119,49.309,95.913,103.592,96h192c54.283-0.087,99.382-41.881,103.592-96H472c4.418,0,8-3.582,8-8V216
                                        C480,211.582,476.418,208,472,208z M40,368H16V256h24V368z M40,240H16v-16h24V240z M88,16h304v156l-16,12v-72c0-4.418-3.582-8-8-8
                                        h-64c-4.418,0-8,3.582-8,8v114.528c-35.689,15.672-76.311,15.672-112,0V112c0-4.418-3.582-8-8-8h-64c-4.418,0-8,3.582-8,8v72
                                        l-16-12V16z M312,152v-32h48v32H312z M360,168v84l-24,18l-24-18v-84H360z M120,152v-32h48v32H120z M168,168v84l-24,18l-24-18v-84
                                        H168z M424,376c-0.057,48.577-39.423,87.943-88,88H144c-48.577-0.057-87.943-39.423-88-88V104
                                        c0.048-17.997,5.634-35.544,16-50.256V176c0,2.518,1.186,4.889,3.2,6.4L104,204v52c0,2.518,1.186,4.889,3.2,6.4l32,24
                                        c2.844,2.133,6.756,2.133,9.6,0l32-24c2.014-1.511,3.2-3.882,3.2-6.4v-12.192c36.004,14.091,75.996,14.091,112,0V256
                                        c0,2.518,1.186,4.889,3.2,6.4l32,24c2.844,2.133,6.756,2.133,9.6,0l32-24c2.014-1.511,3.2-3.882,3.2-6.4v-52l28.8-21.6
                                        c2.014-1.511,3.2-3.882,3.2-6.4V53.744c10.366,14.712,15.952,32.259,16,50.256V376z M464,368h-24V256h24V368z M464,240h-24v-16h24
                                        V240z"/>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>

                            Balo đi phượt</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <svg class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m449.649 307.262-18.956-101.095h29.976v-30h-35.601l-5.625-30.002h-117.452v30h31.907l25.911 190.012h-84.69l-28.814-65.109c14.379-7.521 24.22-22.576 24.22-39.896 0-24.814-20.188-45.002-45.002-45.002h-35.173v-160.35h-190.35v190.349h50.173v60.004h51.771c-19.485 19.073-31.598 45.648-31.598 75.003v15h31.509c6.968 34.194 37.273 60.004 73.495 60.004s66.526-25.81 73.495-60.004h114.658c6.968 34.194 37.273 60.004 73.494 60.004 41.357 0 75.004-33.646 75.004-75.004-.001-37.043-27.002-67.88-62.352-73.914zm-419.649-91.093v-130.349h130.349v130.349zm50.173 60.004v-30.004h145.349c8.272 0 15.002 6.73 15.002 15.002s-6.73 15.002-15.002 15.002zm95.176 30h40.408l26.555 60.003h-140.46c6.967-34.196 37.274-60.003 73.497-60.003zm0 120.007c-19.557 0-36.232-12.543-42.424-30.004h84.848c-6.192 17.461-22.867 30.004-42.424 30.004zm219.196-250.015 24.775 132.132c-13.215 3.206-25.068 9.917-34.523 19.096l-20.622-151.227h30.37zm42.451 250.015c-24.815 0-45.003-20.188-45.003-45.004 0-24.815 20.188-45.003 45.003-45.003s45.004 20.188 45.004 45.003c0 24.816-20.188 45.004-45.004 45.004z"/></g></svg>

                            Thùng Givi</a>
                    </li>
                </ul>
            </nav>

            <div class="col-6 cart__head-name">
                Thông tin sản phẩm
            </div>
            <div class="col-3 cart__head-quantity">
                Số lượng
            </div>
            <div class="col-3 cart__head-price">
                Đơn giá
            </div>
        </article>

        <article class="row cart__body">
            <div class="col-6 cart__body-name">
                <div class="cart__body-name-img">
                    <img src="/frontend/all/images/product_1.png">
                </div>
                <a href="" class="cart__body-name-title">
                    Mũ bảo hiểm fullfaceYoyal QC201
                </a>
            </div>
            <div class="col-3 cart__body-quantity">
                <input type="button" value="-"  class="cart__body-quantity-minus">
                <input type="number" step="1" min="1" max="999" value="1" class="cart__body-quantity-total">
                <input type="button" value="+" class="cart__body-quantity-plus">
            </div>
            <div class="col-3 cart__body-price">
                <span>900.000</span>

                <a href="#">Xóa</a>
            </div>
        </article>

        <article class="row cart__body">
            <div class="col-6 cart__body-name">
                <div class="cart__body-name-img">
                    <img src="/frontend/all/images/product_8.png">
                </div>
                <a href="" class="cart__body-name-title">
                    Mũ bảo hiểm fullfaceYoyal 2020
                </a>
            </div>
            <div class="col-3 cart__body-quantity">
                <input type="button" value="-"  class="cart__body-quantity-minus">
                <input type="number" step="1" min="1" max="999" value="2" class="cart__body-quantity-total">
                <input type="button" value="+" class="cart__body-quantity-plus">
            </div>
            <div class="col-3 cart__body-price">
                <span>1.490.000</span>

                <a href="#">Xóa</a>
            </div>
        </article>

        <article class="row cart__body">
            <div class="col-6 cart__body-name">
                <div class="cart__body-name-img">
                    <img src="/frontend/all/images/product_3.png">
                </div>
                <a href="" class="cart__body-name-title">
                    Mũ bảo hiểm LS2 đẹp chính hãng
                </a>
            </div>
            <div class="col-3 cart__body-quantity">
                <input type="button" value="-"  class="cart__body-quantity-minus">
                <input type="number" step="1" min="1" max="999" value="1" class="cart__body-quantity-total">
                <input type="button" value="+" class="cart__body-quantity-plus">
            </div>
            <div class="col-3 cart__body-price">
                <span>1.200.000</span>

                <a href="#">Xóa</a>
            </div>
        </article>

        <article class="row cart__body">
            <div class="col-6 cart__body-name">
                <div class="cart__body-name-img">
                    <img src="/frontend/all/images/product_4.png">
                </div>
                <a href="" class="cart__body-name-title">
                    Mũ bảo hiểm LS2 chất lượng, bền
                </a>
            </div>
            <div class="col-3 cart__body-quantity">
                <input type="button" value="-"  class="cart__body-quantity-minus">
                <input type="number" step="1" min="1" max="999" value="2" class="cart__body-quantity-total">
                <input type="button" value="+" class="cart__body-quantity-plus">
            </div>
            <div class="col-3 cart__body-price">
                <span>2.220.000</span>

                <a href="#">Xóa</a>
            </div>
        </article>

        <article class="row cart__foot">
            <div class="col-6 col-lg-6 col-sm-6 cart__foot-update">
                <button class="cart__foot-update-btn">Cập nhật giỏ hàng</button>
            </div>

            <p class="col-3 col-lg-3 col-sm-3 cart__foot-total">
                Tổng cộng:
            </p>

            <span class="col-3 col-lg-3 col-sm-3 cart__foot-price">
					18.590.500đ <br>

					<button class="cart__foot-price-btn">Mua hàng</button>
				</span>
        </article>
    </div>
@endsection
