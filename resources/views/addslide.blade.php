@include('includes.head')

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
    	  {!!   Form::text('title',null, array('class' => 'form-control')); !!}
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
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		</div>


         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
