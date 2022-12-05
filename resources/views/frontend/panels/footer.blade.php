    <section class="footers pt-5 pb-3">
        <div class="container pt-5">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                    <div class="footers-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('frontend/img/logo.png') }}" width="350" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="footers-info mt-3">
                        <p>"Bitstocks is not just a company, it's a mission"</p>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/BitstocksUK"><i id="social-fb"
                                class="fa fa-facebook fa-2x social"></i></a>
                        <a href="https://instagram.com/bitstocksltd_?igshid=YmMyMTA2M2Y="><i id="social-yb"
                                class="fa fa-instagram fa-2x social"></i></a>
                        <a href="https://t.me/bitstocksmedia"><i id="social-tm"
                                class="fa fa-telegram fa-2x social"></i></a>
                        <a href="https://twitter.com/Bitstocksltd?t=wfJGSkEMmk1-t-4YEGxtkg&amp;s=09"><i id="social-tw"
                                class="fa fa-twitter fa-2x social"></i></a>
                        <a href="../cdn-cgi/l/email-protection.html#97fff2fbfbf8d7f5fee3e4e3f8f4fce4fbe3f3b9f4f8fa"><i
                                id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
                    <h5>Company </h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/about-us') }}">About</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="{{ url('/about-us') }}">Meet the team</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Register Now</a></li>
                        <li><a href="{{ url('/staking') }}">Staking</a></li>
                        <li><a href="{{ url('/cryptocurrency-trading') }}">Crypto Trading</a></li>
                        <li><a href="{{ url('/stocks-trading') }}">Stocks Trading</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-four">
                    <h5>Supoort </h5>
                    <ul class="list-unstyled">
                        <li><a href="mailto:support@bitstockslmtd.net">Get Support</a></li>
                        <li><a href="mailto:info@bitstockslmtd.net">Contact Us</a></li>
                        <li><a href="#">Whatsapp</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 footers-five">
                    <h5>Legal </h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ asset('frontend/doc/Certificate-of-Inc.pdf') }}">Certificate of Incorporation</a></li>
                        <li><a href="{{ asset('frontend/doc/Tax-insurance.pdf') }}">Tax & Insurance </a></li>
                        <li><a href="{{ asset('frontend/doc/Anti-laundering.pdf') }}">Guide to Anti Laundering</a></li>
                        <li><a href="{{ asset('frontend/doc/Brochure.pdf') }}">Company Brochure</a></li>
                        <li><a href="{{ asset('frontend/doc/Fin-statement-2021.pdf') }}">Financial Statement 2021</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="disclaimer" style="background-color: var(--color-secondary);">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 py-2">
                    <small class="disc">
                        Disclaimer: CFDs are complex instruments and come with a high risk of losing money rapidly due
                        to leverage. 70% of retail investor accounts lose money when trading CFDs with this provider.
                        You should consider whether you understand how CFDs, or any of our other products work, and
                        whether you can afford to take the high risk of losing your money. The value of your investments
                        can go down as well as up. Losses can exceed deposits on some margin products. Professional
                        clients can lose more than they deposit. All trading carries risk.
                    </small>
                    <small class="disc">
                        Bitstocks of Bitstocks Trading Limited is authorised and regulated by the Financial Conduct
                        Authority, Bitstocks Registered Number 08994234.
                    </small><br>
                    <small class="disc">
                        This information should not be relied upon as research, investment advice, or a recommendation
                        regarding any products, strategies, or any security in particular. This material is strictly for
                        illustrative, educational, or informational purposes and is subject to change.
                    </small><br><br>
                    <p style="font-size:11px; color:#fff;">It is important that you understand that with investments,
                        your capital is at risk. Past performance is not a guide to future performance. It is your
                        responsibility to ensure that you make an informed decision about whether or not to invest with
                        us. If you are still unsure if investing is right for you, please seek independent advice.
                        Bitstocks Trading Limited assumes no liability for any loss sustained from trading in accordance
                        with a recommendation.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright" style="background-color: var(--color-secondary);">
        <hr class="divider-d">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; {{ now()->year }}&nbsp; Bitstocks Trading Limited, All Rights Reserved
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="{{ url('/terms') }}">Terms</a><a href="{{ url('/risks-disclosure') }}">Risk
                                Disclosure</a><a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
