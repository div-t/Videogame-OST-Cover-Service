Videogame OST Cover Service
==

C:\Users\chsam\xampp\apache\conf\extra\httpd-vhosts.conf

```
<VirtualHost *:80>
    ServerAdmin ostCoverService@dummy-host.example.com
    DocumentRoot "C:/Users/chsam/xampp/htdocs/ostCoverService"
    ServerName ostcoverservice.org
    ErrorLog "logs/urlrewritedemo-error.log"
    CustomLog "logs/urlrewritedemo-access.log" common
    <Directory C:/Users/chsam/xampp/htdocs/ostCoverService>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

C:\Windows\System32\drivers\etc\hosts
>127.0.0.1	ostcoverservice.org