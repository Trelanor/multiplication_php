//  function makeRequest(url) {
//
//     var httpRequest = false;
//
//     httpRequest = new XMLHttpRequest();
//
//     if (!httpRequest) {
//        alert('Abandon :( Impossible de créer une instance XMLHTTP');
//        return false;
//        }
//        httpRequest.onreadystatechange = function() {
//			alertContents(httpRequest);
//			};
//        httpRequest.open('POST', url, true);
//        httpRequest.send();
//
//    }
//
//    function alertContents(httpRequest) {
//
//        if (httpRequest.readyState == XMLHttpRequest.DONE) {
//            if (httpRequest.status == 200) {
//                alert(httpRequest.responseText);
//            } else {
//                alert('Un problème est survenu avec la requête.');
//            }
//        }
//

var elem = document.querySelectorAll('select');
var instance = M.FormSelect.init(elem);