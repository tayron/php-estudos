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

Para consumo de webservice através do Javascript é comum a utilização do Jquery para 
consumo de informações de aplicações de terceiros, bastando informar a URL do webservice e 
em seguida passar os parametros necessários:

**Exemplo**

```php
$.ajax({
    type: 'GET',
    url: 'http://api.site.com.br/cliente', 
    success: function (data, textStatus, jqXHR) {                            
        console.info(data);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        console.error('Deu erro');
    }
});
```

O Exemplo acima simula uma chamada GET ao webservice http://api.site.com.br/cliente 
com o intuito de recuperar uma lista de clientes.


<br />

Referências: 

* http://www.w3schools.com/jquery/jquery_ref_ajax.asp
* http://api.jquery.com/jquery.ajax
