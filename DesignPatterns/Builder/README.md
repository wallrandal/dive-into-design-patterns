# Builder
Padrão que permite construir objetos passo a passo.

## Situação problema
Imgaine que você queira construir uma boneca. A base de construção de uma boneca contém passos simples: dois braços, duas pernas, um torso e uma cabeça. Mas uma boneca possui muitas variantes: a boneca de trabalho veste-se formalmente, usa uma mala e cabelo preso. A boneca esporte usa roupas de academia e usa um skate e cabelo solto, etc.

O padrão Builder permite que você construa os objetos em uma série de etapas, não sendo necessário chamar todas as etapas. Você só chama as etapas necessárias para a construção de um tipo específico de objeto.

## Aplicação desenvolvida:
- A interface Builder declara os métodos comuns a todos os tipos de builders
- Os builders concretos proporcionam as diferentes implementações das etapas de construção, podendo ou não adicionar etapas além dos métodos declarados na interface builder.
-  Os produtos são os objetos resultantes de cada builder concreto.
- A classe Diretor define a ordem de construção das etapas.
- O Cliente associa um objeto builder ao diretor. O Diretor então usa o objeto builder para executar os passos de construção do produto.


Diagrama:
![diagrama do Builder](/Fixtures/img/builder.png "Diagrama do Builder")