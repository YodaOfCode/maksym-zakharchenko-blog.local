DROP DATABASE IF EXISTS maksym_zakharchenko_blog;

DROP USER IF EXISTS 'maksym_zakharchenko_blog_user'@'%';

CREATE DATABASE maksym_zakharchenko_blog;

CREATE USER 'maksym_zakharchenko_blog_user'@'%' IDENTIFIED BY '45Ya!$""sT&P*C%RNSEhr';

GRANT ALL ON maksym_zakharchenko_blog.* TO 'maksym_zakharchenko_blog_user'@'%';