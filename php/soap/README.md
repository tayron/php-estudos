#SOAP - NuSOAP

A extensão SOAP pode ser usado para escrever servidores SOAP e clientes. Ele suporta os subconjuntos de SOAP 1.1, SOAP 1.2 e especificações de WSDL 1.1.

Para se trabalhar com SOAP no PHP deve-se ter o módulo (php_soap) habilitado no php.ini, geralmente basgta descomentar o seguinte trecho de código: extension=php_soap.dll  

Para criação de servidor SOAP é comum a utilização da biblioteca NuSOAP que é uma bilioteca em PHP para contrução de webservice baseado em SOAP. A grande vantagem de se utilizar esta biblioteca é a facilidade que ela traz na hora de construir o servidor e o fato dela construir dinamicamente o wsdl.
