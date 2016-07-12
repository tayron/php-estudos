#Especificação Técnica de Webservices

Especificação Técnica de Webservice é o documento criado com detalhes dos serviços disponíveis, seja ele em REST ou SOAP.
A forma mais comum de se criar documentação é a criação de um documento que possa ser compartilhado, sendo ele um arquivo 
ou uma página na internet com o objetivo de servir de documentação para o cliente.

A documentação contém detalhes sobre onde encontrar o serviço (endereço), como invoca-lo (exemplo de utilização), 
quais tipos de parametros  ele recebe e quais os retornos e tratamentos de erros são feitos.

A especificação é como um manual de utilização semelhante a um manual que encontramos quando compramos algum equipamento novo, 
pois seu objetivo é auxiliar o usuário o manuseio de seus recursos e como tirar maior proveito. Portanto vale lembrar que 
o foco da especificação técnica (manual) está no cliente que irá consumir o serviço.

Existem ferramentas ( como [Swagger](http://blog.caelum.com.br/modelando-apis-rest-com-swagger) ) que nos auxiliam 
na criação tanto do webservice como tambem na geração da especificação técnica.

# Webservice SOAP

Em um Web Service do estilo SOAP temos o WSDL, que funciona como uma documentação (para máquinas) do serviço, 
facilitando a geração automatizada dos clientes que vão consumi-lo. Além disso, podemos modelar nosso serviço escrevendo o 
WSDL, em uma abordagem conhecida como Contract-First.