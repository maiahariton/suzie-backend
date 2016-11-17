@include('includes.head')
 <Style>
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
 	<div class="col-md-4"><h2>HomePage</h2></div>
</div>
@include('includes.admin-navbar-1');

        <form method="post" enctype="multipart/form-data" action="addslides">

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  <?php  echo Form::text('title',null, array('class' => 'form-control')); ?>
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('headlines', null, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sub Headlines:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('subHeadlines',null, array('class' => 'form-control ')) !!}
            </div>
          </div>
          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Order:</label>
          </div>
          <div class="col-md-10">
           {!! Form::text('order',null, array('class' => 'form-control ')) !!}
            </div>
          </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Slideshow Image:</label>
  </div>
        <div class="col-md-10">
{!! Form::file('photo', ['class' => 'field']) !!}
        </div>
      </div>
    </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		</div>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
