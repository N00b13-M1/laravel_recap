<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>{{ $banner->title }}</h2>
                                    <p>
                                        {{ $banner->p }}
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="{{ $banner->quotelink1 }}">{{ $banner->quotetext1 }} <i class="{{ $banner->quotelogo1 }}"></i></a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="{{ $banner->quotelink2 }}">{{ $banner->quotetext2 }} <i class="{{ $banner->quotelogo2 }}"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/slider-dec.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


