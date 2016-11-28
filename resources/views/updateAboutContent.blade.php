@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2> Suze's : Update About Page Content</h2></div>
</div>
  @foreach($aboutContent as $dbGetter)

<img class='pb50' src='../../app/uploads/{!! $dbGetter->image !!}' height="300" width="300"></img>
{!! Form::open(array('url' => 'aboutContent/'.$dbGetter->id.'/update','files'=>'true','class' => 'form-horizontal')) !!}

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Image:</label>
          </div>
          <div class="col-md-10">
            {!! Form::file('image') !!}
          </div>
          </div>

          <div class="form-group">
          <div class="col-md-2">
          <label for="text">Body/Text:</label>
          </div>
          <div class="col-md-10">

             {!! Form::text('bodyText',$dbGetter->bodyText, array('class' => 'form-control')) !!}
          </div> </div>

           <div class="form-group">
           <div class="col-md-2">
           <label for="text">Healines:</label>
           </div>
           <div class="col-md-10">
           {!! Form::text('headline',$dbGetter->headlines, array('class' => 'form-control')) !!}
              </div>
            </div>


           <div class="form-group">
          <div class="col-md-2">
      <label for="bodyHtml">Body Html:</label>
   </div>
   <div class="col-md-10">
         {!! Form::textarea('bodyHtml',$dbGetter->bodyHtml,array('class'=>'form-control')) !!}
             </div>
           </div>
           <div class="col-md-offset-2 col-md-10">

                {!! Form::submit('update!', array('class' => 'btn btn-success')); !!}

  <a href="{!! url('/deleteAboutContent') !!}/{!! $dbGetter->id !!}" class="btn btn-warning">Delete</a>
  {!! Form::close() !!}

@endforeach
           <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/suzeroman/public/addcallouts"><button type="button" class="btn btn-success">add Callouts</button></a></div>
             <table class="table table-striped table-border border-form">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Wils & trust</td>
            <td><a href="#edit">edit</a></td>

                   </tr>

                     <tr>
                       <th scope="row">2</th>
                       <td>Home Ownership</td>

                       <td><a href="#edit">edit</a></td>

                          </tr>

            </tbody>
          </table>

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
