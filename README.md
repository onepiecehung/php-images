<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://en.uit.edu.vn/sites/vi/files/banner_en.png" alt="@onepiecehung"/>
    </a>
</p>

<hr> 

## PHP Sharing images powered by <a href="https://github.com/360AnimeTeam">@360AT </a><a href="https://fb.com/360AnimeTeam"><img width="auto" height="20" src="home/images/logo.png" alt="@onepiecehung"/>@3AT</a>

[![js-standard-style](https://img.shields.io/badge/Build-1906.19-brightgreen.svg?style=flat)](https://github.com/feross/standard)

<hr>

# Setup and installation 

```
$ git clone https://github.com/onepiecehung/php-images.git
```

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

> #### And add line 


```
<VirtualHost *:8886>
DocumentRoot "< **Path to your project** >"
ServerName 3raw.cc
</VirtualHost>
```

4. Import database

```python
import file `phpimages.sql` to your database
```

> #### You can see: <a href="https://paste.ofcode.org/Hdv2ueBu2KaYmmFzWZDg7J"><b>Example</b></a>


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

> ### Login

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/KYxDbsN.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Regsiter

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/zyarFR5.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Home

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/GHcT2Vq.png" alt="@onepiecehung"/>
    </a>
</p>

> ### After upload image

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/kvfUDmh.png" alt="@onepiecehung"/>
    </a>
</p>

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/G7ET94q.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Profile

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/O5Uc8t5.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Change avatar

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/pRnoLyX.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Change password

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/EJUPVB6.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Edit image

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/ZAdTNJ6.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Upload image

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/q4Qky1A.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Login admin

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/I5G8ads.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Dashboard

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/gmw4T50.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List user

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/WF5dENf.png" alt="@onepiecehung"/>
    </a>
</p>

> ### Add user

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/NiMi2Ca.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List user deleted

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/rB0gXvc.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/m1K96ld.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image Anonymous

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/eDEOJ5B.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image verify by admin

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/zMYUgML.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image not verify

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/GE56yjy.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image deleted

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/IgvqiIO.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image anonymous verify by admin

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/4KsU5yw.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image anonymous not verify by admin

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/1QrIqxg.png" alt="@onepiecehung"/>
    </a>
</p>

> ### List image anonymous deleted

<p align="center">
    <a href="https://github.com/onepiecehung">
        <img src="https://imgur.com/qqulF7K.png" alt="@onepiecehung"/>
    </a>
</p>

