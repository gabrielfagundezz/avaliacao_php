# Projeto: Sistema de Biblioteca Pessoal

## Tema Escolhido

O projeto é um sistema web de gerenciamento de uma biblioteca pessoal, onde os usuários podem se cadastrar para catalogar e organizar os livros que possuem, que já leram ou que desejam ler.

---

## Resumo do Funcionamento

O sistema foi desenvolvido utilizando PHP Orientado a Objetos e o padrão de conexão PDO. A interface foi estilizada com o framework Bootstrap.

Principais funcionalidades:

* **Autenticação de Usuários:** Sistema completo de cadastro e login com senhas criptografadas e gerenciamento de sessão.
* **Dashboard Pessoal:** Após o login, o usuário é direcionado a um painel onde pode ver e gerenciar apenas os seus próprios livros.
* **CRUD de Livros:**
    * **Create (Adicionar):** O usuário pode adicionar novos livros à sua lista, informando título, autor e status (Lido, Lendo, Quero Ler).
    * **Read (Visualizar):** Os livros do usuário são listados em uma tabela no dashboard.
    * **Delete (Excluir):** O usuário pode remover livros da sua lista.
* **Segurança:** O sistema foi desenvolvido com práticas de segurança para prevenir os ataques mais comuns, como SQL Injection (usando Prepared Statements do PDO) e XSS (usando `htmlspecialchars`).
* **Feedback ao Usuário:** O sistema exibe mensagens de sucesso e erro (Flash Messages) para ações como cadastro e login.

---

## Usuário/Senha de Teste

Você pode criar sua própria conta através da página de cadastro ou usar os seguintes dados para um teste rápido:

* **Usuário:** `teste@exemplo.com`
* **Senha:** `senha123`

---

## Passos para Instalação do Banco de Dados 


**Pré-requisitos:**
* Ter um ambiente de servidor local como XAMPP, WAMP ou MAMP instalado e com os módulos Apache e MySQL em execução.

Instalação:
1.  Acesse o phpMyAdmin pelo seu navegador (geralmente em `http://localhost/phpmyadmin`).
2.  Crie um novo banco de dados com o nome: `biblioteca_db`.
3.  Clique no banco de dados `biblioteca_db` que você acabou de criar no menu à esquerda para selecioná-lo.
4.  No menu superior, clique na aba **"Importar"**.
5.  Na seção "Arquivo a importar", clique no botão **"Escolher arquivo"** (ou "Choose File").
6.  Navegue até a pasta do projeto e selecione o arquivo `.sql` que você exportou (por exemplo, `biblioteca_db.sql`).
7.  Deixe as outras opções como estão e role até o final da página. Clique no botão **"Importar"** (ou "Executar").
8.  Aguarde a mensagem de sucesso. As tabelas `usuarios` e `livros` serão criadas automaticamente.
9.  Coloque os arquivos do projeto na pasta `htdocs` do seu XAMPP.
10. Verifique o arquivo `db.php` e certifique-se de que os dados de usuário (`root`) e senha (geralmente vazia `''`) estão corretos para o seu ambiente.