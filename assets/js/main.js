
//Main functions here
const key = '1f54bd990f1cdfb230adb312546d765d';
let loading = false;
let result;

var AJAX = AJAX || (function(){
    return {
        request : function(url,callback) {
            fetch(url) //request url
            .then((resp) => resp.json())
            .then(function(data) {
                result = data;
                callback();
            })
            .catch(function(error) {
                result = 'error: ' + error;
                callback();
            });     
        }
    };
}());

function searchMovies() {
    let query =  document.getElementById('searchinput').value;
    if (query) {
        location.href = "?controller=movies&action=search&search_query=" + query;
    }
}