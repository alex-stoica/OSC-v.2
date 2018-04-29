# OSC-v.2

**Step 0** Install Composer, Laravel etc. 

**Step 1** Create a database

**Step 2** Terminal: ```git clone https://github.com/alex-stoica/O-S-C-v.2.git``` and enter the directory ```cd OSC v.2```

**Step 3** Edit .env.example (edit `DB_DATABASE=homestead`, `DB_USERNAME=homestead`, `DB_PASSWORD=secret` for MySQL) and 
run ```mv .env.example.env``` on Terminal

**Step 4** Run on Terminal:

```composer install```

```php artisan key:generate```

```php artisan migrate:refresh --seed```

```php artisan serve```

**Step 5** Access the project at  http://localhost:8000

