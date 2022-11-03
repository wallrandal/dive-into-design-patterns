# Factory Method

Fornece uma interface para criar objetos em uma super classe, permitindo também que subclasses alterem o tipo de objetos criados.

## Situação problema
Imagine que exista um programa que lê livros. Você, o cliente, tem uma biblioteca com dois tipos de mídia: os livros físicos que se encontram na estante, e os livros digitais que se encontram em um e-book. Os passos para a leitura do livro são os mesmos independente da mídia escolhida. Os passos para leitura são representados por read().

## Aplicação desenvolvida:
- Os produtos concretos Shelf e Digital são criados.
- Ambos obedecem MediaInterface, e embora cada um possua sua regra de negócio própria, ambos possuem o método público openAndRead($book).
- Library faz a mediação entre as classes concretas: independente do tipo de mídia escolhida, Library executa o openAndRead($book).   
- Client representa a classe que executa o processo de leitura do livro.
- Client utiliza Library, indicando qual mídia será utilizada.
- Library utiliza uma interface genérica e executa a acão openAndRead.
- O metodo openAndRead é obedecido pelas duas mídias, então independente de qual Mídia é chamada, o processo irá funcionar.


Diagrama:
![diagrama do factory method](/Fixtures/img/factory.png "Diagrama do Factory Method")