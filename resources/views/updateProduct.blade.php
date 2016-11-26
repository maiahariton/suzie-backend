@include('includes.head')
<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Products & Kits:add Products</h2>
    @if(session('status'))
    <div class="alert alert-success">
        {!! session('status') !!}
    </div>
@endif
</div>
</div>
@include('includes.admin-navbar-1')

@foreach($product as $dbGetter)

{!! Form::open(array('url' => 'updateProduct/'.$dbGetter->id.'/update','class' => 'form-horizontal')) !!}



		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  {!!  Form::text('title', $dbGetter->title , array('class' => 'form-control')) !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('headlines', $dbGetter->headlines , array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sales Message:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('salesMessage',$dbGetter->salesMessage , array('class' => 'form-control ')) !!}
            </div>
          </div>
          <div class="form-group">
         <div class="col-md-2">
      <label for="email">Flag:</label>
      </div>
      <div class="col-md-10">
           {!! Form::text('flag',$dbGetter->flag , array('class' => 'form-control ')) !!}
            </div>
          </div>
            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Offer Expires:</label>
  </div>
        <div class="col-md-10">
          {!! Form::text('offerExpire',$dbGetter->offerExpire , array('class' => 'form-control ')) !!}
           </div>
        </div>
        <div class="form-group">
         <div class="col-md-2">
     <label for="email">List Price:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('listPrice',$dbGetter->listPrice , array('class' => 'form-control ')) !!}
      </div>
          </div>
          <div class="form-group">
           <div class="col-md-2">
       <label for="email">Sales Price:</label>
    </div>
    <div class="col-md-10">
      {!! Form::text('salesPrice',$dbGetter->salesPrice , array('class' => 'form-control ')) !!}
        </div>
            </div>
            <div class="form-group">
             <div class="col-md-2">
         <label for="email">Magento Sku:</label>
      </div>
      <div class="col-md-10">
        {!! Form::text('magentoSku',$dbGetter->magentoSku, array('class' => 'form-control ')) !!}
          </div>
              </div>
              <div class="form-group">
               <div class="col-md-2 text-left">
           <label for="email">Magento Add to Cart URL:</label>
        </div>
        <div class="col-md-10">
          {!! Form::text('magentoAddCarUrl',$dbGetter->magentoAddCarUrl , array('class' => 'form-control ')) !!}
            </div>
                </div>
                <div class="form-group">
                 <div class="col-md-2">
             <label for="email">Amazon Url:</label>
          </div>
          <div class="col-md-10">
            {!! Form::text('amazonUrl', $dbGetter->amazonUrl, array('class' => 'form-control ')) !!}
              </div>
                  </div>

                    <div class="form-group">
                     <div class="col-md-2">
                 <label for="email">Login Url:</label>
              </div>
              <div class="col-md-10">
                {!! Form::text('loginUrl', $dbGetter->loginUrl , array('class' => 'form-control ')) !!}
                  </div>
                      </div>
                      <div class="form-group">
                       <div class="col-md-2">
                   <label for="email">Activation Url:</label>
                </div>
                <div class="col-md-10">
                  {!! Form::text('activationUrl',$dbGetter->activationUrl , array('class' => 'form-control ')) !!}
                    </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-2">
                        <label for="email">Product Description Url:</label>
                        </div>
                        <div class="col-md-10">
                        {!! Form::textarea('productDescriptionHtml', $dbGetter->productDescriptionHtml ,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

                        </div>
                          </div>
                  <div class="form-group">
                   <div class="col-md-2">
               <label for="text">Category Id:</label>
            </div>
                  <div class="col-md-10">
                    {!! Form::text('categoryId',$dbGetter->categoryId , array('class' => 'form-control ')) !!}

                    </div>
                          </div>

          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save!', array('class' => 'btn btn-success')); !!}
		</{!! Form::submit('Cancel!', array('class' => 'btn btn-success')); !!}
  </div>

         {!! Form::close() !!}
@endforeach
		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
