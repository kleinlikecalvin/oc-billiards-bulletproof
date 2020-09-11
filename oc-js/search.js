document.getElementById("searchForm").onsubmit = function () {
  window.location =
    "http://www.google.com/search?q=site:ocbilliards.com" +
    document.getElementById("search-input").value;
  return false;
};
