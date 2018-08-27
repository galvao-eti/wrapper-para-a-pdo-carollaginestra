# wrapper-para-a-pdo-inicio
Repositório inicial para o assignement "wrapper-para-a-pdo".

Um wrapper é uma ou mais classes que encapsulam a funcionalidade de outras classes/bibliotecas/componentes para facilitar o seu uso.

O trabalho consiste na criação de um wrapper para a PDO.

Instruções e dicas para o seu trabalho:

Deve possuir uma classe Config que constrói um objeto que possui os atributos: tipo, host, porta, base, usuario, senha e dsn;
Deve possuir uma classe Base que recebe em seu construtor um objeto Config por injeção de dependência. Esta classe deve possuir o atributo: objetoPDO e os métodos conectar, preparar e desconectar.
O método conectar deve atribuir ao atributo obetoPDO um objeto PDO;
O método preparar deve receber uma string SQL e retornar um objeto PDOStatement; Desconsiderar trabalhar com prepared statements para simplificar as coisas.
O método desconectar deve atribuir NULL para o atributo objetoPDO, causando portanto a desconexão com a base;

Evidentemente que o trabalho de vocês deve fazer um CRUD (Insert, Select, Update e Delete), comprovando o funcionamento. Podem fazer o CRUD em apenas uma tabela (categoria, por exemplo, a mais simples das duas) para facilitar a vida, sem problema.
