# gem-site
Technical DevOps Assessment Test

This small test was created to evaluate the skill set and understanding of a devops candidate.

The environment requires the latest ubuntu docker image with the required packages to be installed

  * DOCKER
  * NGINX
  * GIT
  * PHP
  * MYSQL
  * VI
  
 The candidate is required to start the ubuntu image with port 80 exposed on the host and configure the above
 applications. The gem-site repository is then required to be pulled into /var/www
 
 A db.sql file is located in the gem-site repository which is required to be imported into the mysql database and 
 the correct user account permissions needs to be granted.
 
 The outcome is to load the web page presented by nginx which should display the PHP code and content from the mysql
 database.
