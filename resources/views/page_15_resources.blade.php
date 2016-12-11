@include('includes.head')
        <!--intro-->




        <div class="intro waitforimages2">
            <div class="intro-bg">
                <img src="http://placehold.it/2560x768" class="img-responsive" alt="">
            </div>
            <div class="intro-text intro-text-middle">
                <div class="d-table fullwidth">
                    <div class="d-table-cell text-center">
                        <div class="container text-center">
                            <h1 class="font-60">
                                <span class="d-block"><b>RESOURCE CENTER</b></span>
                            </h1>
                            <br>
                            <p class="font-18">Get advice from Suze on all off your most important financial topcs, <br> plus links to Suze's favorite web sites and tools. Click on a topicbelow t access <br> Suze's library of helpfull information</p>
                            <br>
                            <br>
                            <form>
                                <input type="text" class="resources-src" name="search" placeholder="I'm looking for...">
                                <button type="submit" class=" btn btn-purple resources-src-submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/intro-->

        <!--section-->
        <div class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                      @foreach($resourceData as $data)
                        <div class="resources-card pull-left">
                            <div class="resources-card-content">
       <img src={!! asset('app/uploads/').'/'.$data->image !!} class="img-responsive" alt="">
                          </figure>
                                <div class="resources-card-text"><h3 class="text-white text-center">{!! $data->name !!}</h3>
                                    <div class="d-table fullwidth">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- section-->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <span class="d-block footer-slogan text-center font-40">
                    <img src="assets/img/footer-quote.jpg" class="center-block img-responsive" alt="">
                </span>
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="font-bold">Sign up to stay in touch plus get my free video series!</h4>
                        <div class="footer-subscribe">
                            <div class="subscribe-form">
                                <form action="">
                                    <input type="text" placeholder="enter name..">
                                    <input type="email" placeholder="enter email...">
                                    <button type="submit" class="btn-purple font-heading font-18">Sign Up</button>
                                </form>
                            </div>
                        </div>
                        <div class="footer-social">
                            <ul class="list-inline list-unstyled">
                                <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="footer-widget-title font-bold">
                            Calculators
                        </h4>
                        <ul class="list-unstyled footer-widget-links">
                            <li><a href="#">Debt Eliminator</a></li>
                            <li><a href="#">Expense Tracker</a></li>
                            <li><a href="#">Compound Interest Forecaster</a></li>
                            <li><a href="#">Average Cost Basis Analyzer</a></li>
                            <li><a href="#">Mortage Refinance Calculator</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <h4 class="footer-widget-title font-bold">Suze's Books and Kits</h4>
                        <h5 class="font-bold font-14">BOOKS</h5>
                        <ul class="list-unstyled footer-widget-links">
                            <li><a href="#">The Money Class</a></li>
                            <li><a href="#">The 9 Steps To Financial Freedom</a></li>
                            <li><a href="#">Action Plan</a></li>
                            <li><a href="#">2009 Action Plan</a></li>
                            <li><a href="#">Women & Money</a></li>
                            <li><a href="#">Young, Fabulous & Broke </a></li>
                            <li><a href="#">Financial Guidebook </a></li>
                            <li><a href="">The Road to Wealth</a></li>
                            <li><a href="">The Laws of Money</a></li>
                            <li><a href="">The Courage to Be Rich</a></li>
                            <li><a href="">You've Earned It, Don't Lose It!</a></li>
                            <li><a href="">Women & Money - Spanish Edition</a></li>
                        </ul>
                        <h5 class="font-bold font-14">COLLECTION & KITS</h5>
                        <ul class="list-unstyled footer-widget-links">
                            <li><a href="#">Protection Portfolio</a></li>
                            <li><a href="#">Insurance Evaluator</a></li>
                            <li><a href="#">Must Have Documents</a></li>
                            <li><a href="#">The Money Tools</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4 class="footer-widget-title font-bold">Resource Center</h4>
                        <ul class="list-unstyled footer-widget-links">
                            <li><a href="#">Will and Trusts</a></li>
                            <li><a href="#">Managing Debt</a></li>
                            <li><a href="#">Home Ownership</a></li>
                            <li><a href="#">Financial Intimacy</a></li>
                            <li><a href="#">Explanation of Kinds of Insurance</a></li>
                            <li><a href="#">Insurance</a></li>
                            <li><a href="#">Mutual Funds</a></li>
                            <li><a href="">Retirement Planning</a></li>
                            <li><a href="">Record Keeping</a></li>
                            <li><a href="">Care.com - for your Home Hiring Needs</a></li>
                            <li><a href="">Good Credit Unions</a></li>
                            <li><a href="">Cohabitation Agreement</a></li>
                            <li><a href="">South Africa</a></li>
                            <li><a href="">Identity Theft</a></li>
                            <li><a href="">Paying for College</a></li>
                            <li><a href="">Stocks</a></li>
                            <li><a href="">Bonds and Bond Funds</a></li>
                            <li><a href="">Annuities</a></li>
                            <li><a href="">Taxes and Charitable Giving</a></li>
                            <li><a href="">Online Calculators</a></li>
                            <li><a href="">Sites to See</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-branding">
                <img src="../img/footer-logo.jpg" class="img-responsive center-block" alt="">
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <ul class="list-inline text-center text-dark-gray">
                        <li>
                            &copy; 2016 Suze Orman Media Inc. All rights reserved.
                        </li>
                        <li>
                            | <a href="#" class="text-dark-gray">Search</a>
                        </li>
                        <li>
                            | <a href="#" class="text-dark-gray">Sitemap</a>
                        </li>
                        <li>
                            | <a href="#" class="text-dark-gray">Privacy</a>
                        </li>
                        <li>
                            | <a href="" class="text-dark-gray">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--/footer-->


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/material.min.js"></script>
        <script src="../js/ripples.min.js"></script>

        <script src="../js/vendor/jquery.matchHeight-min.js"></script>
        <script src="../js/vendor/waitforimages.js"></script>
        <script src="../js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="../js/main.js"></script>


    </body>
</html>
