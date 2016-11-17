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
 	<h2>HomePage: Main Slide Show Video </h2>
</div>
 @include('includes.admin-navbar-1');
 <div class="col-md-2 col-md-offset-10"><a href="http://localhost/suzeroman/public/addVideo"><button type="button" class="btn btn-success">add Video </button></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th colspan="5">Title</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($video as $dbGetter)
      <tr>

              <td>  {!! $dbGetter->id !!}</td>
              <td colspan="5" class="text-center">  {!! $dbGetter->title !!}</td>
              <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateVideos/'. $dbGetter->id).'/edit' !!}">Edit this Slider</a>
              </td>
         </tr>

            @endforeach
  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
