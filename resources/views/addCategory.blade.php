@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Product Category:Add Category</h2></div>
</div>

      {!! Form::open(array('url' => 'add@categoryController','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Name:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('name',null, array('class' => 'form-control')); !!}
          </div>
        </div>

        <div class="form-group">
         <div class="col-md-2">
     <label for="text">Order:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('catorder',null, array('class' => 'form-control ')) !!}
            </div>
          </div>
          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!} {!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
		</div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
