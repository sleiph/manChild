# manChild 👾

Um bichinho virtual feito com Laravel e mySQL. Assim, feito ele não está, na verdade até agora é só um clone [desse tutorial](https://laravel-news.com/your-first-laravel-application) do site da própria Laravel.

## Comandos

### Homestead

Eu tou usando [Homestead](https://laravel.com/docs/7.x/homestead) pra desenvolver o app, e é muito chato de ficar lembrando os comandos, então eu vou anotar tudo aqui, mais pra mim do que pra alguém que vá ler isso:

pra ligar a máquina virtual:
```shell
vagrant up
```

pra entrar na máquina virtual:
```shell
vagrant ssh
```

pra desligar a máquina virtual:
```shell
vagrant halt
```

O link de testes pro site é [manchild.test](http://manchild.test), [/submit](http://manchild.test/submit) pra postar (links???) por enquanto.

### mySQL

Antes de entrar no site tem que criar o banco de dados:
```
mysql -u root -p
mysql> create database manchild;
mysql> exit
```

e depois migrar as tabelas do projeto:
```php
php artisan migrate
```

### estilos

pra compilar o CSS:
```shell
npm install
```
```shell
npm run dev
```

## Fazer

-Bichinho
  - Alimentar
  - Educar
  - Dar banho
  - Brincar ([spookware](https://papercookies.itch.io/spookware-fullversion))
  - Cagar
  - Dormir
  - Morrer
