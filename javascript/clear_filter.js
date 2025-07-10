
function clearFilter() {
    var baseUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
    window.history.replaceState({}, document.title, baseUrl);
}