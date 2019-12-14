## Example for how pipeline work and model observer

demonstrate laravel example for model observer and pipeline for filter the request

## Installation

```bash
git clone https://github.com/nileshmailbook/DemoPipeline.git
```

create .env file with database credentials.

run the migration

```bash
php artisan migrate --seed
```

## Usage

start your developement server

=> view product(filteration implement using pipeline)

http://localhost:8000/products

=> create product (create new product and model observer activate calculate tax and product name case)

http://localhost:8000/product/create