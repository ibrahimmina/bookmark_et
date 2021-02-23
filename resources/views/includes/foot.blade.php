<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
   function toggleByBookID($id) {
     const Url ='{{ url("/wish/toggleByBookID") }}';

     var button = document.getElementById("wish"+$id);
     var style = getComputedStyle(button);

     const data={
      _token: '<?php echo csrf_token() ?>',
      book_id: $id
     }
      $.post(Url, data, function(data,status){
        console.log(style['color']);
        if (style['color'] == "rgb(0, 0, 255)"){
          console.log("blue");
          button.style.color = "rgb(108, 117, 125)";
        } else {
          button.style.color = "rgb(0, 0, 255)";
        }
      });
   }
</script>