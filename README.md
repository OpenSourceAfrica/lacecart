LaceCart
========
A fast and all featured cart system for African. Solving our problems ourselves.

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
1. Fork the project by click on the fork button on https://github.com/OpenSourceAfrica to your git account.
2. Clone the project from your git account by running
```
git clone https://github.com/<your-git-account>/lacecart.git
```
3. Pull any new changes from the remote repo to make sure your local repo is up to date by running below command on your terminal
```
	git pull https://github.com/OpenSourceAfrica/lacecart.git master.
```
4. Create a branch for your project changes. You can create a branch from your master branch by running git checkout -b <branch-name> or you can create a branch independently and checkout into the branch using the following git command
```	
	git branch <branch-name>
	git checkout <branch-name>
```

5. Make changes to the project and run the following queries to push it to your remote project
```
	git add --all
	git commit -m "Your commit message"
	git push origin <branch-name>
```

6. Go to your github account and click on the project. You should see a green button that would ask you to Create a Pull request. Click on it and follow the prompt to create a request for the changes to be added to the main project.
7. Your changes would be reviewed by all the contributors and approved for merge into the master project.

Important: Please pull the latest changes in the master project repo into your local repo before making changes to avoid conflict merge on creating a PR. Always use the following command to pull new changes on the project.
```
git pull https://github.com/OpenSourceAfrica/lacecart.git master
```
