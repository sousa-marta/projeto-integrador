getElements = function (id) {
  if (typeof id == "object") {
    return [id];
  } else {
    return document.querySelectorAll(id);
  }
};

filterHTML = function(id, selector, filter) {
  var a, b, c, i, j, k, hit;
  a = getElements(id);
  for (i = 0; i < a.length; i++) {
    b = a[i].querySelectorAll(selector);
    for (j = 0; j < b.length; j++) {
      hit = 0;
      if (b[j].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
        hit = 1;
      }
      c = b[j].getElementsByTagName("*");
      for (k = 0; k < c.length; k++) {
        if (c[k].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
          hit = 1;
        }
      }
      if (hit == 1) {
        b[j].style.display = "";
      } else {
        b[j].style.display = "none";
      }
    }
  }
};