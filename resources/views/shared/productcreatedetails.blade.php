@empty($Product)
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="price">Price</label>
          <input type="text" class="form-control" id="price" name="price" min="1" placeholder="" value="" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" min="1" name="quantity"  placeholder="" value="" required>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="book_type">Book Type</label>
            <select class="custom-select d-block w-100" id="book_type" name="book_type" required>
              <option value="">Choose...</option>
              <option>Original</option>
              <option>High Copy</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="book_status">Book Status</label>
            <select class="custom-select d-block w-100" id="book_status" name="book_status" required>
              <option value="">Choose...</option>
              <option>New</option>
              <option>Used</option>
            </select>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 mb-3">
              <div class="checkbox mb-3" style="font-weight: 400;margin-bottom: 1rem!important">
              <label><input type="checkbox" id="missing_pages" value="missing_pages" name="missing_pages" style="box-sizing: border-box;padding: 0;margin: 0;border: initial"> {{ __('Missing Pages') }}</label>
              </div>
          </div>
      </div>
    </div>
  </div>
@endempty
@isset($Product)
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="price">Price</label>
          <input type="text" class="form-control" id="price" name="price" min="1" placeholder="" value="{{$Product->price}}" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity"  min="1" placeholder="" value="{{$Product->quantity}}" required>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="book_type">Book Type</label>
            <select class="custom-select d-block w-100" id="book_type" name="book_type" required>
              <option value="{{$Product->book_type}}">Choose...</option>
              <option>Original</option>
              <option>High Copy</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="book_status">Book Status</label>
            <select class="custom-select d-block w-100" id="book_status" name="book_status" required>
              <option value="{{$Product->book_status}}">Choose...</option>
              <option>New</option>
              <option>Used</option>
            </select>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 mb-3">
              <div class="checkbox mb-3" style="font-weight: 400;margin-bottom: 1rem!important">
              @if($Product->missing_pages == 0)
                <label><input type="checkbox" id="missing_pages" value="missing_pages" name="missing_pages" style="box-sizing: border-box;padding: 0;margin: 0;border: initial"> {{ __('Missing Pages') }}</label>
              @else
                <label><input type="checkbox" id="missing_pages" value="missing_pages" name="missing_pages" style="box-sizing: border-box;padding: 0;margin: 0;border: initial" CHECKED> {{ __('Missing Pages') }}</label>
              @endif
              
              </div>
          </div>
      </div>
    </div>
  </div>
@endisset