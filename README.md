<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

A starter kit based on Laravel Breeze which includes Inertia, React, Typescript, Tailwindcss, Shadcn/ui and Spatie.

The starter kit also implement basic usage of spatie (roles & permissions) and provide a web for client/user/customer and console/portal/dashboard for admin (CMS). The routes system is modified to implement domain (for client) & subdomain (for console) routing include authentication middleware for console routes.

> **Note:** check this `app\Providers\RouteServiceProvider.php` file for details and see the complete installation instructions to ensure you can run the starter kit correctly.

### Complete Installations

1. Clone this repository.

```bash
git clone https://github.com/yudayahya/laravel-inertia-react-shadcn-spatie.git
```

2. Change to file directory.

```bash
cd laravel-inertia-react-shadcn-spatie
```

3. Install the dependencies.

```bash
composer install
npm install
```

4. Create .env file from .env.example

```bash
cp .env.example .env
```

5. Configure .env variables according to your needs and fill `APP_URL` with domain (ex: `https://laravel-inertia-react-shadcn-spatie.test`) to make sure the domain & subdomain routing works well. If you're using `Windows` OS and [Laragon](https://laragon.org/) you can enable `Auto-create Virtual Hosts` (refer to https://laragon.org/docs/pretty-urls.html for the details). After you're able to use the `Laragon Pretty URL` create an empty folder with the folder name same as your project name and add `subdomain` prefix (ex: `console.laravel-inertia-react-shadcn-spatie`) inside `laragon\www` and restart your laragon, laragon will ask a prompt to add the folder name (subdomain like) to your `C:\Windows\System32\drivers\etc\hosts` file and create `Apache`/`Nginx` `.conf` file automatically, after that remove your new folder and restart laragon, laragon will remove the `Apache`/`Nginx` `.conf` file (we don't need this `.conf` file, we only need laragon to add your folder name to `hosts` file). And now you should able to access your domain and subdomain from your browser. But our laravel application is not ready yet, proceed to the next installation instructions.

    > **Note:** To setup (domain & subdomain availability) anything other than Windows with Laragon, you need to find and do it yourself.

6. Migrate the table

```bash
php artisan migrate
```

7. Running db seed

```bash
php artisan db:seed
```

8. Build the frontend bundle

```bash
npm run build
```

9. It's done, navigate to your domain URL in your browser (make sure your server/laragon is running). Use the super admin credentials to access the console page, you can find in `database\seeders\SuperAdminSeeder.php` seeder file.

### References

-   **[Laravel](https://laravel.com/)**
-   **[Inertia](https://inertiajs.com/)**
-   **[React](https://react.dev/)**
-   **[Breeze](https://github.com/laravel/breeze)**
-   **[Spatie](https://spatie.be/)**
-   **[Tailwindcss](https://tailwindcss.com/)**
-   **[Shadcn/ui](https://ui.shadcn.com/)**

### License

The Starter Kit is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
