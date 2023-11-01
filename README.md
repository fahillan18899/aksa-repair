## About Wyasa SIMRS

wyasa SIMRS adalah software ...


## Tools Yang dibutuhkan

- xampp
- GIT
- code editor
- imagick xampp
- composer

## Cara Instalasi

- clone project
  `https://github.com/ilzamafif/wyasa-simrs.git`
- buka *GIT bash atau terminal* jalankan `cd wyasa-kalibrasi`
- jalankan `composer install --ignore-platform-req=ext-gd`
- copy file `.env.example` menjadi `.env`
- ubah konfigurasi database dan buat database di phpmyadmin
- jalankan `php artisan migrate`
- jalankan `php artisan key:generate`
- jalankan `php artisan serve`

## Konfigurasi QR Code
- install software imagick
- extract `php_imagick.dll` copy ke `htdocs/php/ext`
- tambahkan `extension=php_imagick` di php.ini
- tambahkan file file bin dengan extension `extension aplication`
## License

The software licensed under the [MIT license](https://opensource.org/licenses/MIT).
