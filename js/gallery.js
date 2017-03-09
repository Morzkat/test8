
function gallery()
{


}

function add_Img()
{
  var comment = $("#comment").val();
  $("#fileToUpload").on('submit', function(e)
  {
    e.preventDefault();
    $("#message").empty();
    $("#loading").show();

    $.ajax({
      url: 'uploadImg.php',
      type: 'POST',
      contentType: false,
      cache: false,
      processData:false,
      dataType: comment,
      data: {comment: comment},

    })
    .done(function(data) {
      $("#loading").hide();
      $("#message").html(data)
    });
  });

  previewImg();
}

function previewImg()
{
    $("#file").change(function()
     {
        $("#message").empty();

        var file = this.files[0];
        var img  = file.type;

        var reader = new FileReader();
        reader.onload = imgLoaded;
        reader.readAsDataURL(this.files[0]);

    });
}

function imgLoaded(e)
{
  $("#file").css("color","red");
  $('#image_preview').css("display", "block");
  $('#preview').attr('src', e.target.result);
  $('#preview').attr('width', '250px');
  $('#preview').attr('height', '230px');

}
