@foreach ($Authors as $Author)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="{{$Author->image_url}}" class="card-img" >
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$Author->author_name}}</h5>
            </div>
            </div>
        </div>
    </div>
@endforeach