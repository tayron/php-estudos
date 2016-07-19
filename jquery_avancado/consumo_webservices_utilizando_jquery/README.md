# Consumo de Webservices utilizando JQuery

Biblioteca Jquery encapsula vários recursos e um deles é uma chamada Ajax através 
de uma interface simplificada. 

<br />

**Exemplo:**
```php
$.ajax({
    type: 'GET',
    url: 'carrega_bairro.php?por=cidade"',     
    success: function (data, textStatus, jqXHR) {                            
        console.info(data);
    },
    error: function(XMLHttpRequest, textStatus, errorThrown){
        console.error('Deu erro');
    }
});
```

<br />

**Exemplo de chamada Ajax sem utilizar Jquery:**
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

Veja que sem o Auxilio do JQuery temos uma implementação mais complexa e extensa, 
motivo pelo qual o uso dos recursos do Jquery ser tão difundido hoje. 

<br />

Abaixo 

**Outra implementação de consumo de webservice com Jquery**

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

<br />

Veja que fazer requisições Ajax usando Jquery é muito simples e através de seus callback
de retorno 'success' e 'error' podemos tratar de forma clara o retorno do webservice.


<br />

Referências: 

* http://www.w3schools.com/jquery/jquery_ref_ajax.asp
* http://api.jquery.com/jquery.ajax
