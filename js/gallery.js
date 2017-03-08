
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
    var imagess = [];
    imagess.push(image);

    data = JSON.stringify(imagess);
    localStorage.setItem("images",data);
}

var storageImage - localStorage.getItem("images");
