# PROJETO-EVOLUTIVO-INDIVIDUAL

 Sistema de Academia — Projeto Evolutivo Individual

 Sobre o projeto

Este projeto foi desenvolvido como a entrega final do Projeto Evolutivo Individual, realizado durante o componente de Programação Orientada a Objetos.

O sistema representa uma academia e foi desenvolvido utilizando PHP e conceitos de Programação Orientada a Objetos (POO).

A aplicação permite representar alunos, professores, planos, matrículas, pagamentos e treinos.

---
Objetivo

O objetivo do projeto é desenvolver um sistema simples para representar o funcionamento de uma academia, aplicando na prática os conceitos estudados durante as aulas de Programação Orientada a Objetos.

---

 Funcionalidades

O sistema possui as seguintes funcionalidades:

- Cadastro e apresentação de alunos;
- Cadastro e apresentação de professores;
- Criação de planos de academia;
- Realização de matrículas;
- Controle do status de pagamentos;
- Criação de treinos;
- Cadastro de exercícios;
- Adição de exercícios aos treinos;
- Exibição das informações cadastradas.

---

💻 Tecnologias utilizadas

- PHP
- Programação Orientada a Objetos (POO)
- Git
- GitHub
- HTML básico

---

Conceitos de POO utilizados
Classes

O projeto utiliza diferentes classes para organizar as responsabilidades do sistema.

Exemplos:

- "Pessoa"
- "Aluno"
- "Professor"
- "Plano"
- "Matricula"
- "Pagamento"
- "Treino"
- "Exercicio"

Objetos

Os objetos são criados a partir das classes utilizando o comando "new".

Exemplo:

$aluno = new Aluno("Murilo", 17, "A001");

Atributos

As classes possuem atributos responsáveis por armazenar as informações dos objetos.

Exemplo:

private string $nome;
private int $idade;

Métodos

Os métodos representam ações que os objetos podem executar.

Exemplo:

public function apresentar(): void
{
    echo "Nome: " . $this->nome;
}

Encapsulamento

O projeto utiliza modificadores de acesso, principalmente "private", para proteger os atributos das classes.

O acesso aos dados é realizado através de métodos públicos, como getters e setters.

Construtor

Os construtores são utilizados para inicializar os objetos quando eles são criados.

Exemplo:

public function __construct(string $nome, int $idade)
{
    $this->nome = $nome;
    $this->idade = $idade;
}

Herança

As classes "Aluno" e "Professor" herdam características da classe "Pessoa".

Exemplo:

class Aluno extends Pessoa

class Professor extends Pessoa

Polimorfismo

O método "apresentar()" possui comportamentos específicos nas classes que representam diferentes tipos de pessoas.

Associação

Algumas classes trabalham em conjunto com outras.

Por exemplo, uma "Matricula" está relacionada a um "Aluno" e a um "Plano".

---

 Estrutura do projeto

projeto-individual/
│
├── .gitignore
├── README.md
├── link_repositorio.txt
├── index.php
│
├── Pessoa.php
├── Aluno.php
├── Professor.php
├── Plano.php
├── Matricula.php
├── Pagamento.php
├── Treino.php
└── Exercicio.php

---

 Como executar

1. Instalar o PHP

É necessário possuir um ambiente capaz de executar arquivos PHP.

Pode ser utilizado, por exemplo, um servidor local.

2. Baixar o projeto

Clone ou baixe o repositório do GitHub.

3. Abrir o projeto

Coloque a pasta do projeto no diretório utilizado pelo servidor PHP.

4. Executar

Abra o arquivo:

index.php

pelo servidor local.

---

 Versionamento

O projeto foi versionado utilizando Git e disponibilizado em um repositório no GitHub.

O arquivo "link_repositorio.txt" contém o endereço do repositório utilizado para a entrega.

---

 Autor

Nome: MURILO FURLAN
turma TI SABADO

Componente: Programação Orientada a Objetos

Ano: 2026

---

 Considerações finais

Este projeto representa a aplicação prática dos conceitos estudados durante o componente de Programação Orientada a Objetos, utilizando classes, objetos, atributos, métodos, encapsulamento, construtores, herança, polimorfismo e associação.

O desenvolvimento também permitiu praticar a organização de código, versionamento utilizando Git e publicação do projeto utilizando GitHub.
