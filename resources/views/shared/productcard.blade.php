<div class="container-fluid content-row">
    <div class="row mt-3">
        @foreach ($Products as $Product) 
        <div class="col m-3">

            <div class="card h-100 mb-4 shadow-sm" style="width: 18rem;">
                <div class="card-body">

                    @isset($Images[$Product->id])
                        <div id="carouselExampleIndicators{{$Product->id}}" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($Images[$Product->id] as $image)
                                    @if ($loop->first)
                                        <li data-target="#carouselExampleIndicators{{$Product->id}}" data-slide-to="0" class="active"></li>
                                    @else
                                        <li data-target="#carouselExampleIndicators{{$Product->id}}" data-slide-to="{{$loop->index}}"></li>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($Images[$Product->id] as $image)
                                    @if ($loop->first)
                                        <div class="carousel-item active">
                                    @else
                                        <div class="carousel-item">
                                    @endif
                                        <img src="{{URL::to('/')}}/productimages/{{$Product->id}}/{{$image->getfilename()}}" class="img-thumbnail">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators{{$Product->id}}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators{{$Product->id}}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @endisset
                    @empty($Images[$Product->id])
                        <div id="carouselExampleIndicators{{$Product->id}}" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators{{$Product->id}}" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{URL::to('/')}}/default.jpg" class="img-thumbnail">
                                </div>
                            </div>
                        </div>
                    @endempty
                    <table class="table" id="details">
                        <tbody>
                            <tr>
                                <th scope="row">Price</th>
                                <td id="price">{{$Product->price}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Quantity</th>
                                <td id="quantity">{{$Product->quantity}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Type</th>
                                <td id="book_type">{{$Product->book_type}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Book Status</th>
                                <td id="book_status">{{$Product->book_status}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Missing Pages</th>
                                @if($Product->missing_pages == 0)
                                    <td id="missing_pages">No</td>
                                @else
                                    <td id="missing_pages">Yes</td>
                                @endif
                            </tr>  
                        </tbody>
                    </table>

                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{URL::to('/')}}/order/{{$Product->id}}">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>