<div class="container">
    <div class="row">
      @foreach ($Books as $Book)    
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="{{$Book->image_url}}" alt="Card image cap" width="100%" height="225" background="#55595c" color="#eceeef">
            <div class="card-body">
              <p class="card-text">{{$Book->title}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @if (Auth::check())
                    @if (Auth::user()->wishes()->where('book_id',$Book->id)->first() != null)
                      <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' style="color:blue" class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                    @else
                      <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                    @endif
                  @else
                    <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' class="btn btn-sm btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                  @endif
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href=""><i class="fa fa-shopping-cart" title="Buy" ></i></a></button>
                  <form method="POST" action="{{URL::to('/')}}/productCreateStep1">
                    @csrf
                    <input type="text" name="book_id" id="book_id" value="{{$Book->id}}" hidden>
                    <input type="text" name="title" id="title" value="{{$Book->title}}" hidden>
                    <input type="text" name="image_url" id="image_url" value="{{$Book->image_url}}" hidden>
                    <button type="submit" class="btn btn-sm btn-outline-secondary"><i class="fa fa-money" title="Sell"></i></a></button>
                  </form> 
                </div>
                <small class="text-muted"><a href="books/{{$Book->id}}">Details</a></small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
