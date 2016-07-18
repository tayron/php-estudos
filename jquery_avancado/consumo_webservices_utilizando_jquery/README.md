# Consumo de Webservices utilizando JQuery

Biblioteca Jquery encapsula vários recursos e um deles é uma chamada Ajax através 
de uma interface simplificada. 

```php
$.ajax({
    type: 'POST',
    url: 'carrega_bairro.php?por=cidade', 
    data: {estados : listaEstados},
    success: function (data, textStatus, jqXHR) {                            
        console.info(data);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        console.error('Deu erro');
    }
});
```

<br />

Fazendo chamada Ajax sem utilizar Jquery
```php
var xmlHttp = GetXmlHttpObject();
function carregarBairro() {
    if (xmlHttp == null) {
        alert ("Seu browser não suporta AJAX!");
        return;
    }else{
        var url = "carrega_bairro.php?por=cidade";
        xmlHttp.onreadystatechange = stateChanged;
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
    }
}
 
function stateChanged() {
    if (xmlHttp.readyState==1 || xmlHttp.readyState==2 || xmlHttp.readyState==3) {
        document.getElementById("textoAjax").innerHTML="Carregando...";
    }
    if (xmlHttp.readyState==4) {
        console.info(xmlHttp.responseText);
    }
}
 
function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer
        try {
        xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

carregarBairro();

```

Como podemos ver acima, Jquery facilita muito o trabalho no dia à dia.
<br />

Referências: 

* https://pt.wikipedia.org/wiki/JQuery