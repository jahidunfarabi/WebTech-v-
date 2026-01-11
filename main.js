document.getElementById("loadData").addEventListener("click", function () {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "data.json", true);
  xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
      var data = JSON.parse(xhr.responseText);
      document.getElementById("content").innerHTML = data.message;
    } else {
      console.error("Request failed with status " + xhr.status);
    }
  };
  xhr.onerror = function () {
    console.error("Request failed");
  };
  xhr.send();
});
