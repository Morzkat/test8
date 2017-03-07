
var images = [];

function loadImages()
{
  for (var i = 0; i < 20; i++)
  {
    var div = document.createElement("DIV");
    var img = document.createElement("IMG");

    div.appendChild(img);

    $(".gallery").append(div);
  }
}

function setImage(image)
{
    images.push(image);

    data = JSON.stringify(images);
    localStorage.setItem("images",data);
}

var storageImage - localStorage.getItem("images");
