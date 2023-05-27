function showImage() {
    var countryList = document.getElementById("country-list");
    var countryImage = document.getElementById("country-image");
    var selectedCountry = countryList.value;

    switch (selectedCountry) {
      case "Jordan":
        countryImage.src = "Flag-of-Jordan-01.png";
        break;
      case "Salt":
        countryImage.src = "download.jpg";
        break;
      case "japan":
        countryImage.src = "70ff11f5565dc5a3774ea54c2d2d8a87.jpg";
        break;
      default:
        countryImage.src = "";
        break;
    }
  }