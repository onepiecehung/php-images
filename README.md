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

```python
Account for test:
└── User normal/
    ├── User 1/ => (yourdomain.com/)
    │     ├── ID: admin@admin.com
    │     └── Password: 1
    ├── User 2 to 8 (x between 2 to 8)
    │     ├── ID: admin[x]@admin.com
    │     └── Password: 1
    └── User admin/ => (yourdomain.com/admin)
          ├── ID: admin@admin.com
          └── Password: admin
```

## List function

```python
root/
└── Login and regsiter/
      ├── Search (for title or decription)
      ├── Login
      └── Regsiter
```

```python
User not login/
└──Upload/
      ├── Reaction
      ├── Comments (login with FB, GG, TW, etc.)
      └── Share (FB, TW, etc )
```

```python
User login/
└── User normal/
    ├── image/
    │   ├── Reaction
    │   ├── Comments (login with FB, GG, TW, etc.)
    │   ├── Share (FB, TW, etc )
    │   ├── Edit image (Title, Description)
    │   ├── Delete Image
    │   ├── Upload image
    │   └── Download
    └── Manage/
        ├── Change password
        ├── Change avatar
        ├── Photo library
        ├── Photo management
        └── Mesenage
```

```python
User login/
└── User admin/
    ├── image/
    │   ├── Photo management
    │   ├── Delete comments (login with FB, GG, TW, etc.)
    │   ├── Edit image (Title, Description)
    │   ├── Delete Image
    │   ├── Restore image
    │   └── Download
    ├── User/
    │   ├── Add user
    │   ├── User management.
    │   ├── Ban/Delete user
    │   ├── View list user
    │   └── View list user delete
    └── Dashboard/
        ├── Total user 
        ├── Total image with login 
        ├── Total images verify with login 
        ├── Total images pending verify with login 
        ├── Total image without login 
        ├── Total images verify without login 
        └── Total images pending verify without login 
```

# Image example

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/KYxDbsN" alt="@onepiecehung"/>
    </a>
</p>
