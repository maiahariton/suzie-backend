@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2 class="pb50">Resrouces :add Resources</h2></div>
</div>

      {!! Form::open(array('url' => 'addResourcesForm','files'=>'true','class' => 'form-horizontal')) !!}
		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Name:</label>
  </div>
  <div class="col-md-10">
    	  <?php  echo Form::text('name',null, array('class' => 'form-control')); ?>
          </div>
        </div>

         <div class="form-group">
  <div class="col-md-2">
       <label for="text">Background-Image:</label>
    </div>
    <div class="col-md-10">

    {!! Form::file('image') !!}

            </div>
          </div>
          <div class="form-group">
   <div class="col-md-2">
        <label for="text">Order:</label>
     </div>
     <div class="col-md-10">
           {!! Form::text('order',null, array('class' => 'form-control')) !!}
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
