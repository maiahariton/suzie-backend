@include('includes.head') <Style>
.border-form{    border: 1px solid #d2d2d2 !important;}.btn-success {
    background-color: #5cb85c !important; color:white !important; }
 .form-control{ border:1px solid rgba(204,204,204,1) !important;}.form-control, .form-group .form-control{ background-image: linear-gradient(white,white),linear-gradient(white,white) !important;}
 .form-control:focus{ border:1px solid rgba(0,0,153,1) !important;}.pb10{ padding-bottom:20px;}
 .form-group input[type=file]{ opacity: 1; min-height:20px;}

 </style>

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12">
 	<h2>HomePage: Main Slide Show Carousel</h2>
</div>
 <div class="col-md-12 pb50">
<h2><a href="#overview">Overview</a> | <a href="/carosel">Carousel</a> | <a href="#videos">Videos</a> | <a href="#callouts">Callouts</a> |</h2>
 </div>
 <div class="col-md-2 col-md-offset-10"><a href="http://localhost/suzeroman/public/add-slide"><button type="button" class="btn btn-success">add Slide </button></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Carousel 1</td>
      <td><a href="#edit">edit</a></td>

         </tr>
    <tr>
      <th scope="row">2</th>
       <td>Carousel 2</td>
      <td><a href="#edit">edit</a></td>

    </tr>
    <tr>
      <th scope="row">3</th>
       <td>Carousel 3</td>
      <td><a href="#edit">edit</a></td>

    </tr>
  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
