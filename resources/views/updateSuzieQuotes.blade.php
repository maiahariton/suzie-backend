@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">
 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Suze Quotes :Edit Quote</h2></div>
</div>@foreach($qutoes as $dbGetter)
<img class='pb50' src='../../app/uploads/{!! $dbGetter->image !!}' height="300" width="300"></img>
{!! Form::open(array('url' => 'updateSuzieQuotes/'.$dbGetter->id.'/update','method'=>'post','files'=>'true','class' => 'form-horizontal')) !!}



		   <div class="form-group">
<div class="col-md-2">
     <label for="text">Quote:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('quotes',$dbGetter->quotes, array('class' => 'form-control')) !!}
          </div>
        </div>

        <div class="form-group">
 <div class="col-md-2">
      <label for="text">Display Date:</label>
   </div>
   <div class="col-md-10">
     {!! Form::text('displayDate',$dbGetter->displayDate, array('class' => 'form-control')) !!}
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
    <a href="{!! url('/deleteSuzieQuote') !!}/{!! $dbGetter->id !!}" class="btn btn-warning">Delete</a>
{!! Form::submit('Cancel!', array('class' => 'btn btn-info')); !!}
</div>
         {!! Form::close() !!}
  @endforeach
		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
