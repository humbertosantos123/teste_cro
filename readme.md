##Comandos para instalação (laravel + TESTE_CRO)

- renomear file env.example -> env e configure o banco de dados e servidor smtp para recuperação de senha

comandos e comentários

composer install -> instalação das principais dependências do laravel

npm install -> utilizar o webpack.mix.js (laravel-mix) agrupar arquivos js e style (scss, less, css)

bower install -> componentes extras para complementar o código (jquery, fontawesome, mask)

obs: Eu sei que pelo pachage.json eu posso instalar esses componentes, coloquei para demonstração

npm run dev -> para agrupar os arquivos js do webpack e colocar na pasta public   

php artisan key:generate -> gerar chave valida do laravel

php artisan migrate -> criar tabelas no banco de dados

php artisan db:seed -> alimentar o banco com alguns registros

php artisan serve -> rodar aplicação


#Arquivos modificados

- app.php -> timezone -> para gravar hora no formato brasileiro, locale para pegar a pasta de tradução de erros e validações 

- Criei um controller para cada entidade e o auth foi feito pelo comando php artisan make:auth

- AddressController
Index -> fiz a consulta usando eloquent para buscar os endereços do usuário logado e por ordem de atualização do registro, para mostrar como endereço principal o registro mais atual.

- Todos os controllers
Nas funções de update e register coloquei o validate request para analisar os erros vindos dos formulários das views.

- Database 
Em todas as entidades eu criei um model e um seeder, para que o usuário posso visualizar algumas informações logo de cara.

- Timestamps para criação de registros de alteração (created_at, updated_at)
Sofdeletes para que o registro nao seja deletado da base e so marcado como deleted_at (caso queira basta utilizar o force delete no controller)

- Entidades com relacionamentos criei funções belongsTo e hasmany para todos os casos necessários


#telas 
- Adicionei novos campos para criar um novo usuário, com mascara de cpf e data de nascimento
- Criar filme coloquei campo adicional para link de imagem do filme e o rating utilizei o fontawesome para exibir as estrelas
- Tela de endereços mostra o endereço do usuário, e em destaque(bg-primary) o endereço principal de acordo com seu updated_at
- Tela de usuarios mostra todos os usuários e seus respectivos endereços.
- Tela de cadastro do usuario o campo cep pesquisa automaticamente a cidade e estado através do js com acesso a api do correios 
   
   #rotas 
   - fiz todas as rotas agrupadas e para as rotas put e post coloquei o @csrf de seguranção de requisição do laravel


<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
