<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://en.uit.edu.vn/sites/vi/files/banner_en.png" alt="@onepiecehung"/>
    </a>
</p>

<hr> 

## PHP Sharing images 
[![js-standard-style](https://img.shields.io/badge/Build-1906.19-brightgreen.svg?style=flat)](https://github.com/feross/standard)

<hr>

# Setup 

1. Install <b>Xampp</b> or something else like that <a href="https://www.apachefriends.org">Download xampp</a>
2. Open port in <b>Xampp</b> *8886
3. Find and edit line **(create VirtualHost to your PJ)**

```
<Directory />
    AllowOverride All
    Options  All
    Order allow,deny
    Allow from all
</Directory>
```

<p style="text-color:red">
    > And add line 
</p>


```
<VirtualHost *:8886>
DocumentRoot "< **Path to your project** >"
ServerName 3raw.cc
</VirtualHost>
```

> #### You can see: <a href="https://paste.ofcode.org/Hdv2ueBu2KaYmmFzWZDg7J"><b>Example</b></a>

## How to installation

```
$ git clone https://github.com/onepiecehung/php-images.git
```

```python
import file `phpimages.sql` to your database
```

## Config file _config.php_

```python
`../includes/config.php`
```

## Done

```python
Go to: `localhost:8886` 
```
