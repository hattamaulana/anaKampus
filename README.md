<center>
  <h1>
    AnaKampus
  </h1>
</center>

## Requirements
* PHP 5.6+
* Apache2
* MariaDB
* Composer
  
## Getting Started
If you want to try this project you can follow in below :
```bash
$ git clone 
```

Run Composer autoload
```bash
$ composer dump-autoload -o
```
create link or copy this directory project to your /var/www/html directory, if you using windows copy at folder htdocs
```bash
$ sudo ln -ds `pwd`/anakampus /var/www/html/
```

Maybe if you want to access this project in your local computer using custom domain.
```bash
$ sudo nano /etc/hosts
```
Add your local address and custom domain
```sh
127.0.0.1       localhost
127.0.0.2       anakampus.id
```
Add extra configuration in your apache2 server.
```bash
$ sudo vi /etc/apache2/sites-available/000-default.conf
```
Add script below :
```sh
<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        ServerName anakampus.id
        ServerAdmin anakampus@anakampus.id
        DocumentRoot /var/www/anakampus.id

        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>
```
restart your web server
```bash
$ sudo /etc/init.d/apache2 restart
```
Open your browser and type http://anakampus.id