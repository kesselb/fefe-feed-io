## Minimal working example to reproduce a feed-io issue with blog.fefe.de

1) Setup

```
composer install
```

2) Ensure that feed returns last modified

```
curl -I http://blog.fefe.de/rss.xml?html
HTTP/1.1 200 Here you go
Server: Gatling/0.16
Content-Type: text/xml; charset=utf-8
Content-Length: 11276
Last-Modified: Sat, 04 Jan 2020 10:49:42 GMT
Date: Sat, 04 Jan 2020 14:38:42 GMT
```

3) Ensure that feed accepts if-modified-since


```
curl -I --header "If-Modified-Since: Sat, 04 Jan 2020 10:49:42 GMT" http://blog.fefe.de/rss.xml?html
HTTP/1.1 304 Nix Neues
```

4) Run test script

```
php test.php 
Fefes Blog
DateTime Object
(
    [date] => 1970-01-01 00:00:00.000000
    [timezone_type] => 1
    [timezone] => +00:00
)
```