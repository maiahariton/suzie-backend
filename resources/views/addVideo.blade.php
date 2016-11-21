@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>HomePage Video : add Video</h2></div>
</div>
@include('includes.admin-navbar-1')

        <?php
         echo Form::open(array('url' => 'addVideos','class' => 'form-horizontal'));
           ?>

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
     <label for="email">Video Type:</label>
  </div>
  <div class="col-md-10">
    <select name="videoType" class="form-control">
    <option value="Youtube">Youtube</option>
    <option value="etc">Youtube</option>
    <option value="etc">Youtube</option>

    </select>
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Video Url:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('videoUrl',null, array('class' => 'form-control ')) !!}
            </div>
          </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Order</label>
  </div>
        <div class="col-md-10">
      {!! Form::text('videoOrder',null, array('class' => 'form-control ')) !!}
          </div>
        </div>

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
