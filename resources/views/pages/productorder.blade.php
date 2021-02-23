@extends('layouts.default')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Product Order</span>
    </div>
</div>
<section class="product-sec">
    <div class="container">
        <h1>{{$Product->title}}</h1>
        <div class="row">
            <div class="col-md-6 slider-sec">
                <!-- main slider carousel -->
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="{{$Product->product_image_url}}" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                </div>
                <!--/main slider carousel-->
            </div>
            <div class="col-md-6 slider-content">
                <p>{{$Product->description}}</p>
                <ul>
                    <li>
                        <span class="name">Price</span><span class="clm">:</span>
                        <span class="price final">{{$Product->price}}</span>
                    </li>
                    <li>
                        <span class="name">Available Quantity</span><span class="clm">:</span>
                        <span class="price final">{{$Product->quantity}}</span>
                    </li>
                    <li>
                        <span class="name">Book Type</span><span class="clm">:</span>
                        <span class="price final">{{$Product->book_type}}</span>
                    </li>
                    <li>
                        <span class="name">Book Status</span><span class="clm">:</span>
                        <span class="price final">{{$Product->book_status}}</span>
                    </li>
                    <li>
                        <span class="name">Missing Pages</span><span class="clm">:</span>
                        <span class="price final">{{$Product->missing_pages}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<form name="place_order" method="POST" action="{{URL::to('/')}}/orderinsert/{{$Product->id}}" enctype="multipart/form-data">
  @csrf 
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="quantity">Quantity</label>
      <input type="number" class="form-control" id="quantity" name="quantity"  onchange="calculate({{$Product->price}});" placeholder="" value="" min="1" max="{{$Product->quantity}}" required>
    </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="price">Total Amount</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="" value="" readonly="readonly" required>
    </div>
   </div>
   <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Shipping Details</h4>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Phone<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="district">District</label>
            <select class="custom-select d-block w-100" id="district" required>
                <option value="">Choose...</option>
                <option>15th of May City</option>
                <option>'Ābidīn</option>
                <option>Ad-Darb al-Aḥmar</option>
                <option>Ad-Duqqī</option>
                <option>'Ain Schams</option>
                <option>Al-Ahrām</option>
                <option>Al-'Ajūzah</option>
                <option>Al-Amīriīah</option>
                <option>Azbakeya</option>
                <option>Badrshein</option>
                <option>Al-Basātīn</option>
                <option>Al-Ḥawāmidiyah</option>
                <option>Al-Jamāliyah</option>
                <option>Giza</option>
                <option>Al-Khalīfah</option>
                <option>Al-Khānkah</option>
                <option>Al-Khuṣūṣ</option>
                <option>Maadi</option>
                <option>El Marg</option>
                <option>Al-Ma'ṣarah</option>
                <option>Matariyyah</option>
                <option>Al-Muqaṭṭam</option>
                <option>Al-Mūskī</option>
                <option>New Cairo</option>
                <option>Al-Qanāṭir al-Khayriyah</option>
                <option>El Ubour</option>
                <option>Al-'Umrāniyah</option>
                <option>Al-Warrāq</option>
                <option>Al-Waylī</option>
                <option>An-Nuzhah</option>
                <option>Ash-Sharābiyah</option>
                <option>Sheikh Zayed City</option>
                <option>Ash-Shurūq</option>
                <option>As-Sāḥil</option>
                <option>As-Salām 1</option>
                <option>As-Salām 2</option>
                <option>As-Sayyidah Zaynab</option>
                <option>Aṭ-Ṭālbīah</option>
                <option>At-Tibbīn</option>
                <option>Ossim</option>
                <option>Aẓ-Ẓāhir</option>
                <option>Zamalek</option>
                <option>Az-Zāwiyah al-Ḥamrā'</option>
                <option>Zeitoun</option>
                <option>Bāb ash-Sha'riyah</option>
                <option>Būlāq</option>
                <option>Būlāq al-Dakrūr</option>
                <option>Dār as-Salām</option>
                <option>Hada'iq al-Qubbah</option>
                <option>Helwan</option>
                <option>Imbaba</option>
                <option>Kirdāsah</option>
                <option>Nasr City</option>
                <option>10th of Ramadan City</option>
                <option>Madīnat Badr</option>
                <option>6th of October City</option>
                <option>Heliopolis</option>
                <option>Old Cairo</option>
                <option>Manshiyat Naser</option>
                <option>Qalyūb</option>
                <option>Qaṣr an-Nīl</option>
                <option>Rod El Farag</option>
                <option>Shubrā</option>
                <option>Shubra el-Kheima</option>
                <option>Tura</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid district.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="postalcode">Postal Code</label>
            <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <input type="hidden" class="form-control" name="seller_user_id" id="seller_user_id" value="{{$Product->user_id}}">
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">BUY</button</form>
</form>
<script type="text/javascript">
    function calculate(unit_price) {
            console.log(unit_price);
            var quantity = document.getElementById("quantity").value;
            console.log(quantity);
            RESULT = quantity * unit_price;
            document.getElementById("price").value = RESULT;
            console.log(RESULT);
    }
</script>

@stop