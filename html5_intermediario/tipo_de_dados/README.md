# Tipos de Dados

Html5 trouxe vários novos tipos de elementos que fazem com que possamos criar 
projetos cada vez mais robusto entregando cada vez mais usabilidade para o usuário.

Abaixo segue uma lista de novos elementos adicionados no HTML5

# Input type = Color

Permite ao usuário selecionar uma cor.

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Não     Sim
```

<br />

**Exemplo**
```php
<input type="color" />
```
<br />

Renderização esperada: 

![alt text](http://videos.web-03.net/artigos/Ricardo_Teixeira/HTML5_Intput_Types/HTML5_Intput_Types3.jpg "Seletor de cor")

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.color.html)

<br />

# Input type = Date

Cria um campo para que o usuário possa selecionar uma data.

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

**Exemplo**
```php
<input type="date" />
```
<br />

Renderização esperada: 

![alt text](http://videos.web-03.net/artigos/Ricardo_Teixeira/HTML5_Intput_Types/HTML5_Intput_Types1.jpg "Seletor de cor")

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.date.html)

<br />

# Input type = Datetime
Cria dois campos uma para data e outro da hora (com fuso horário), permitindo assim o usuário selecionar os dois juntos.

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Não         Sim     Sim
```

<br />

**Exemplo**
```php
<input type="datetime" />
```
<br />

Renderização esperada: 

![alt text](data:image/png;base64,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 "Seletor de datas")

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.datetime.html)

<br />

#Input type = Month
Serve para selecionar um mês e um ano.

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

**Exemplo**
```php
<input type="month" />
```
<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.month.html)

<br />

# Input type = DateTime-Local
Permite ao usuário selecionar uma hora e data (sem fuso).

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Não         Sim     Sim
```

<br />

**Exemplo**
```php
<input type="datetime-local" />
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.datetime-local.html)

<br />

# Input type = E-mail
É um campo de entrada onde deve ser inserido um endereço de e-mail.

<br />

**Exemplo**
```php
<input type="email" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Não     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.email.html)

<br />

# Input type = Number
É utilizado para campos que devem apenas conter números, podendo ter seus limites (maior e menor valor aceitos) definidos.

<br />

**Exemplo**
```php
<input type="number" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.number.html)

<br />

# Input type = Range
É utilizado para campos de entrada que devem receber um valor a partir de uma variação de números.

<br />

**Exemplo**
```php
<input type="range" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.range.html)

<br />

# Input type = Search
É usado para fazer pesquisas, mas na pratica se comporta como um campo de texto comum.

<br />

**Exemplo**
```php
<input type="search" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Não
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.search.html)

<br />

# Input type = Tel
Serve para números de telefone, mas até o momento nenhum dos principais navegadores oferece suporte a esse tipo.

<br />

**Exemplo**
```php
<input type="tel" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Não         Não     Não
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.tel.html)

<br />

#Input type = Time 
Permite ao usuário selecionar hora.

<br />

**Exemplo**
```php
<input type="time" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.time.html)

<br />

# Input type = Url
É usado para campos de entrada onde você recebee um endereço URL, o valor do campo é validado automaticamente quando o formulário é enviado.

<br />

**Exemplo**
```php
<input type="url" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Sim         Sim         Sim     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.url.html)

<br />

# Input type = Week
Para definir uma semana e um ano.

<br />

**Exemplo**
```php
<input type="week" />
```

<br />

Compatibilidade com navegadores:
```php
IE      Firefox     Chrome      Safari	Opera
Não     Não         Sim         Sim     Sim
```

<br />

Para mais detalhes acesse: 
[https://www.w3.org/TR/html-markup/input.email.html](https://www.w3.org/TR/html-markup/input.week.html)

<br />

Referências:

* http://www.devmedia.com.br/novos-tipos-de-input-da-html-5/27109