# Bridge
Padrão estrutural que permite que você divida uma classe grande em classes menores, divididas entre classes de abstração e classes de implementação.

Abastração, é a camada de alto nível que não faz nenhum trabalho por conta própria. Ela deve somente delegar o trabalho para a camada de implementação.

Implementação, também conhecido como plataforma, é a camada que, a partir da camada de abstração, executa o trabalho de baixo nível. 

## Situação problema
Imagine que você tenha uma plataforma composta por back e front end. As combinações entre os dois lados do sistema podem ser inúmeras, uma vez que o front-end pode ser mobile, web, etc. E o o back-end pode ser API, SDK, etc.
Com o padrão de projeto Bridge, a aplicação ficaria dividida em:
- Implementação: a camada back-end
- Bridge: framework que faz a ponte entre as camadas
- Abstração: a camada de front-end

## Aplicação desenvolvida:



Diagrama:
![diagrama do Bridge](/Fixtures/img/bridge.png "Diagrama do Bridge")