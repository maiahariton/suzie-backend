@include('includes.head')

@foreach($results as $task)
<div class="intro waitforimages2">
  <div class="intro-bg">

    <img src="app/uploads/{!! $task->image !!}" class="img-responsive" alt="">
  </div>
  <div class="intro-text intro-text-middle">
    <div class="d-table fullwidth">
      <div class="d-table-cell text-center">
        <div class="container text-center">
          <span class="font-21 font-bold">Suze Quote  </span>|<span class="font18">  {!! date('M') !!} 2016</span>

          <h1 class="font-40">
                        <span class="d-block"><p class="font-60 font-bold"> "{!! $task->quotes !!}"</p></span>
          </h1>
          <br>@endforeach
          <img src="assets/img/f_share_button.png" class="f_share_button" alt="">
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="purple-band text-center">
<!--  <a href="" class="page-19-left-arrow">
    <i class="material-icons">keyboard_arrow_left</i></a>-->
<a href=""> <span class="font-60 text-white no-decoration">&larr;</span></a>
</a>
    <p class="font-14 text-white font-bold view-yesterday">&nbsp;&nbsp;View Yesterday's </p>
  <br />
    <p class="font-14 text-white font-bold suze-quote"><p>Suze's Quote</p></p>
  <br />
</div>
<!--/intro-->


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
  @include('includes.footer');
