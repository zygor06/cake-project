<section class="header-wrapper">
    <header class="wrap-header purple-top-dot">
        <div class="top-absolute">
            <div class="top-header">
                @include('includes.nav')
            </div>
            <div class="triangle">
                &nbsp;
            </div>
        </div>
        <div class="tittle-sub-top pad-top-150">
            <div class="container">
                Home /
                <h1>
                    Shop
                </h1>
                <h2>
                    Cake
                </h2>
            </div>
        </div>
    </header>
    <div class="purple-arrow">
        &nbsp;
    </div>

    @for($i = 0; $i < 4; $i++)

        @include('layouts.loja.chart')

    @endfor

</section>