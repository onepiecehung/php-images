use `phpimages`;
UPDATE photos SET status_photos = 1 WHERE id = 2;
SELECT * FROM admins
INSERT INTO `admins`( `username`, `email`, `pass`) VALUES ("admin","admin@admin.com","admin")
UPDATE photos SET title='' WHERE id=44;
SELECT * FROM users WHERE id=(SELECT id_user FROM photos WHERE id=52 )
SELECT * FROM users WHERE id=(SELECT id_user FROM photos WHERE id= 53);
SELECT * FROM users WHERE id=(SELECT id_user FROM photos WHERE id= 1)
UPDATE users SET pass="1" WHERE id=1;
UPDATE users SET pass="2" WHERE id=1;
SELECT *  FROM users WHERE pass=1 and id =1;
SELECT * FROM users WHERE id="1";
SELECT * FROM photos WHERE id_user = "1"
SELECT * FROM photos WHERE id between 32 and 42 ORDER BY id DESC
SELECT id FROM `photos` ORDER BY id DESC LIMIT 1
SELECT * FROM `photos` WHERE id between 5 and 20 ORDER BY id DESC LIMIT 10
SELECT * FROM `photos` ORDER BY id DESC LIMIT 1
INSERT INTO photos (title, id_user, images_url) VALUES ('a','16520479','bdfa843d6facc1628cf9e314eb549bc7.jpg')
SELECT * FROM `users` WHERE email = "onepiece.hung@outlook.com" and password="a"
SELECT * FROM `users` WHERE name= 16520479

