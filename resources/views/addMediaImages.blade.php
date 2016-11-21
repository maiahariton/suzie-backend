@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Products & Kits:add Media</h2></div>
</div>

        <?php
         echo Form::open(array('url' => 'addmedia','class' => 'form-horizontal'));
           ?>

		   <div class="form-group">
<div class="col-md-2">
     <label for="text">name:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('name',null, array('class' => 'form-control')) !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="text">type:</label>
  </div>
  <div class="col-md-10">
    <select name="videoType" class="form-control">
    <option>Youtube</option>
   <option value="etc">etc</option>
   <option value="etc">etc</option>
   <option value="etc">etc</option>
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Product Images:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('image',array('class','form-control')) !!}
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
{!! Form::submit('Cancel!', array('class' => 'btn btn-warning')); !!}
</div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
