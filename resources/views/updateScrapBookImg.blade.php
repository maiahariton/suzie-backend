@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Suze's : Edit Scrap Book</h2></div>
</div>

@foreach($sbImages as $dbGetter)
<img src='../../app/uploads/{!! $dbGetter->image !!}'>
{!! Form::open(array('url' => 'updateScrapBookImg/'.$dbGetter->id.'/update','method'=>'post','files'=>'true','class' => 'form-horizontal')) !!}

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Image:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('image',array('class','form-control')) !!}
            </div>
          </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Caption:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('caption',$dbGetter->caption, array('class' => 'form-control')) !!}
             </div>
           </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Order:</label>
          </div>
          <div class="col-md-10">
          {!! Form::text('order',$dbGetter->imgOrder, array('class' => 'form-control')) !!}
             </div>
           </div>

  <div class="form-group">
 <div class="col-md-offset-2 col-md-10">
{!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
{!! Form::submit('Cancel!', array('class' => 'btn btn-warning')); !!}
</div>
         {!! Form::close() !!}
@endforeach
		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
