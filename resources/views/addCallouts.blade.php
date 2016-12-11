@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-4"><h2>Homepage </h2></div>
</div>
 @include('includes.admin-navbar-1')

        {!!  Form::open(array('url' => 'addCallouts','files'=>'true','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	{!! Form::text('title',null, array('class' => 'form-control')); !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="image">Background Image:</label>
  </div>
  <div class="col-md-10">
      {!! Form::file('image') !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="bodyHtml">Body Html:</label>
  </div>
  <div class="col-md-10">
        {!! Form::textarea('bodyHtml',null,array('class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Order:</label>
  </div>
  <div class="col-md-10">
          {!! Form::text('calloutOrder',null, array('class' => 'form-control ')) !!}
            </div>
          </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Page Id:</label>
  </div>
  <div class="col-md-10">
    <?php use App\Http\Controllers\calloutContorller; ?>
<?php $x=calloutContorller::selectBox(); ?>

<select name="pageId" class="form-control">
@foreach($x as $y)
<option value="{!! $y->id !!}">
{!! $y->title !!}

</option>
@endforeach
</select>
            </div>
          </div>
          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">

           <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		   {!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
		</div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
