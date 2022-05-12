<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>If you need the greatest collection of HTML templates for your business, please visit <a
                            rel="nofollow" href="{{ url('https://www.toocss.com/') }}" target="_blank">TooCSS</a> Blog. If you need
                        to have a contact form PHP script, go to <a href="{{ url('https://templatemo.com/contact') }}"
                            target="_parent">our contact page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-lg-3">
                <div class="service-item {{ $icons[$i] }}-service">
                    <div class="icon" style="background-image: url('/assets/images/{{ $services[$i]->card_logo }}"></div>
                    <h4>{{ $services[$i]->title }}</h4>
                    <p>{{ $services[$i]->description }}</p>
                    <div class="text-button">
                        <a href="{{ $services[$i]->link }}">{{ $services[$i]->text }} <i class="{{ $services[$i]->logo }}"></i></a>
                    </div>
                </div>
            </div>
            @endfor
            {{-- <div class="col-lg-3">
                <div class="service-item first-service">
                    <div class="icon"></div>
                    <h4>App Maintenance</h4>
                    <p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item second-service">
                    <div class="icon"></div>
                    <h4>Rocket Speed of App</h4>
                    <p>You are allowed to use the Chain App Dev HTML template. Feel free to modify or edit this layout.
                    </p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item third-service">
                    <div class="icon"></div>
                    <h4>Multi Workflow Idea</h4>
                    <p>If this template is beneficial for your work, please support us <a rel="nofollow"
                            href="{{ url('https://paypal.me/templatemo') }}" target="_blank">a little via PayPal</a>. Thank you.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-item fourth-service">
                    <div class="icon"></div>
                    <h4>24/7 Help &amp; Support</h4>
                    <p>Lorem ipsum dolor consectetur adipiscing elit sedder williamsburg photo booth quinoa and fashion
                        axe.</p>
                    <div class="text-button">
                        <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
