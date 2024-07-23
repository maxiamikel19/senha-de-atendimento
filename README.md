Mini-sistema de SENHA de atendimento

O mini sistema de SENHA tem as funcionalidades para gerenciar senhas de atendimento.
Com as siguintes opções:
  + GERAR SENHA
  + ATENDIMENTO
  + LIBERAR SENHA
    +GERER SENHA: chama a interface de geração de senha onde é possível criar 3 tipos de senhas:
        1- CONVENCIONAL
        2- PREFERENCIAL
        3- URGENTE
    +ATENDIMENTO: Despliegue a interface para o atendimento (chamada) as sehnas previamente criadad pelos usuarios. As senhas são dos tipos mensionados anteriormente.
    +LIBERAR SENHA: Chama a interface que permite ao (s) atendentes liberar as senhas previamente chamadas.

COMO FUNCIONA:
O usuário gera uma senha conformme a seu necessidade qpe pode ser uma senha convencional, ou uma senha preferencial ou uma senha urgente. Conforme ao tipo 
da senha gerada, o sistema manter uma caracteristica unnica para cada de forma que o atendente pode difereniar cual o guau de urgência de cada caso. Nesse contexto,
são identificado cada tipo assim: Cor verde para senha convencional, amarelo para senha preferencial e vermelho para senha urgente.
O sistema permite As senhas são listadas na tela de atendimento conforme que foram criadas. A chamada das senhas por default são pela ordem de criada, mas o sistema
permite a chamada de maneira especifica a uma detarminada senha. Após a chamada de uma senha, ela é automaticamente remivida da lista de atendimento.
Para voltar a chamar a secuência de senhas do sistema, elas tem que ser liberadas no sistema porque a cada chamada se atualiza o status da senha de forma de não permitir uma senha ser chamada 2 vezes.

TECNOLOGIAS:
  + PHP
  + HTML
  + CSS
  + MYSQL
  + JAVASCRIPT

USO:
+ Baixar o projeto do repositorio
+ Copiar a pasta atendimento no seu servidor
    -No windows: Se usar XAMPP, na paste htdocs
    -No Ubunto /var/www/html
+ Criar o DB com o nome de atendimento
+ Na pasta db do projeto esta o backup do DB, faça a importação tas tabelas.
+ No arquivo conexao.php, configure o usuario e a senha conforme necessita.
+ Abre o projeto no seu navegador como por exemplo: http://localhost/atendimento

DEMONSTRAÇÂO:

Home (GERAR SENHA) : http://localhost/atendimento/

![image](https://github.com/user-attachments/assets/ff322389-f708-4c9d-af90-e8803d0ec709)

======================================
ATENDIMENTO : http://localhost/atendimento/atendimento.php

![image](https://github.com/user-attachments/assets/4bc3931b-61ca-4366-a32c-03ac6d69600b)

===============================
LIBERAR SENHA: http://localhost/atendimento/liberar_sehna.php

![image](https://github.com/user-attachments/assets/f53af165-c1d3-4fc0-be93-5cb00c617c7b)


====================================
DB: http://localhost/phpmyadmin/index.php?route=/database/export&db=atendimento

![image](https://github.com/user-attachments/assets/92e98a48-8903-4619-9104-e1def0e34e6b)


