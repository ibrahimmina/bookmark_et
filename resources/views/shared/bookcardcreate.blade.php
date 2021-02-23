<div class="container">
    <div class="title">
            <h2><center>{{ $PageSettings['PageSubtitle'] }}</center></h2>
            <hr>
    </div>
    @if (\Request::is('books/create'))
    <div class="row justify-content-center">
    <div class="form-group col-md-4 col-md-offset-5 align-center ">
      <form name="place_order" method="POST" action="{{URL::to('/')}}/books" enctype="multipart/form-data">
        @csrf 
       
            <h4 class="mb-3">Book Details</h4>

            <div class="form-group">

                <label for="title">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" required>

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="isbn">isbn</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" id="isbn" value="{{ old('isbn') }}" required>

                @error('isbn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="isbn13">isbn13</label>
                <input type="text" class="form-control @error('isbn13') is-invalid @enderror" name="isbn13" id="isbn13" value="{{ old('isbn13') }}" required>

                @error('isbn13')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="asin">asin</label>
                <input type="text" class="form-control @error('asin') is-invalid @enderror" name="asin" id="asin" value="{{ old('asin') }}" required>

                @error('asin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="kindle_asin">kindle_asin</label>
                <input type="text" class="form-control @error('kindle_asin') is-invalid @enderror" name="kindle_asin" id="kindle_asin" value="{{ old('kindle_asin') }}" required>

                @error('kindle_asin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="marketplace_id">marketplace_id</label>
                <input type="text" class="form-control @error('marketplace_id') is-invalid @enderror" name="marketplace_id" id="marketplace_id" value="{{ old('marketplace_id') }}" required>

                @error('marketplace_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="country_code">country_code</label>
                <input type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" id="country_code" value="{{ old('country_code') }}" required>

                @error('country_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="image_url">image_url</label>
                <input type="text" class="form-control @error('image_url') is-invalid @enderror" name="image_url" id="image_url" value="{{ old('image_url') }}" required>

                @error('image_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="small_image_url">small_image_url</label>
                <input type="text" class="form-control @error('small_image_url') is-invalid @enderror" name="small_image_url" id="small_image_url" value="{{ old('small_image_url') }}" required>

                @error('small_image_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="publication_year">publication_year</label>
                <input type="text" class="form-control @error('publication_year') is-invalid @enderror" name="publication_year" id="publication_year" value="{{ old('publication_year') }}" required>

                @error('publication_year')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="publication_month">publication_month</label>
                <input type="text" class="form-control @error('publication_month') is-invalid @enderror" name="publication_month" id="publication_month" value="{{ old('publication_month') }}" required>

                @error('publication_month')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="publication_day">publication_day</label>
                <input type="text" class="form-control @error('publication_day') is-invalid @enderror" name="publication_day" id="publication_day" value="{{ old('publication_day') }}" required>

                @error('publication_day')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="publisher">publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" id="publisher" value="{{ old('publisher') }}" required>

                @error('publisher')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="language_code">language_code</label>
                <input type="text" class="form-control @error('language_code') is-invalid @enderror" name="language_code" id="language_code" value="{{ old('language_code') }}" required>

                @error('language_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="is_ebook">is_ebook</label>
                <input type="text" class="form-control @error('is_ebook') is-invalid @enderror" name="is_ebook" id="is_ebook" value="{{ old('is_ebook') }}" required>

                @error('is_ebook')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="description">description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description') }}" required>

                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="num_pages">num_pages</label>
                <input type="text" class="form-control @error('num_pages') is-invalid @enderror" name="num_pages" id="num_pages" value="{{ old('num_pages') }}" required>

                @error('num_pages')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="format">format</label>
                <input type="text" class="form-control @error('format') is-invalid @enderror" name="format" id="format" value="{{ old('format') }}" required>

                @error('format')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="edition_information">edition_information</label>
                <input type="text" class="form-control @error('edition_information') is-invalid @enderror" name="edition_information" id="edition_information" value="{{ old('edition_information') }}" required>

                @error('edition_information')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

               <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button</form>
      </form>
      </div>
    </div>
    @elseif (\Request::is('books/*/edit'))
    <div class="row justify-content-center">
    <div class="form-group col-md-4 col-md-offset-5 align-center ">
      <form name="place_order" method="POST" action="{{URL::to('/')}}/books/{{$Address->id}}" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
       
            <h4 class="mb-3">Book Details</h4>

            <div class="form-group">

            <div class="form-group">

              <label for="title">title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{$Book->title}}" required>
              @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="isbn">isbn</label>
              <input type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" id="isbn" value="{{$Book->isbn}}" required>
              @error('isbn')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="isbn13">isbn13</label>
              <input type="text" class="form-control @error('isbn13') is-invalid @enderror" name="isbn13" id="isbn13" value="{{$Book->isbn13}}" required>
              @error('isbn13')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="asin">asin</label>
              <input type="text" class="form-control @error('asin') is-invalid @enderror" name="asin" id="asin" value="{{$Book->asin}}" required>
              @error('asin')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="kindle_asin">kindle_asin</label>
              <input type="text" class="form-control @error('kindle_asin') is-invalid @enderror" name="kindle_asin" id="kindle_asin" value="{{$Book->kindle_asin}}" required>
              @error('kindle_asin')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="marketplace_id">marketplace_id</label>
              <input type="text" class="form-control @error('marketplace_id') is-invalid @enderror" name="marketplace_id" id="marketplace_id" value="{{$Book->marketplace_id}}" required>
              @error('marketplace_id')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="country_code">country_code</label>
              <input type="text" class="form-control @error('country_code') is-invalid @enderror" name="country_code" id="country_code" value="{{$Book->country_code}}" required>
              @error('country_code')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="image_url">image_url</label>
              <input type="text" class="form-control @error('image_url') is-invalid @enderror" name="image_url" id="image_url" value="{{$Book->image_url}}" required>
              @error('image_url')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="small_image_url">small_image_url</label>
              <input type="text" class="form-control @error('small_image_url') is-invalid @enderror" name="small_image_url" id="small_image_url" value="{{$Book->small_image_url}}" required>
              @error('small_image_url')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="publication_year">publication_year</label>
              <input type="text" class="form-control @error('publication_year') is-invalid @enderror" name="publication_year" id="publication_year" value="{{$Book->publication_year}}" required>
              @error('publication_year')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="publication_month">publication_month</label>
              <input type="text" class="form-control @error('publication_month') is-invalid @enderror" name="publication_month" id="publication_month" value="{{$Book->publication_month}}" required>
              @error('publication_month')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="publication_day">publication_day</label>
              <input type="text" class="form-control @error('publication_day') is-invalid @enderror" name="publication_day" id="publication_day" value="{{$Book->publication_day}}" required>
              @error('publication_day')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="publisher">publisher</label>
              <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" id="publisher" value="{{$Book->publisher}}" required>
              @error('publisher')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="language_code">language_code</label>
              <input type="text" class="form-control @error('language_code') is-invalid @enderror" name="language_code" id="language_code" value="{{$Book->language_code}}" required>
              @error('language_code')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="is_ebook">is_ebook</label>
              <input type="text" class="form-control @error('is_ebook') is-invalid @enderror" name="is_ebook" id="is_ebook" value="{{$Book->is_ebook}}" required>
              @error('is_ebook')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="description">description</label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{$Book->description}}" required>
              @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="num_pages">num_pages</label>
              <input type="text" class="form-control @error('num_pages') is-invalid @enderror" name="num_pages" id="num_pages" value="{{$Book->num_pages}}" required>
              @error('num_pages')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="format">format</label>
              <input type="text" class="form-control @error('format') is-invalid @enderror" name="format" id="format" value="{{$Book->format}}" required>
              @error('format')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <label for="edition_information">edition_information</label>
              <input type="text" class="form-control @error('edition_information') is-invalid @enderror" name="edition_information" id="edition_information" value="{{$Book->edition_information}}" required>
              @error('edition_information')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror

              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button</form>
      </form>
      </div>
    </div>
    @endif
</div>

