<header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">

                <img src="{{ asset('frontend/img/logo.png') }}" alt="">

            </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Earn</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ url('/forex-trading') }}">Forex</a></li>
                            <li><a href="{{ url('/cryptocurrency-trading') }}">Cryptocurrency</a></li>
                            <li><a href="{{ url('/stocks-trading') }}">Stocks</a></li>
                            <li><a href="{{ url('/staking') }}">Staking</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Company</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            {{-- <li><a href="{{ url('/careers') }}">Careers</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Resources</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Brochure.pdf') }}">Company Brochure</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Certificate-of-Inc.pdf') }}">Company Certificate of Incorporation</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Reg-address.pdf') }}">Company Registered House Address</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Foreign-investor-protection.pdf') }}">Foreign Investors Protection</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Tax-insurance.pdf') }}">Company Tax & Insurance</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/UKTax-guide.pdf') }}">UK Taxation Basic Guide</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Anti-laundering.pdf') }}">Guide to Anti Laundering</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Fin-statement-2021.pdf') }}">Unaudited Financial Statement 2021</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Fin-statement-2020.pdf') }}">Unaudited Financial Statement 2020</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Fin-statement-2019.pdf') }}">Unaudited Financial Statement 2019</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Fin-statement-2016.pdf') }}">Unaudited Financial Statement 2016</a></li>
                            <li><a target="_blank" href="{{ asset('frontend/doc/Fin-statement-2015.pdf') }}">Unaudited Financial Statement 2015</a></li>
                        </ul>
                    </li>
                    <li><a class="get-a-quote" href="{{ route('register') }}">Get Started</a></li>
                </ul>
            </nav>
        </div>
    </header>
