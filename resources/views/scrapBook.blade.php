@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12 pb50">
 	<div class="col-md-12"><h2>Suze's : Scrapbook</h2></div>
</div>
<img src=''></img>

           <div class="col-md-2 col-md-offset-10 pb10"><a href="/addscrapbookimages"><button type="button" class="btn btn-success">Add Scrapbook Images </button></a></div>
             <table class="table table-striped table-border border-form">
            <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Caption</th>
                <th>Year</th>
                <th class="text-center">Action</th>

              </tr>
            </thead>
            <tbody>
@foreach($sbImages as $dbGetter)
    <tr>
     <th scope="row">{!! $dbGetter->id !!}</th>
            <td>{!! $dbGetter->image !!}</td>
                  <td>{!! $dbGetter->caption !!}</td>

                        <td>{!! $dbGetter->created_at !!}</td>
<td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateScrapBook/'. $dbGetter->id).'/edit' !!}">Edit</a></td>
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
