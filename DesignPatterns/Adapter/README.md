# Adapter
Padrão estrutural que permite que objetos com interfaces incompatíveis colaborem entre si.

## Situação problema
Imagine que uma aplicação externa consuma dados da sua aplicação. Mas, para que seja corretamente consumido, os dados precisam estar em um formato específico.
Neste cenário, o padrão Adapter é responsável por encobrir a interface de um objeto e implementar a interface da tradução. 

## Aplicação desenvolvida:
- Certifique-se de que há ao menos duas classes com padrão incompatível: uma Serviço, que não é possível modificar, e uma Cliente, que precisa consumir o serviço incompatível. 
-  Declare a interface Cliente e descreva como o cliente se comunica com o serviço.
- Crie a classe adaptadora e faça ela seguir o serviço.
- Adicione um campo para a classe Adaptadora para armazenar a referência ao objeto de Serviço.
- Implemente os métodos da interface do Cliente na classe adaptadora
- O Clientes então usa a classe adaptadora para consumir o Serviço incompatível.


Diagrama:
![diagrama do Adapter](/Fixtures/img/adapter.png "Diagrama do Adapter")