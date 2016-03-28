LaceCart
========
A fast and all featured cart system for Africans. Solving our problems ourselves.

REQUIREMENTS
------------

The basic requirements for LaceCart v1.0 are as follows:

PHP 5.3.0+
Apache 2+, IIS 7+, or any web server with URL rewrite support

Supported Databases:
MySQL 5.0+

INSTALLATION AND SETUP
----------------------
1. Clone the project to your Apache root folder.
2. Create the database for the project. We are currently using "lacecart" as the name of the database. You can use any name you want.You would only need to change it int he config file (/config/config.php). Change your database username and password as well.
```
    'database' => [
        'adapter'    => 'mysql',
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => 'cynosure',
        'database'   => 'lacecart',
        'prefix'     => ''
    ]
```
3. Run the queries in the /data folder on the database created.
4. Check your project URL in the browser.

*The demo username is john.doe@lacecart.com and password: passme123



HOW TO CONTRIBUTE
-----------------
https://tree.taiga.io/project/akinyeleolubodun-lacecart/wiki/home