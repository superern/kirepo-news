<p align="center"><a href="https://kirepu.lu" target="_blank"><img src="https://kirepo.lu/img/kirepo-white-bg.f3cde4ea.svg" width="400"></a></p>

<p align="center">
<a href="https://www.huawei.com"><img src="https://kirepo.lu/img/huawei.fc950ca9.png" alt="Huawei" width="45" style="background: white"></a>
<a href="https://servipay.eu"><img src="https://kirepo.lu/img/servipay.1871e891.png" alt="ServiPay" width="50"></a>
<a href="https://worldline.com"><img src="https://kirepo.lu/img/worldline.3e4b6f40.jpg" alt="Worldline" width="50"></a>
<a href="https://www.lg.com"><img src="https://kirepo.lu/img/lg.efefe1a6.jpg" alt="LG" width="50"></a>
<a href="https://www.luxinnovation.lu"><img src="https://kirepo.lu/img/fit-4-digital.6a1ea578.png" alt="FIT4 Digital" width="50" style="background: white"></a>
</p>

## KIREPO NEWS API
## Requirements

In order to run this project locally, you need the following:

- node
- npm or yarn
- php (for windows: best to use <a href="https://laragon.org/download/index.html">Laragon</a>)
- make sure to enable **extensions**:
    - `pdo_sql`
    - `sqlite3`
        - we will be using sqlite

    
## Commands

Assuming project already cloned

- `composer install`
- `php artisan migrate --seed`
- When using Windows
    - start your Laragon (accessible via http://projectname.test:80)

Voila! Access your news APIs now.

## URIs

- GET `/api/news`
- POST `/api/news`
- UPDATE `/api/news`
- DELETE `/api/news`


### Premium Partners

- **[Huawei](www.huawei.com)**
- **[ServiPay](https://servipay.eu)**
- **[Worldline](https://worldline.com)**
- **[LG](https://www.lg.com)**
- **[FIT4 Digital](https://www.luxinnovation.lu)**

## Contributing

Thank you **superern** for considering contributing to the Kirepo News API!

## Code of Conduct

In order to ensure that the **Kirepo** community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Kirepo News API, please send an e-mail to Taylor Otwell via [info@kirepo.lu](mailto:info@kirepo.lu). All security vulnerabilities will be promptly addressed.

## License

The Kirepo News API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
