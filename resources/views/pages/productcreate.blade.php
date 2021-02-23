@extends('layouts.default')
@section('content')

<div class="card mb-3" style="width: 100%">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{$book->image_url}}" class="img-thumbnail" >
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">{{$book->title}}</h4>
            </div>
        </div>
    </div>
</div>

@if((\Request::is('products/*/edit')))
    <form method="POST" id="proForm" action="{{URL::to('/')}}/products/{{$Product->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
@else
    <form method="POST" id="proForm" action="{{URL::to('/')}}/products" enctype="multipart/form-data">
    @csrf
@endif
         
        <input type="text" name="book_id" id="book_id" value="{{$book->id}}" hidden>
        <div class="card">
            <div class="card-body">
                
                <div class="progress mb-3" >
                    <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>

        
                <div class="tab" style="display: none;">
                    <h4 class= "mb-3" align="center">Select Pick-up Address:</h4>
                    @include('shared.addresscard')
                </div>

                <div class="tab" style="display: none;">
                    <h4 class= "mb-3" align="center">Add Book Details:</h4>
                    @include('shared.productcreatedetails')
                </div>

                <div class="tab" style="display: none;">
                    <h4 class= "mb-3" align="center">Add Book Picures:</h4>
                    @include('shared.productcreateimages')
                </div>

                <div class="tab" style="display: none;">
                    <h4 class= "mb-3" align="center">Final Review:</h4>

                    <div class="row" width="100%">
                        <div class="col">
                            <h5>Pick-up Address:</h5>
                        </div>
                        <div class="col text-right">
                            <a href="#" onClick="nextPrev(-3)">edit</a>
                        </div>
                    </div>

                    <div class="row ml-3" id="review_address" width="100%">

                    </div>
                    
                    <hr>                    

                    <div class="row" width="100%">
                        <div class="col">
                            <h5>Book Details:</h5>
                        </div>
                        <div class="col text-right">
                            <a href="#" onClick="nextPrev(-2)">edit</a>
                        </div>
                    </div>
                    
                    <div class="row ml-3 mr-3"  width="100%">
                            <table class="table" id="review_details">
                                <tbody>
                                    <tr>
                                    <th scope="row">Price</th>
                                    <td id="review_price"></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Quantity</th>
                                    <td id="review_quantity"></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Book Type</th>
                                    <td id="review_book_type"></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Book Status</th>
                                    <td id="review_book_status"></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Missing Pages</th>
                                    <td id="review_missing_pages"></td>
                                    </tr>  
                                </tbody>
                            </table>
                    </div>
                    
                    <hr>     

                    <div class="row" width="100%">
                        <div class="col">
                            <h5>Book Pictures:</h5>
                        </div>
                        <div class="col text-right">
                            <a href="#" onClick="nextPrev(-1)">edit</a>
                        </div>
                    </div>

                    <div class="row ml-3" id="review_pictures" width="100%">
                    @isset($Images)
                        @foreach($Images as $image)
                            <div class="col-md-4" id="rev_col{{$loop->iteration}}" name="rev_col{{$loop->iteration}}">
                                <div class="card mb-4 shadow-sm">
                                    <img class="card-img-top" id="rev_img{{$loop->iteration}}" name="rev_img{{$loop->iteration}}" src="{{URL::to('/')}}/productimages/{{$Product->id}}/{{$image->getfilename()}}" style="width: 100%; height: 225px; background: rgb(85, 89, 92); color: rgb(236, 238, 239);">
                                </div>
                            </div>
                        @endforeach
                    @endisset
                    </div>     
                    <hr>     

                </div>

                
                <div class= "row mt-3 mb-3 float-right">
                    <button type="button" class="btn btn-primary mr-3" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
        </div>

</form>

<script type="text/javascript">
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        //document.getElementById("nextBtn").setAttribute("onClick","submit()");
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
/*         if (document.getElementById("nextBtn").hasAttribute("onClick")){
            document.getElementById("nextBtn").removeAttribute("onClick");
        } */
        
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //if (n == 1 && !validateForm()) return false;
    if (n == 1){
        if (!validateForm(currentTab)) return false;
    }
    
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;

    //fill in the final review tab
    var finalreview = document.getElementById("finalreview");

    if (currentTab == 1){
        var radios = document.getElementsByName('seller_address_id');

        var review_address = document.getElementById("review_address");

        while (review_address.firstChild) {
            review_address.removeChild(review_address.firstChild);
        }

        for(var i = 0; i < radios.length; i++){
            if ( radios[i].checked ) { 
                var selected_address = document.getElementById("address_" + radios[i].value );
                var clone_address = selected_address.cloneNode(true);
                review_address.appendChild(clone_address);

                var seller_address_id = document.createElement("input");
                seller_address_id.type = "text";
                seller_address_id.setAttribute("id", "seller_address_id");
                seller_address_id.setAttribute("name", "seller_address_id");
                seller_address_id.setAttribute("value", radios[i].value);
                seller_address_id.style.display = "none";
                review_address.appendChild(seller_address_id);

                break; 
            }
        }      
    } else if (currentTab == 2){
        document.getElementById("review_details").rows[0].cells[1].innerHTML = document.getElementById("price").value;
        document.getElementById("review_details").rows[1].cells[1].innerHTML = document.getElementById("quantity").value;
        document.getElementById("review_details").rows[2].cells[1].innerHTML = document.getElementById("book_type").value;
        document.getElementById("review_details").rows[3].cells[1].innerHTML = document.getElementById("book_status").value;
        if (document.getElementById("missing_pages").checked){
            document.getElementById("review_details").rows[4].cells[1].innerHTML = "Yes";
        } else {
            document.getElementById("review_details").rows[4].cells[1].innerHTML = "No";
        }
    } else if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("proForm").submit();
        return false;
    }

  
    showTab(currentTab);
    }

    function validateForm(tab) {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");

    if (currentTab == 0){
        valid = false;
        radios = document.getElementsByName('seller_address_id');
        for(var i = 0; i < radios.length; i++){
            if (radios[i].checked ) { 
                valid = true;
            }
        }
    }else if (currentTab == 1){
        y = x[tab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
            }
        }
    }else if (currentTab == 2){
        valid = false;
        for (i = 0; i < document.getElementsByClassName('custom-file-input').length; i++) {
            if ((document.getElementsByClassName('custom-file-input')[i].files.length > 0) || (document.getElementsByClassName('custom-file-input')[i].src != "")){
                valid = true;
            }
        }
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        var x = document.getElementsByClassName("tab");
        var progress = document.getElementById("progress");
        var perc = (n/x.length)*100;

        progress.setAttribute("aria-valuenow",perc);
        progress.style.width = perc + "%";
    }
</script>
@stop