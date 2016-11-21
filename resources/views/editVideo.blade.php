@include('includes.head');
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>HomePage Video : Edit Video</h2></div>
</div>
 @include('includes.admin-navbar-1')
    @foreach($video as $dbGetter)
{!! Form::open(array('url' => 'updateVideo/'.$dbGetter->id.'/update','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  {!!  Form::text('title',$dbGetter->title, array('class' => 'form-control')); !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Video Type:</label>
  </div>

  <div class="col-md-10">
       <select name="videoType" class="form-control">
       <option value="{!! $dbGetter->videoType !!}" selected="">{!! $dbGetter->videoType !!}</option>
      <option value="etc">etc</option>
      <option value="etc">etc</option>
      <option value="etc">etc</option>

         </select>
  </div>
  </div>

          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Video Url:</label>
  </div>
  <div class="col-md-10">
           {!! Form::url('videoUrl',$dbGetter->videoUrl, array('class' => 'form-control ')) !!}
            </div>
          </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Order</label>
  </div>
        <div class="col-md-10">
      {!! Form::text('videoOrder', $dbGetter->videoOrder, array('class' => 'form-control ')) !!}
          </div>
        </div>


                  <div class="form-group"><input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <div class="col-md-offset-2 col-md-10">

              {!! Form::submit('update!', array('class' => 'btn btn-success')); !!}
              {!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
              <a href="{!! url('/deleteVideo') !!}/{!! $dbGetter->id !!}" class="btn btn-warning">Delete</a>


         {!! Form::close() !!}
         @endforeach

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
