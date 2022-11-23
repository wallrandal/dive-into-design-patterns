# Abstract Factory
Padrão que permite a criação de família de objetos relacionados sem precisar especificar classes concretas.

## Situação problema
Imagine que a loja Sephora crie kits de maquiagem específicos para o inverno e para o verão. Cada kit contém um batom e uma paleta de sombras específico para a estação. Em bora o batom de inverno seja um objeto parecido com o batom de verão, cada variante do produto é utilizada em um kit diferente. O cliente não especifica as características do batom ou da paleta, ele só está interessado se o kit é de verão ou inverno.

## Aplicação desenvolvida:
- Declaro as interfaces para cada produto distinto da família de produtos
- A partir das interfaces, é possível criar todas as variantes concretas necessárias
- Declaro uma interface fábrica abstrata que declara todos os métodos necessarios para a criação de uma família de objetos
- A partir da interface acima, crio as fábricas concretas que implementam os métodos dos produtos concretos para a criação de cada variante. 


Diagrama:
![diagrama do abstract factory](/Fixtures/img/abstract.png "Diagrama do Abstract Factory")