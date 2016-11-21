@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>About</h2></div>
</div>

        <?php
         echo Form::open(array('url' => 'addquote','class' => 'form-horizontal'));
           ?>

		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Quote:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('quote',null, array('class' => 'form-control')) !!}
          </div>
        </div>

        <div class="form-group">
 <div class="col-md-2">
      <label for="text">Display Date:</label>
   </div>
   <div class="col-md-10">
     {!! Form::text('dquote',null, array('class' => 'form-control')) !!}
           </div>
         </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Background Images:</label>
  </div>
  <div class="col-md-10">
{!! Form::file('image',array('class','form-control')) !!}
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
