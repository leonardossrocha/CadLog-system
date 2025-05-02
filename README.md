# Sistema de cadastro de usuários

Sistema Web de Cadastro e Gerenciamento de Usuários, com suporte a múltiplos perfis de acesso. Desenvolvido com o padrão de arquitetura MVC para fins educacionais e demonstrações em sala de aula.

## ✨ Funcionalidades

- Cadastro de novos usuários
- Login com autenticação por perfil (admin, gestor, colaborador)
- Edição e exclusão de usuários cadastrados
- Controle de sessão
- Interface simples e objetiva

## 🧱 Arquitetura

Este projeto segue o padrão **MVC** (Model-View-Controller), com a seguinte divisão de responsabilidades:

- **Model**: Responsável pela comunicação com o banco de dados.
- **View**: Responsável pela interface do usuário (HTML/CSS).
- **Controller**: Responsável pela lógica de negócio e intermediação entre Model e View.

## 🧑‍💻 Perfis de Usuário

- `Admin`: Acesso total ao sistema, incluindo gerenciamento de usuários.
- `Gestor`: Acesso parcial com foco em relatórios e cadastros.
- `Colaborador`: Acesso restrito a funcionalidades básicas.

## 🗂️ Estrutura de Diretórios

```bash
CadLog-system/
│
├── config/             # Arquivo de configuração de conexão com o banco de dados
├── controller/         # Arquivos de controle (lógica da aplicação)
├── model/              # Classes e funções de acesso ao banco de dados
├── view/               # Arquivos de interface (formulários, páginas, etc)
├── public/             # Assets públicos (CSS, JS, imagens)
├── auth.php            # Verificar a autenticação do usuário na aplicação
├── index.php           # Roteador principal (ponto de entrada da aplicação)
├── logout.php          # Responsável por deslogar o usuário da aplicação
├── routes.php          # Responsável por mapear e direcionar usuário na aplicação
└── README.md           # Documentação do projeto  

```

## 🛠️ Tecnologias Utilizadas

- PHP (versão compatível com seu servidor)
- HTML5 / CSS3
- MySQL
- Bootstrap (se estiver sendo utilizado no projeto)
- JavaScript (opcional, dependendo da interação)

## 🧪 Banco de Dados

#### usuarios

- id (PK)
- nome
- email
- senha (criptografada)
- perfil (admin, gestor, colaborador)

Script SQL para criação da tabela está disponível no arquivo [database.sql](database.sql).


## Como executar

1 - Clone este repositório:

```bash
git clone https://github.com/seu-usuario/CadLog-system.git
```

2 - Importe o banco de dados no seu MySQL (verifique o arquivo .sql, se disponível).
3 - Configure o acesso ao banco de dados no arquivo /config/db.php.
4 - Execute o index.php em um servidor local (como XAMPP, WAMP, Laragon, etc).
5 - Acesse pelo navegador: http://localhost/CadLog-system/


## 📚 Finalidade

Este projeto foi desenvolvido com fins educacionais para demonstração de boas práticas no desenvolvimento de aplicações PHP utilizando o padrão MVC, autenticação de usuários e gestão de perfis de acesso.

## 👨‍🏫 Autor
Leonardo Rocha — Professor de cursos técnicos e superiores na área de TI  
[LinkedIn](https://www.linkedin.com/in/leonardossrocha) | [GitHub](https://github.com/leonardossrocha/)