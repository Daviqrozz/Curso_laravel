# 📦 Laravel CRUD com AdminLTE & Laravel Fortify

Este é um projeto de exemplo construído com [Laravel](https://laravel.com/), focado em operações **CRUD (Create, Read, Update, Delete)**, utilizando o **AdminLTE** como template de painel administrativo e **Laravel Fortify** para autenticação segura.

---

## 🚀 Tecnologias Utilizadas

- [Laravel 10.x](https://laravel.com/docs)
- [AdminLTE 3](https://adminlte.io/)
- [Laravel Fortify](https://laravel.com/docs/fortify)
- [Bootstrap 4](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [Font Awesome](https://fontawesome.com/)

---

## 🧰 Funcionalidades

- 🛡️ Autenticação personalizada com Laravel Fortify
- 🎨 Painel administrativo com AdminLTE
- 📋 CRUD completo de [nome da entidade principal, ex: usuários, produtos, tarefas...]
- 📁 Organização de rotas, controllers, models e views
- ⚙️ Middleware para proteção de rotas
- 🧪 Validações com feedback ao usuário

---

## 📂 Estrutura do Projeto

```bash
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Requests/
│   ├── Models/
│
├── resources/
│   └── views/
│       ├── adminlte/
│       ├── auth/
│       └── [crud_entidade]/
│
├── routes/
│   └── web.php
│
├── public/
│   └── assets/ (AdminLTE)
│
├── database/
│   └── migrations/
