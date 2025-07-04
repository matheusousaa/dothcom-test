# Teste feito para processo seletivo para Dothcom

Este é um pequeno projeto em PHP que consome uma API pública (`https://aj.dev.br/f`) e retorna:

- Todos os usuários criados **hoje**
- A **quantidade** de usuários criados hoje

A API responde com dados em JSON, incluindo campos como `id`, `name`, `is_admin` e `created_at`.

---

## Requisitos

- PHP 8.0+
- [Composer](https://getcomposer.org/) instalado

---

## Instalação

Clone o repositório e instale as dependências:

```bash
git clone https://github.com/seu-usuario/users-today-counter.git
cd users-today-counter
composer install
