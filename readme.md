# Shopcheckout

This project has been used to test developer's knowledge around Laravel. It servers as a shop checkout system around three compoments user, product and transaction. 

## Basic requirements:

    Use the laravel framework to implement the project
    Use an ORM such as eloquent, doctrine etc.
    Create a docker container that runs the project
    Couple of basic unit tests
    At least a single controller test
    Include a readme.md on how to setup the project
    Inlcude an improvements.md on what you could do better if you had more time
    Upload the project to github and email us a link to your solution/github page

## Checkout system requirements:

    Step 1: Shopping cart (required)

    You are building a checkout system for a shop which only sells apples and oranges.
    Apples cost 70cents and oranges cost 35cents.
    Build a checkout system which takes a list of items scanned at the till and outputs the total cost
    For example: [ Apple, Apple, Orange, Apple ] => $2.45
    Make reasonable assumptions about the inputs to your solution; for example, many candidates take a list of strings as input

    Step 2: Simple offers (bonus question)

    The shop decides to introduce two new offers:

    buy one, get one free on Apples
    3 for the price of 2 on Oranges
    Update your checkout functions accordingly

# Deploy

The project is writtern in PHP. To checkout, deploy and run the project you will need to install [git], [docker] and [MySQL]. Default database content has been provided as default.sql (contains all required fruits, apple orange with the correct price), otherwise, manually initial the testing data through running factory from artisan tinker.

## Checkout

Checkout the project:

```bash
    git clone https://github.com/Alvin1234567/Laravel-shopcheckout
```

## Database prepartion

Create a database with name "laravel_shopcheckout" and "laravel_shopcheckout_test" , get the database IP and PORT for later .env file change.

## Deploy

Run the following to deploy the project:
```bash
    cd Laravel-shopcheckout/
    sudo docker build -t checkout .
    docker run -p 7088:80 -d checkout
```

Check the current running contrainer:
```bash
    docker ps -a
```

Access the proejct container throught "CONTAINER ID":
```bash
    docker exec -it {CONTAINER ID} bash
```

Initiate the project within the container:
```bash
    cd /var/www/
    cp shopcheckout/.env.example  shopcheckout/.env
```

Modify shopcheckout/.env for the current database connections:
```bash
    DB_CONNECTION=mysql
    DB_HOST=IP
    DB_PORT=PORT
    DB_DATABASE=laravel_shopcheckout
    DB_USERNAME={}
    DB_PASSWORD={}

    TEST_DB_HOST=IP
    TEST_DB_PORT=PORT
    TEST_DB_DATABASE=laravel_shopcheckout_test
    TEST_DB_USERNAME={}
    TEST_DB_PASSWORD={}
```

Initiate data:
```bash
    php artisan migrate:install
    php artisan migrate
```
Generate testing data through running factory from artisan tinker:
```bash
    php artisan tinker
    factory(App\User::class, 20)->create();
    factory(App\Product::class, 30)->create();
    factory(App\Transaction::class, 10)->create();
    exit
```

Exit the contrainer:
```bash
    exit
```

# Run

To access from the host [http://localhost:7088](http://localhost:7088)
