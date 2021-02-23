<div class="row" id="book_pictures">
@isset($Images)
  @foreach($Images as $image)
      <div class="col-md-4" id="col{{$loop->iteration}}" name="col{{$loop->iteration}}">
          <div class="card mb-4 shadow-sm">
              <img class="card-img-top" id="img{{$loop->iteration}}" name="img{{$loop->iteration}}" src="{{URL::to('/')}}/productimages/{{$Product->id}}/{{$image->getfilename()}}" style="width: 100%; height: 225px; background: rgb(85, 89, 92); color: rgb(236, 238, 239);">
              <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group" id="btngrp1">
                          <button class="btn btn-sm btn-outline-secondary" onclick="onDeleteButtonClick({{$loop->iteration}})"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endforeach
@endisset

</div>

<div class="input-group mb-3">
  <div class="custom-file" id="div2">
    @empty($Images)
      <input type="file" class="custom-file-input" name="input1" id="input1" onchange="onFileSelected(event)">
      <label class="custom-file-label" for="input1" name="labelinput1" id="labelinput1">Choose file</label>
    @endempty
    @isset($Images)
      @foreach($Images as $image)
        <input type="file" class="custom-file-input" name="input{{$loop->iteration}}" id="input{{$loop->iteration}}" onchange="onFileSelected(event)" src="{{URL::to('/')}}/productimages/{{$Product->id}}/{{$image->getfilename()}}">
        <label class="custom-file-label" for="input{{$loop->iteration}}" name="labelinput{{$loop->iteration}}" id="labelinput{{$loop->iteration}}">Choose file</label>
      @endforeach
        <input type="file" class="custom-file-input" name="input{{count($Images) + 1}}" id="inputinput{{count($Images) + 1}}" onchange="onFileSelected(event)">
        <label class="custom-file-label" for="inputinput{{count($Images) + 1}}" name="labelinputinput{{count($Images) + 1}}" id="labelinputinput{{count($Images) + 1}}">Choose file</label>
    @endisset
  </div>
</div>



<script type="text/javascript">
var imgcounter = 1;
</script>

<script type="text/javascript">
function onDeleteButtonClick($deleteimageindex) {

    var deletcol = document.getElementById("col" + $deleteimageindex);
    deletcol.parentNode.removeChild(deletcol);

    var deletcolrev = document.getElementById("rev_col" + $deleteimageindex);
    deletcolrev.parentNode.removeChild(deletcolrev);

    var deletinput = document.getElementById("input" + $deleteimageindex);
    var src = deletinput.src;
    deletinput.parentNode.removeChild(deletinput);

    //<input type="text" id="deleteimage" name="deleteimage[]" hidden>
    if (src != ""){
      var res = src.split('/');
      var deleteinputarray = document.createElement("input");
      deleteinputarray.type = "text";
      deleteinputarray.setAttribute("id", "deleteimage");
      deleteinputarray.setAttribute("name", "deleteimage[]");
      deleteinputarray.setAttribute("value", res[res.length - 1]);
      deleteinputarray.style.display = "none";

      var element2 = document.getElementById("div2");
      element2.appendChild(deleteinputarray);
    }


}
function onFileSelected(event) {
  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  reader.onload = function(event) {    
        
        var col = document.createElement("div");
        col.className = "col-md-4";
        col.setAttribute("id", "col" + imgcounter);
        col.setAttribute("name", "col" + imgcounter);

        var card = document.createElement("div");
        card.className = "card mb-4 shadow-sm";
        
        var img = document.createElement("img");

        img.className = "card-img-top";

        img.style.width = '100%';
        img.style.height= '225px';
        img.style.background= '#55595c';
        img.style.color= '#eceeef';
        img.setAttribute("id", "img" + imgcounter);
        img.setAttribute("name", "img" + imgcounter);

        img.src = event.target.result;

        var cardbody = document.createElement("div");
        cardbody.className = "card-body";

        var dflex = document.createElement("div");
        dflex.className = "d-flex justify-content-between align-items-center";

        var btngrp = document.createElement("div");
        btngrp.className = "btn-group";
        btngrp.id = "btngrp" + imgcounter;

        var deletebutton = document. createElement("button");
        deletebutton.className = "btn btn-sm btn-outline-secondary";
        deletebutton.setAttribute("onClick", "onDeleteButtonClick(" + imgcounter + ")");

        var deleteicon = document.createElement("i");
        deleteicon.className = "fa fa-trash";
        deletebutton.appendChild(deleteicon);

        btngrp.appendChild(deletebutton);

        dflex.appendChild(btngrp);

        cardbody.appendChild(dflex);

        card.appendChild(img);
        //card.appendChild(input);

        card.appendChild(cardbody);

        col.appendChild(card);

        var element = document.getElementById("book_pictures");
        element.appendChild(col);

        var review_pictures = document.getElementById("review_pictures");

        var rev_col = document.createElement("div");
        rev_col.className = "col-md-4";
        rev_col.setAttribute("id", "rev_col" + imgcounter);
        rev_col.setAttribute("name", "rev_col" + imgcounter);

        var rev_card = document.createElement("div");
        rev_card.className = "card mb-4 shadow-sm";

        var rev_img = document.createElement("img");

        rev_img.className = "card-img-top";

        rev_img.style.width = '100%';
        rev_img.style.height= '225px';
        rev_img.style.background= '#55595c';
        rev_img.style.color= '#eceeef';
        rev_img.setAttribute("id", "rev_img" + imgcounter);
        rev_img.setAttribute("name", "rev_img" + imgcounter);

        rev_img.src = event.target.result;

        rev_card.appendChild(rev_img);

        rev_col.appendChild(rev_card);

        review_pictures.appendChild(rev_col);

        var oldinput = document.getElementById("input" + imgcounter);
        oldinput.style.display = "none";

        var oldinputlabel = document.getElementById("labelinput" + imgcounter);
        oldinputlabel.style.display = "none";

        imgcounter++;
        var input = document.createElement("input");
        input.type = "file";
        input.setAttribute("id", "input" + imgcounter);
        input.setAttribute("name", "input" + imgcounter);
        input.setAttribute("class", "custom-file-input");

        input.setAttribute("onchange", "onFileSelected(event)");

        var inputlabel = document.createElement("label");
        inputlabel.setAttribute("class", "custom-file-label");
        inputlabel.setAttribute("for", "input" + imgcounter);
        inputlabel.setAttribute("name", "labelinput" + imgcounter);
        inputlabel.setAttribute("id", "labelinput" + imgcounter);
        inputlabel.innerHTML = "Choose file";

        var element2 = document.getElementById("div2");
        element2.appendChild(input);
        element2.appendChild(inputlabel);

        
  };

  reader.readAsDataURL(selectedFile);
}
</script>