@include('includes.head')

<div class="row">
 <div class="container-fluid">
<div class="col-md-3">
 @include('includes.sidebar');
 </div>

 <div class="col-md-9">
 <div class="col-md-12">

 <div class="col-md-12">
 	<div class="col-md-12"><h2>Products & Kits: Add Product</h2> @if(count($errors) > 0)

       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
  @endif</div>
</div>
 <div class="col-md-12 pb50">
   @include('includes.content-navbar-1')
 </div>


         {!! Form::open(array('url' => 'post/create','files'=>'true','method'=>'post','class' => 'form-horizontal')) !!}

		   <div class="form-group">
<div class="col-md-2">
     <label for="email">Title:</label>
  </div>
  <div class="col-md-10">
    	  {!! Form::text('title',null, array('class' => 'form-control')) !!}
          </div>
        </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Headlines:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('headlines', null, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sales Message:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('salesMessage',null, array('class' => 'form-control ')) !!}
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2">
     <label for="email">Flag:</label>
  </div>
  <div class="col-md-10">
         {!! Form::text('flag', null, array('class' => 'form-control ')) !!}
          </div>
         </div>
          <div class="form-group">
         <div class="col-md-2">
     <label for="email">Sales Price:</label>
  </div>
  <div class="col-md-10">
           {!! Form::text('salesPrice',null, array('class' => 'form-control ')) !!}
            </div>
          </div>

            <div class="form-group">
       <div class="col-md-2">
     <label for="email">Offer Expires:</label>
  </div>
        <div class="col-md-10">
          {!! Form::text('offerExpire',null, array('class' => 'form-control ')) !!}
           </div>
        </div>
        <div class="form-group">
         <div class="col-md-2">
     <label for="email">List Price:</label>
  </div>
  <div class="col-md-10">
    {!! Form::text('listPrice',null, array('class' => 'form-control ')) !!}
      </div>
          </div>

            <div class="form-group">
             <div class="col-md-2">
         <label for="email">Magento Sku:</label>
      </div>
      <div class="col-md-10">
        {!! Form::text('magentoSku',null, array('class' => 'form-control ')) !!}
          </div>
              </div>
              <div class="form-group">
               <div class="col-md-2">
           <label for="email">Magento Add to Cart URL:</label>
        </div>
        <div class="col-md-10">
          {!! Form::url('magentoAddCarUrl',null, array('class' => 'form-control ')) !!}
            </div>
                </div>
                <div class="form-group">
                 <div class="col-md-2">
             <label for="email">Amazon Url:</label>
          </div>
          <div class="col-md-10">
            {!! Form::url('amazonUrl',null, array('class' => 'form-control ')) !!}
              </div>
                  </div>
                  <div class="form-group">
                   <div class="col-md-2">
               <label for="email">Product Images:</label>
            </div>
            <div class="col-md-10">
              {!! Form::file('productImage') !!}
                </div>
                    </div>
                    <div class="form-group">
                     <div class="col-md-2">
                 <label for="email">Login Url:</label>
              </div>
              <div class="col-md-10">
                {!! Form::text('loginUrl',null, array('class' => 'form-control ')) !!}
                  </div>
                      </div>
                      <div class="form-group">
                       <div class="col-md-2">
                   <label for="email">Activation Url:</label>
                </div>
                <div class="col-md-10">
                  {!! Form::text('activationUrl',null, array('class' => 'form-control ')) !!}
                    </div>
                        </div>
                        <div class="form-group">
                         <div class="col-md-2">
                     <label for="email">Product Description Url:</label>
                  </div>
                  <div class="col-md-10">
                    {!! Form::textarea('productDescriptionHtml',null,['class'=>'form-control', 'rows' => 10, 'cols' => 10]) !!}

                      </div>
                          </div>

              <div class="form-group">
                   <div class="col-md-2">
                       <label for="text">Category Id:</label>
                    </div>

                 <div class="col-md-10">

                    <select name="categoryId" class="form-control">
<option value="">Select Product Category</option>
                    @foreach($category as $cate)

            <option value="{!! $cate->id !!}">{!! $cate->name !!}</option>
                                @endforeach</select>

                              </div></div>


          <div class="form-group">
         <div class="col-md-offset-2 col-md-10">
		   {!! Form::submit('Save', array('class' => 'btn btn-success')); !!}
		</{!! Form::submit('Cancel', array('class' => 'btn btn-success')); !!}
  </div>
         {!! Form::close() !!}

		 </div>
   </div>
 <!--col-md-9-->
</div>
</div>
    @include('includes.footer');
