@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Product Category:Edit Category</h2></div>
</div>
 <div class="col-md-12 pb50">
<h2><a href="#overview">Overview</a> | <a href="#carosel">Carosel</a> | <a href="#videos">Videos</a> | <a href="#callouts">Callouts</a> |</h2>
 </div>

 @foreach($cate as $dbGetter)
{!! Form::open(array('url' => 'updateCategory/'.$dbGetter->id.'/update','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Name:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('name',$dbGetter->name, array('class' => 'form-control')); !!}
          </div>
        </div>

        <div class="form-group">
         <div class="col-md-2">
     <label for="email">Order:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('order',$dbGetter->catorder, array('class' => 'form-control ')) !!}
            </div>
          </div>
          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
      @endforeach
  	   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!} {!! Form::submit('update!', array('class' => 'btn btn-success')); !!}{!! Form::submit('Delete!', array('class' => 'btn btn-success')); !!}
		</div>
         {!! Form::close() !!}

		 </div>

    </div>
   </div>


 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
