@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
<div class="col-md-12">

 <div class="col-md-12 pb50">
 	<h2>Suzie Quotes</h2>
</div>

 <div class="col-md-2 col-md-offset-10 pb10"><a href="http://localhost/test/public/addquotes"><button type="button" class="btn btn-success ">add Quotes </button></a></div>
   <table class="table table-striped table-border border-form">
  <thead>
    <tr>
      <th>#</th>
      <th>Quotes</th>

      <th>Display Date</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($qutoes as $dbGetter)
    <tr>

      <th scope="row">{!! $dbGetter->id !!}</th>
              <td>{!! $dbGetter->quotes !!}</td>
               <td>{!! $dbGetter->displayDate !!}</td>
               <td class="action" class="text-center"> <a class="btn btn-small btn-info" href="{!! URL::to('updateSuzieQuotes/'. $dbGetter->id).'/edit' !!}">Edit</a></td>
               <tr>
         </tr>
@endforeach
  </tbody>
</table>




 </div> <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
