# Task Manager App

#### Developer notes

This application is configured with Laravel sail, which will allow the app and mysql data base to run in a docker container. To run this application do the following

* From the home directory run `./vendor/bin/sail up`
     * Note: `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'` creates an alias so this command can be run as `sail up`
* Once the container is running run `./vendor/bin/sail artisan migrate` to create the tasks table.
* Use `./vendor/bin/sail stop` if running in up -d (detached mode) otherwise ctrl + c will stop the container.
