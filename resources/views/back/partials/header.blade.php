
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/back" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{ route('banner.index') }}">Banner</a></li>
                        <li class="scroll-to-section"><a href="{{ route('services.index') }}">Services</a></li>
                        <li class="scroll-to-section"><a href="{{ route('newsletters.index') }}">Newsletter Subscribers</a></li>
                        <li>
                            <div class="gradient-button">
                                <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button >
                                    <i class="fa fa-sign-out-alt">Log out</i>
                                </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
