
function gallery()
{


}

function add_Img()
{

  $("#fileToUpload").on('submit', function(e)
  {
    e.preventDefault();
    $("#message").empty();

    $.ajax({
      url: 'uploadImg.php',
      type: 'POST',
      contentType: false,
      cache: false,
      processData:false,
      data: new FormData(this),

    })
    .done(function(data) {
      $("#message").html(data)
      $("#comment").val(" ");
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

function deleteImage(id_Image)
{
  $.ajax({
    url: 'deleteImage.php',
    type: 'POST',
    data: {id_Image: id_Image}
  })
  .done(function(data)
  {
    $("#deleteImage").fadeOut('slow', function()
    {
        $(this).modal('hide')
    })
    .fadeIn('slow', function()
    {
        $("#deleteImage .modal-body").load('p.php',

          function()
          {
          /* Stuff to do after the page is loaded */
          $("#deleteImage").modal('show');
        });

    });
  });
}
