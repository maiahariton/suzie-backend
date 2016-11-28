@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2> Suze's :About</h2></div>
</div>

   <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/test/public/addaboutcontent"><button type="button" class="btn btn-success">add Featured Images </button></a></div>
             <table class="table table-striped table-border border-form">
            <thead>
              <tr>
                <th>#</th>
                <th>image</th>
                <th>bodyText</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($aboutContent as $dbGetter)
              <tr>
                <th scope="row">{!! $dbGetter->id  !!}</th>
                <td>{!! $dbGetter->image !!}</td>
                <td>{!! $dbGetter->bodyText !!}</td>
                <td class="action" class="text-center">
<a class="btn btn-small btn-info" href="{!! URL::to('aboutContent/'. $dbGetter->id).'/edit' !!}">Edit</a>
</td>
                   </tr>


@endforeach
</tbody>
</table>

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
              @foreach($aboutContent1 as $dbGetter2)

              <tr>
                <th scope="row">{!! $dbGetter2->id  !!}</th>
                <td>{!! $dbGetter2->title !!}</td>
                <td class="action" class="text-center">
<a class="btn btn-small btn-info" href="{!! URL::to('aboutContent/'. $dbGetter2->id).'/edit' !!}">Edit</a>
</td>

        </tr>
@endforeach
            </tbody>
          </table>

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
