# SarassA Fashion
An e-commerce website programmed for the SarassA Fashion's business. The website program  
is rightfully open-source for anybody to utilize and study. Please note that the website  
files and directories in the live website were re-configured for security reasons.  

# Technologies
- HTML5
- CSS3/MaterializeCSS
- Javascript/jQuery
- PHP 7.0
- MySQL on MariaDB

# Database Configuration
1. Clone or download this repository into an Apache web-server
2. Inside the db folder, export the database.sql file into your MySQL database 
3. Inside the db folder, open the dbconnection.php file and configure the variables to your database credentials
4. Now open a new web-browser and load the index.php webpage
5. Finished!

# Admin Panel configuration
1. Open the MySQL database and go to the "admin" table and change the variables for the first row's admin credentials  
2. Go to the admin.php page and configure the website to your liking

# Setting-up The File Access
1. Find or create a "php.ini" file in your Apache web-server
2. Add or edit these below scripts into the file  
`memory_limit = 32M`  
`upload_max_filesize = 24M`  
`post_max_size = 32M`  
3. Finished!
