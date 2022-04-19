# Anytime Fitness Sportcentrum
Voorbreiding K1
File structure:
https://www.ictshore.com/php/php-project-structure/

# Configureer de vhosts
Je kan je XAMP zo configureren dat je meerdere PHP apps kan hosten op je locale PC. De 
apps kan je dan draaien op bijvoorbeeld: http://anytime.localhost/, http://app2.localhost/
Om dit zo te configureren moet je een aantal configuratie onderdelen bewerken.

## Windows
Zorg ervoor dat de Virtual host config file ingeladen wordt:
* Open Xammp
* Klik op Apache config -> Apache(httpd.conf)
* Zoek naar `Include conf/extra/httpd-vhosts.conf` en verwijder de `#` als deze vooraan deze regel aanwezig is.
* Voeg de onderstaande code toe aan de virtual host config: `C:\xampp\apache\conf\extra\httpd-vhosts.conf`
```
<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs"
ServerName localhost
</VirtualHost>

Listen 4001    
NameVirtualHost *:4001
<VirtualHost *:80 *:4001>
    DocumentRoot "C:/xampp/apps/anytime/htdocs"
    ServerName anytime.localhost
    <Directory "C:/xampp/apps/anytime/htdocs">
        Options Indexes FollowSymLinks ExecCGI Includes

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All

        #
        # Controls who can get stuff from this server.
        #
        Require all granted
    </Directory>
</VirtualHost>
```
* Restart Apache in de XAMP instance.
* Verplaats alle inhoud van de repository die je hebt gecloned naar: `C:/xampp/apps/anytime/htdocs`
* Open nu de `C:/xampp/apps/anytime/htdocs` in PHPStorm.

## MacOS
Zorg ervoor dat de Virtual host config file ingeladen wordt:
* Open `/Applications/XAMPP/etc/httpd.conf`
* Zoek naar `Include etc/extra/httpd-vhosts.conf` en verwijder de `#` als deze vooraan deze regel aanwezig is.
* Voeg de onderstaande code toe aan de virtual host config: `/Applications/XAMPP/etc/extra/httpd-vhosts.conf`
```
<VirtualHost *:80>
DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs/"
ServerName localhost
</VirtualHost>

Listen 4001    
NameVirtualHost *:4001
<VirtualHost *:80 *:4001>
    DocumentRoot "/Applications/XAMPP/xamppfiles/apps/anytime/htdocs"
    ServerName anytime.localhost
    <Directory "/Applications/XAMPP/xamppfiles/apps/anytime/htdocs">
        Options Indexes FollowSymLinks ExecCGI Includes

        # AllowOverride controls what directives may be placed in .htaccess files.
        # It can be "All", "None", or any combination of the keywords:
        #   Options FileInfo AuthConfig Limit
        #
        #AllowOverride None
        # since XAMPP 1.4:
        AllowOverride All

        #
        # Controls who can get stuff from this server.
        #
        Require all granted
    </Directory>
</VirtualHost>
```
* Restart Apache in de XAMP instance.
* Verplaats alle inhoud van de repository die je hebt gecloned naar: `/Applications/XAMPP/xamppfiles/apps/anytime/htdocs`
* Open nu de `/Applications/XAMPP/xamppfiles/apps/anytime/htdocs` in PHPStorm.

