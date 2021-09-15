<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup
<p>Before following this setup guide, make sure you have installed the following:</p>
<ul>
    <li>WSL (Windows Subsystem for Linux)</li>
    <li>Docker Desktop (with enabled Ubuntu integration)</li>
    <li>Windows Terminal (optional, but recommended)</li>
    </ul>
<p>From the terminal, type <code>wsl</code> to engage the linux subsystem. After this, type <code>cd ~</code> to change directory to your user account's home folder. From here you can follow the guide below. <strong>MAKE SURE TO FOLLOW THE STEPS CORRECTLY TO AVOID ERRORS!</strong></p>

### Cloning and Running the Project
<ol>
    <li><p>Clone the project to your preferred folder:</p>
        <pre>git clone https://github.com/MALGRE-TOUT-TECH-TEAM/b2b-platform.git</pre>
    </li>
    <li>
        <p>Navigate to your newly created project:</p>
        <pre>cd b2b-platform</pre>
        <p>And open visual studio code:</p>
        <pre>code .</pre>
    </li>
    <li><p>Copy and paste the code below into windows terminal (will install sail and other dependencies):</p>
    <pre>
 docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
</pre>
    </li>
    <li><p>Write the following line to copy generate a new .env file from the .env.example file:</p>
        <pre>cp .env.example .env</pre>
        <p>This will make a copy of the .env.example file.</p>
        <strong>Make sure to not delete any of the .env files.</strong>
    </li>
    <li>
        <p>Open the new .env file and replace the following:</p> 
        <pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=b2b_annonce_platform
DB_USERNAME=root	
DB_PASSWORD=</pre>
        <p>with</p>
        <pre>
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=b2b_annonce_platform
DB_USERNAME=sail	
DB_PASSWORD=password</pre>
        <p><strong>Make sure to save the file before going to the next step.</strong></p>
    </li>
    <li><p>Run the project:</p> <pre>sail up -d</pre></li>
    <li><p>Now navigate to localhost in the browser, and generate the app encryption key, either by clicking the button or writing:</p>
    <pre>sail artisan key:generate</pre>
</li>
    <li><p>Lastly, migrate database tables into your databse by writing: <pre>sail artisan migrate</pre></p></li>
    <li><p>You can now access the view by going to https://localhost. You can also enable hot reload by running <code>sail npm run watch-poll</code> in the terminal. This will publish port 3000, which makes it accessible on <a href="https://localhost:3000">https://localhost:3000.</a></p></li>
</ol>

## Troubleshooting
<p>If get an "access denied" error while trying to migrate, you've probably accidentally used "sail up" before generating an env file. To fix this you should:</p>
<ol>
    <li>
        <p>Clear the config and application cache:<p>
        <pre>
sail artisan config:clear
sail artisan cache:clear</pre>
    </li>
    <li>
        <p>Stop the running container and remove existing volumes:</p>
        <pre>sail down -v</pre>
    </li>
    <li><p>Generate the .env file and make sure to update DB_HOST, DB_USERNAME and DB_password with the right information (can be found in the "Setup" guide). Then save the file and run:</p>
        <pre>sail up -d</pre>
    </li>
</ol>

### Deleting Project
<p>If you run into problems trying to delete the project (due to corrupted files), you can run the following command, after navigating to the folder where your project is located:</p>
<pre>rm -rf folder_name</pre>

## Policies
<p>The main branch in this repository is <strong>PROTECTED</strong>. You can only merge by making a new branch and then issuing a pull request. Pull requests has to be approved by two other code contributors.</p>
<p>Branches should have the following naming convention:</p>
<pre>name_of_functionality-name_of_branch_creator</pre>

## Useful Commands
Here is a list of useful commands, that can or have been used in this project.

### Migrations
<pre>
sail artisan migrate:reset //rolls back all application migrations
sail artisan migrate:refresh //rolls back all migrations and execute the migrate command. Its like recreating your entire database.
sail artisan migrate:fresh // drops all tables and execute <em>migrate</em> again</pre>

### Seeding
<p>For generating dummy data, we are using the factory design pattern. For this, a model, seeder and factory class is required, which can be generated like this:</p>
<pre>sail artisan make:model Advertisement -fs</pre>
<p>In the factory class, we are generating fake data by using the <a href="https://github.com/fzaninotto/Faker" target="_blank">faker library.</a></p>
<p>Children seeders like "AdvertisementSeeder" is being called from the parent "DatabaseSeeder". When the factory is setup to fill the proper keyvalue pairs, the following command can be run to seed the database:</p>
<pre>sail artisan db:seed // can be appended with --class=AdvertisementSeeder if you only want to run a specific seeder</pre>

### Scaffolding
<p>Create a new model class with the name "ModelName". Can be appended with -mfsc to generate a corresponding migration, factory, seeder and controller class:</p>
<pre>sail artisan make:model ModelName -mfsc | --all</pre>

<p>Create a new controller class with the name "TestController". All controller classes have to be suffixed with "Controller".</p>
<pre>sail artisan make:controller TestController</pre> <p>Use the --resource flag to make a controller with CRUD functions.</p>

<p>Create a new migration class named "create_test_table". Migrations are used to generate database tables.</p>
<pre>sail artisan make:migration create_test_table</pre>

<p>Create a new seeder class named "DataSeeder". Seeder classes are used to populate the database with data. For example, we are using a seeder to auto generate dummy data.</p>
<pre>sail artisan make:seeder DataSeeder</pre>

### UI
<p>To generate laravel UI components, you first have to download the library:</p>
<pre>sail composer require Laravel/ui</pre>
<p>In our project, we have used to the library to generate an authentication page with logic:</p>
<pre>sail artisan ui:auth</pre>

## Useful Links
<ul>
    <li>
        <a href="https://laravel.com/docs/8.x/blade">Blade</a>
    </li>
    <li>
        <a href="https://laravel.com/docs/8.x/migrations#available-column-types">Database Migrations Column Types</a>
    </li>
    <li>
        <a href="https://laravel.com/docs/7.x/eloquent">Eloquent - Database Queries From Model Class</a>
    </li>
</ul>

## About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
