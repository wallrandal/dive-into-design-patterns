# Prototype
Padrão criacional que permite criar objetos sem que o código dependa de suas classes.

## Situação problema
Imagine que você tenha um blog, e você deseja criar a funcionalidade de copiar post. Você deseja copiar a página contendo o título, o corpo do texto e o autor. Mas você não deseja copiar os comentários da publicação. 

## Aplicação desenvolvida:
- A interface abstrata Prototype garante que o método clone() existe na Prototypes concreta e nas suas subclasses.
- A Classe Prototype Concreta implementa clone(), que é responsável por copiar os dados do objeto original e lidar com as dependências recursivas.
- O cliente manda produzir uma cópia do objeto que segue a interface.
- O Registro de Protótipo (PrototypeRegistry) fornece o acesso aos protótipos de uso frequente.


Diagrama:
![diagrama do Prototype](/Fixtures/img/prototype.png "Diagrama do Prototype")