# Exceptions

O PHP 5 possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.

O objeto lançado precisa ser uma instância da classe Exception ou uma subclasse de Exception. Tentar lançar um objeto sem essa ascendência resultará em um erro fatal.



Em resumo uma exceção é um recurso para se tomar decisão, tratar fluxo, delegar mensagens de erros para quem for de responsabilidade trata-las.

Referência: http://php.net/manual/pt_BR/language.exceptions.php
