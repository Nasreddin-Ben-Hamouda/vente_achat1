function showHint(str) {
    if (str.length == 0) {
        document.getElementById("block-search").innerHTML = "";
        return  ;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("block-search").innerHTML = '<ul>'+this.responseText+'</ul>';


            }
        };
        xmlhttp.open("GET", "http://localhost:82/vente_achat1/public/produits/rech/" + str, true);
        //xmlhttp.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
        xmlhttp.send();
    }
}