# Singleton
Padrão criacional que permite que você acesse globalmente a instância de uma classe, sendo ela um ponto único de acesso. 
O padrão singleton garante que uma classe tenha apenas uma única instância, e isso é muito útil para classes que gerenciem acessos a recursos compartilhados (como arquivos e bancos de dados).
O padrão singleton garante também que esta única instância será disponibilizada globalmente dentro do projeto, protegendo-a de ser sobrescrita por outros códigos.

## Situação problema
Imagine que você queira registrar todos os logs do seu projeto em um único arquivo. 

## Aplicação desenvolvida:
- A classe Singleton declara o método estático getInstance que retorna a mesma instância de sua própria classe
- O construtor da singleton deve ser escondido do código do cliente. getInstance deve ser o único modo de obter o objeto singleton.


Diagrama:
![diagrama do Singleton](/Fixtures/img/singleton.png "Diagrama do Singleton")