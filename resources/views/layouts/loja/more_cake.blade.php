<section class="more-cake text-center">
    <div class="container">
        <img alt="Cake-White" class="mar-top-20" src="{{asset('images/cake-white.png')}}">
        <p class="mar-top-20 mar-btm-20">
            You can found&nbsp;<b>See More Product</b>&nbsp;below this.
        </p>
        <div class="row">

            @for($i = 0; $i < 3; $i++)

                <div class="col-sm-4">
                    <div class="more-product">
                        <img alt="More-Product" class="img-100" src="{{asset('images/shop-cake1.jpg')}}">
                    </div>
                    <div class="detail-product">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="normal-heading green-color">
                                    $40
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <b>Green </b><i>Cupcake</i>
                            </div>
                        </div>
                    </div>
                </div>

            @endfor

        </div>
    </div>
</section>
<!-- End More Cake -->
<div class="green-arrow">
    &nbsp;
</div>
<div class="pad-top-150"></div>