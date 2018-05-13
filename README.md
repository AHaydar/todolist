#Todo List project
This is a test project to learn a bit of php, where php, mysql and nginx are dockerized.
##Setup
1. Clone the repository and `cd` to it
2. Run `docker-compose up`
3. Update your host file to include the name of the webserver used in the config site.

    In your terminal: `sudo vi /etc/hosts`, and add the following to the hosts file:
`127.0.0.1  todo-list.local`