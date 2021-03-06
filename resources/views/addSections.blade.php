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
 	<div class="col-md-12"><h2>Products & Kits:add Products</h2></div>
</div>
<div class="col-md-12 pb50">
<h2><a href="#overview">Overview</a> | <a href="#contentsection">Content Section</a> | <a href="#productimages">Product Images</a> </h2>
</div>


        <?php
         echo Form::open(array('addsection' => 'addslides','class' => 'form-horizontal'));
           ?>

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  <?php  echo Form::text('Title',null, array('class' => 'form-control')); ?>
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Body Html:</label>
  </div>
  <div class="col-md-10">
        {!! Form::textarea('bodyhtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Order:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('order',null, array('class' => 'form-control ')) !!}
            </div>
          </div>


          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		{!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
