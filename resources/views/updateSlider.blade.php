@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Homepage  Main SlideShow Carousel : Update Carousel</h2></div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 bg pb50">

</div>
      @foreach($user as $task)      <!-- actionupdated/{!! $task->id !!}-->

      <img src="/app/uploads/{!! $task->image !!}" style="max-height:300px;" class="pb10"></div>
      {!! Form::open(array('url' => 'updateSlider/'.$task->id.'/update','method'=>'post','files'=>'true','class' => 'form-horizontal')) !!}
      
		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('title', $task->title , array('class' => 'form-control ')) !!}
          </div>
        </div>

          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('headlinesCaption', $task->headlinesCaption, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sub Headlines:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('subHeadlinesCaption',$task->subHeadlinesCaption, array('class' => 'form-control ')) !!}
            </div>
          </div>


                <div class="form-group">
               <div class="col-md-2">
               <label for="email">Order:</label>
            </div>
            <div class="col-md-10 pb10">
                    {!! Form::text('slideOrder',$task->slideOrder, array('class' => 'form-control')) !!}

                      </div>
                    </div>

            <div class="form-group">

       <div class="col-md-2">
     <label for="email">SlideshowImage:</label>
       </div>
        <div class="col-md-10">
         {!! Form::file('image') !!}
          </div>
        </div>


          <div class="form-group"><input type="hidden" name="_token" value="{{ csrf_token() }}">

         <div class="col-md-offset-2 col-md-10">

      {!! Form::submit('Update', array('class' => 'btn btn-success')); !!}
      {!! Form::submit('Cancel', array('class' => 'btn btn-success')); !!}
      <a href="{{url('/delete')}}/{{$task->id}}" class="btn btn-success">Delete</a>
  @endforeach
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
