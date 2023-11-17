<footer class="dark-footer skin-dark-footer">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <img src="https://resido.thesky9.com/storage/general/logo-light.png" class="img-footer" style="max-height: 38px" alt="">
                        <div class="footer-add">
                            <p><i class="fas fa-map-marker-alt"></i> Collins Street West, Victoria 8007, Australia.</p>
                            <p><i class="fas fa-phone-square"></i> +1 246-345-0695</p>
                            <p><i class="fas fa-envelope"></i> info@example.com</p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">{{__('About')}}</h4>
                                <ul>
                                    <li>
                                        <a href="{{route('about-us')}}" title="{{__('About us')}}">
                                            <span>{{__('About us')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contactForm')}}" title="{{__('Contact us')}}">
                                            <span>{{__('Contact us')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('terms')}}" title="{{__('Terms & Conditions')}}">
                                            <span>{{__('Terms & Conditions')}}</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">{{__('MORE INFORMATION')}}</h4>
                                <ul>
                                    <li>
                                        <a href="{{route('properties')}}" title="{{__('All properties')}}">
                                            <span>{{__('All properties')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('properties', ['type' => 'sale']) }}" title="Houses for sale">
                                            <span>{{__('Houses for sale')}}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('properties', ['type' => 'rent']) }}" title="Houses for rent">
                                            <span>{{__('Houses for rent')}}</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget_shortcode">

                        <div class="raw-html-embed">
                            <div class="footer-widget">
                                <h4 class="widget-title">Download Apps</h4>
                                <a href="#" class="other-store-link">
                                </a>
                                <div class="other-store-app"><a href="#" class="other-store-link">
                                    </a>
                                    <div class="os-app-icon"><a href="#" class="other-store-link">
                                            <i class="lni-playstore theme-cl"></i>
                                        </a></div><a href="#" class="other-store-link">
                                    </a>
                                    <div class="os-app-caps"><a href="#" class="other-store-link">
                                            Google Play
                                            <span>Get It Now</span>
                                        </a></div><a href="#" class="other-store-link">
                                    </a>
                                </div><a href="#" class="other-store-link">
                                </a>
                                <a href="#" class="other-store-link">
                                </a>
                                <div class="other-store-app"><a href="#" class="other-store-link">
                                    </a>
                                    <div class="os-app-icon"><a href="#" class="other-store-link">
                                            <i class="lni-apple theme-cl"></i>
                                        </a></div><a href="#" class="other-store-link">
                                    </a>
                                    <div class="os-app-caps"><a href="#" class="other-store-link">
                                            App Store
                                            <span>Now it Available</span>
                                        </a></div><a href="#" class="other-store-link">
                                    </a>
                                </div><a href="#" class="other-store-link">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="footer-widget newsletter widget_newsletter">
                        <div class="header-title-2">
                            <h4 class="widget-title">
                                <span>{{__('Subscribe')}}</span>
                            </h4>
                        </div>
                        <form class="form-subcriber newsletter-form mt-30" action="https://resido.thesky9.com/en/newsletter/subscribe" method="post">
                            <input type="hidden" name="_token" value="Dc8tNNQwUggMZBvEw4Xmmv1IrIiXUL6kSgOrywh9">
                            <div class="form-group d-flex">
                                <input type="email" name="email" class="form-control bg-white font-small" placeholder="{{__('Enter your email')}}">
                                <button class="btn bg-dark text-white" type="submit">{{__('Subscribe')}}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">©2023 Resido. All rights reserved by HoodVision</p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <ul class="footer-bottom-social">
                        <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="ti-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="ti-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="ti-linkedin"></i></a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>