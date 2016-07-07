# Password Hashing

Gerar hash de senha é uma das considerações mais básicas de segurança que deve ser 
feita ao projetar qualquer aplicativo que aceita senhas dos usuários. Sem gerar hash, 
todas as senhas armazenadas em seu banco de dados da aplicação podem ser roubadas, 
e então imediatamente usada para comprometer não só a sua aplicação, mas também as 
contas de seus usuários em outros serviços, se eles não usarem senhas únicas.

Aplicando um algoritmo de hash para a senha de seus usuários antes de armazenar em 
seu banco de dados, dificulta um atacande determinar a senha original, enquanto 
ainda é possível de comparar o hash resultante para a senha original no futuro.

É importante observar, entretanto, que hash de senhas só protege de comprometer 
em seu armazenameto de dados, mas não necessariamente protege de serem interceptadas 
por um código malicioso injetado em sua própria aplicação.

# Por que são comuns funções de hash tais como md5() e sha1() inadequados para senhas?

Algoritmos de hash como MD5, SHA1 e SHA256 são projetados para serem muito rápidos e eficientes. 
Com técnicas modernas e equipamento de informática, tornou-se trivial de "força bruta" a saída desses algoritmos, a fim de determinar a entrada original.

Por causa da rapidez com que um computador moderno pode "inverter" esses algoritmos de hash, 
muitos profissionais de segurança sugerem fortemente contra a sua utilização para hash da senha.

# Password Hashing

PHP 5.5 fornece uma API de hash de senha nativo (Password Hashing) que lida de forma 
segura tanto gerando hash e verificando senhas de forma segura.

O objetivo principal dessa API é padronizar/facilitar o trabalho de crypt.

Com essa nova api, foram criadas quatro novas funções:

* [password_get_info](http://php.net/password_get_info)
* [password_hash](http://php.net/password_hash)
* [password_needs rehash](http://php.net/password_needs_rehash)
* [password_verify](http://php.net/password_verify)

```php
    // Usando as opções default
    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT) . "\n";
    // $2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a
    // Definindo o custo e o salt
    $options = [
        'cost' => 7,
        'salt' => 'BCryptRequires22Chrcts',
    ];
    echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options) . "\n";
    // $2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq
```




<br />

Referência: 
* http://php.net/manual/pt_BR/faq.passwords.php
* http://php.net/manual/pt_BR/book.password.php#book.password



