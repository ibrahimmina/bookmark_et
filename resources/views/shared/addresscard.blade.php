<div class="container-fluid content-row">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card card-body h-100 justify-content-center  shadow-sm text-center">
                
                <a href="{{URL::to('/')}}/addresses/create" class="btn btn-link stretched-link"><i class="fa fa-plus" title="Add New Address"></i></a>
                <label>Add New Address</label>
                
            </div>
        </div>
        @foreach (Auth::user()->addresses()->get() as $Address) 
        <div class="col-sm-12 col-lg-6">
            <div class="card h-100 mb-4 shadow-sm">
                <div class="card-body">
                  <address id="address_{{$Address->id}}">
                    <strong>{{$Address->fullname}}</strong><br>
                    {{$Address->address1}}<br>
                    {{$Address->address2}}<br>
                    {{$Address->district}}, {{$Address->city}} {{$Address->postalcode}}<br>
                    <abbr title="Phone">P:</abbr> {{$Address->phone}}
                  </address>
                    @if ($PageSettings["PageSubtitle"] == "Select Address")
                        @isset($Product)
                            @if($Product->seller_address_id == $Address->id)
                                <input type="radio" name="seller_address_id" value="{{$Address->id}}" CHECKED>
                            @else
                            <input type="radio" name="seller_address_id" value="{{$Address->id}}">
                            @endif
                        @endisset
                        @empty($Product)
                            <input type="radio" name="seller_address_id" value="{{$Address->id}}">
                        @endempty 
                    @else
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{URL::to('/')}}/addresses/{{$Address->id}}/edit">Update</button>
                        <form method="POST" action="{{URL::to('/')}}/addresses/{{$Address->id}}">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                        </form>
                    </div>
                    @endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>