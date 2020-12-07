var keyword = document.getElementById('search_pegawai');
var result = document.getElementById('result');
keyword.addEventListener('keyup', function () {
    // deklarasi objext
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            result.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', '/penggajian/public/user/ajax/' + keyword.value, true);
    xhr.send();
});