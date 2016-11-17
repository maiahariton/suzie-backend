@include('includes.head');
 <Style>
.border-form{    border: 1px solid #d2d2d2 !important;}.btn-success {
    background-color: #5cb85c !important; color:white !important; }
 .form-control{ border:1px solid rgba(204,204,204,1) !important;}.form-control, .form-group .form-control{ background-image: linear-gradient(white,white),linear-gradient(white,white) !important;}
 .form-control:focus{ border:1px solid rgba(0,0,153,1) !important;}.pb10{ padding-bottom:20px;}
 .form-group input[type=file]{ opacity: 1; min-height:20px;}

 </style>

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
    <!--    <div class="form-group">
         <div class="col-md-2">
     <label for="email">Desired Page:</label>
  </div>
  <div class="col-md-10">
    <select name="pageId">
    <option value="{!! $dbGetter->pageId !!}">{!! $dbGetter->pageId !!}</option>
    <option></option>

    </select>
            </div>
          </div> -->

         {!! Form::close() !!}
         @endforeach

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
