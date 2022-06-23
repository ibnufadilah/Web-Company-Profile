$(document).ready(function(){

  var data = "index.php";
  $('#index').load(data);

  function getAll()
  {
    $.ajax({
      url: 'index.php',
      data: 'action=show-all',
      cache: false,
      success: function(response){
        // jika berhasil 
        $("#data-product").html(response);
        
      }
    });     
}

    getAll();

  // ketika ada event change
  $("#jenis_produksi").change(function()
  {       
    var pil = $(this).find(":selected").val();
    var dataString = 'action='+ pil;
        
    $.ajax({
      url: 'index.php',
      data: dataString,
      cache: false,
      success: function(response){
        // jika berhasil 
        $("#data-product").html(response);
      } 
    });
})



  });