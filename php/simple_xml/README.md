#SimpleXMLElement

***1) simplexml_load_string***

Interpreta uma script XML e o transforma em um objeto SimpleXMLElement

Referência: http://php.net/manual/pt_BR/function.simplexml-load-file.php



***2) simplexml_load_file***

Interpreta um arquivo XML e o transforma em um objeto SimpleXMLElement

Referência: http://php.net/manual/pt_BR/function.simplexml-load-string.php


Ambas funções retornam um objeto da classe SimpleXMLElement com propriedades contendo os dados do documento XML, ou FALSE em caso de falha. Também podem retornar um E_WARNING caso seja encontrado erro no XML.

Utilize a função libxml_use_internal_errors() para suprimir todos os erros XML e a função libxml_get_errors() para iterar sobre eles posteriormente.



