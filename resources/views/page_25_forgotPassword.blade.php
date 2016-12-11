@include('includes.head')
<!--section-->
<div class="page-section sign-up-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-xs-offset-0 col-md-8 col-md-offset-2 text-center">
                <section class="padded-30">
                    <h1 class="text-dark-blue">
                        Forgot your password?
                    </h1>
                    <p class="font-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque fugiat hic, in iusto maxime minima nihil nulla, odio porro quis tenetur velit veritatis voluptates.</p>
                </section>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="card-raised">
                    <div class="card-raised--content">
                        <div class="bg-white rounded bordered padded-30">
                            <form action="">
                                <input type="email" class="so-input" placeholder="E-mail">
                                <button type="submit" class="btn btn-teal btn-block btn-rounded font-21">Submit</button>
                                <div>
                                    Don't have account? <a href="/signup">Click here</a>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                Already have account? <a href="/login">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
