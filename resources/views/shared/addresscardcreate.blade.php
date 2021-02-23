<div class="container">
    @if (\Request::is('addresses/create') or \Request::is('productcreate/*'))
    <div class="row justify-content-center">
    <div class="form-group col-md-4 col-md-offset-5 align-center ">
      <form name="place_order" method="POST" action="{{URL::to('/')}}/addresses" enctype="multipart/form-data">
        @csrf 
       
            <h4 class="mb-3">Address Details</h4>

            <div class="form-group">
                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100 @error('country') is-invalid @enderror" id="country" name="country" required>
                      <option value="{{ old('country') }}">Choose...</option>
                      <option>Egypt</option>
                  </select>

                  @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror

                  <label for="city">City</label>
                  <select class="custom-select d-block w-100 @error('city') is-invalid @enderror" id="city" name="city" required>
                      <option value="{{ old('city') }}">Choose...</option>
                      <option>Cairo</option>
                  </select>

                  @error('district')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror

                <label for="Full Name">Full Name</label>
                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" value="{{ old('fullname') }}" required>

                @error('fullname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="address">Address</label>
                <input type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" id="address1" value="{{ old('address1') }}" placeholder="Street and Number, C/O" required>
                
                @error('address1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <input type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" id="address2" value="{{ old('address2') }}" placeholder="Apartment, Suite, Unit, building, Floor, etc." required>
                @error('address2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('address2') }}" name="phone" id="phone" placeholder="Phone">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                  <label for="district">District</label>
                  <select class="custom-select d-block w-100 @error('district') is-invalid @enderror" id="district" name="district" required>
                      <option value="{{ old('district') }}">Choose...</option>
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
                  @error('district')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="postalcode">Postal Code</label>
                  <input type="text" class="form-control @error('postalcode') is-invalid @enderror" value="{{ old('postalcode') }}" name="postalcode" id="postalcode" placeholder="">
                  @error('postalcode')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
      </form>
      </div>
    </div>
    @elseif (\Request::is('addresses/*/edit'))
    <div class="row justify-content-center">
    <div class="form-group col-md-4 col-md-offset-5 align-center ">
      <form name="place_order" method="POST" action="{{URL::to('/')}}/addresses/{{$Address->id}}" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
       
            <h4 class="mb-3">Address Details</h4>

            <div class="form-group">

            <div class="form-group">
                  <label for="country">Country</label>
                  <select class="custom-select d-block w-100 @error('country') is-invalid @enderror" id="country" name="country" required>
                      <option value="{{$Address->country}}">Choose...</option>
                      <option>Egypt</option>
                  </select>
                  @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror 
                  <label for="district">City</label>
                  <select class="custom-select d-block w-100 @error('city') is-invalid @enderror" id="city" name="city" required>
                      <option value="{{$Address->city}}">Choose...</option>
                      <option>Cairo</option>
                  </select>
                  @error('district')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror 
                <label for="Full Name">Full Name</label>
                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="fullname" value="{{$Address->fullname}}" required>
                @error('fullname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror 
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" id="address1" value="{{$Address->address1}}" required>
                @error('address1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror   
                <input type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" id="address2" value="{{$Address->address2}}" required>
                @error('address2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror    
              </div>

              <div class="form-group">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{$Address->phone}}">
                  @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror              
              </div>

              <div class="form-group">
                  <label for="district">District</label>
                  <select class="custom-select d-block w-100 @error('district') is-invalid @enderror" id="district" name="district" required>
                      <option value="{{$Address->district}}">Choose...</option>
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
                  @error('district')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="postalcode">Postal Code</label>
                  <input type="text" class="form-control @error('postalcode') is-invalid @enderror" name="postalcode" id="postalcode" value="{{$Address->postalcode}}">
                  @error('postalcode')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button</form>
      </form>
      </div>
    </div>
    @endif
</div>

