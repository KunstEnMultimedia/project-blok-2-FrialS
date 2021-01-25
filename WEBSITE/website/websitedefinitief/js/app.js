var allcookies = decodeURIComponent(document.cookie);
var array = allcookies.split(";");
var btnlikes = document.querySelectorAll('.favorite');


btnlikes.forEach(element => {
    element.addEventListener('click', function (ev) {
        toggleLike(this.dataset.id);
        console.log(this.dataset.id);
    });
});


function toggleLike(id) {
    id = id.toString();
    var cookies = document.cookie.split(';');

    var arrFav = [];
    var favs = getCookie('favorites');
    if (favs.length > 0) {
        arrFav = favs.split(',');
    } else {
        document.cookie = 'favorites=' + id;
    }
    var pos = arrFav.indexOf(id);
    if (pos >= 0) {
        arrFav.splice(pos, 1);
    } else {
        arrFav.push(id);
    }
    document.cookie = 'favorites=' + arrFav.join(',');
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}