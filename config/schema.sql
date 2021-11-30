DROP TABLE IF EXISTS `category_post`;
#---
DROP TABLE IF EXISTS `daily_statistics`;
#---
DROP TABLE IF EXISTS `category`;
#---
DROP TABLE IF EXISTS `post`;
#---
DROP TABLE IF EXISTS `author`;
#---
CREATE TABLE `post`
(
    `post_id`     int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Post ID',
    `title`       varchar(127) NOT NULL COMMENT 'Post title',
    `author_id`   int unsigned COMMENT 'ID of the author, who wrote this post',
    `url`         varchar(127) NOT NULL COMMENT 'Post URL',
    `description` varchar(4095) DEFAULT NULL COMMENT 'Post description',
    `date`        date         NOT NULL COMMENT 'Post created date',
    PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Post Entity';
#---
CREATE TABLE `category`
(
    `category_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Category ID',
    `name`        varchar(127) NOT NULL COMMENT 'Name',
    `url`         varchar(127) NOT NULL COMMENT 'URL',
    PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Category Entity';
#---
CREATE TABLE `author`
(
    `author_id` int unsigned AUTO_INCREMENT COMMENT 'Author ID',
    `url`       varchar(127) NOT NULL COMMENT 'Author URL',
    `name`      varchar(127) NOT NULL COMMENT 'Author name',
    PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Author Entity';
#---
CREATE TABLE `daily_statistics`
(
    `statistics_id`      int unsigned AUTO_INCREMENT COMMENT 'Statistics ID',
    `post_statistics_id` int unsigned COMMENT 'ID of the post with statistics',
    `date`               date NOT NULL COMMENT 'Statistics date',
    `views`              int unsigned NOT NULL COMMENT 'Views of the post per day',
    PRIMARY KEY (`statistics_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Statistics Entity';
#---
INSERT INTO `post` (`title`, `author_id`, `url`, `description`, `date`)
VALUES ('Post 1', '1', 'post-1', 'Lorem ipsum dolor sit amet', '2010-01-01'),
       ('Post 2', '1', 'post-2', 'Lorem ipsum dolor sit amet', '2010-02-02'),
       ('Post 3', '1', 'post-3', 'Lorem ipsum dolor sit amet', '2010-01-01'),
       ('Post 4', '2', 'post-4', 'Lorem ipsum dolor sit amet', '2010-02-02'),
       ('Post 5', '2', 'post-5', 'Lorem ipsum dolor sit amet', '2010-10-01'),
       ('Post 6', '2', 'post-6', 'Lorem ipsum dolor sit amet', '2010-02-02'),
       ('Post 7', '3', 'post-7', 'Lorem ipsum dolor sit amet', '2010-01-01'),
    ('Post 8', '3', 'post-8', 'Lorem ipsum dolor sit amet', '2010-02-02'),
    ('Post 9', '3', 'post-9', 'Lorem ipsum dolor sit amet', '2010-01-01'),
    ('Post 10', '4', 'post-10', 'Lorem ipsum dolor sit amet', '2010-02-02'),
    ('Post 11', '4', 'post-11', 'Lorem ipsum dolor sit amet', '2010-01-01'),
    ('Post 12', '4', 'post-12', 'Lorem ipsum dolor sit amet', '2010-02-02'),
    ('Post 13', '5', 'post-13', 'Lorem ipsum dolor sit amet', '2010-01-01'),
    ('Post 14', '5', 'post-14', 'Lorem ipsum dolor sit amet', '2010-02-02'),
    ('Post 15', '5', 'post-15', 'Lorem ipsum dolor sit amet', '2010-01-01');
#---
INSERT INTO `category` (`name`, `url`)
VALUES ('It', 'it'),
       ('Sport', 'sport'),
       ('Science', 'science'),
       ('International', 'international'),
       ('News', 'news');
#---
INSERT INTO `author` (`name`, `url`)
VALUES ('John Doe', 'author-1'),
       ('Doe John', 'author-2'),
       ('Lol', 'author-3'),
       ('Keks', 'author-5'),
       ('Vasya', 'author-5');
#---
INSERT INTO `daily_statistics` (`post_statistics_id`, `date`, `views`)
VALUES ('1', '2021-01-01', '1'), ('1', '2021-01-02', '1'), ('2', '2021-01-01', '2'), ('2', '2021-01-02', '2'),
('3', '2021-01-01', '3'), ('3', '2021-02-02', '3'), ('4', '2021-01-01', '4'), ('4', '2021-02-02', '4'),
('5', '2021-01-01', '5'), ('5', '2021-02-02', '5'), ('6', '2021-01-01', '6'), ('6', '2021-02-02', '6'),
('7', '2021-01-01', '7'), ('7', '2021-02-02', '7'), ('8', '2021-01-01', '8'), ('8', '2021-02-02', '8'),
('9', '2021-01-01', '9'), ('9', '2021-02-02', '9'), ('10', '2021-01-01', '10'), ('10', '2021-02-02', '10'),
('11', '2021-01-01', '11'), ('11', '2021-02-02', '11'), ('12', '2021-01-01', '12'), ('12', '2021-02-02', '12'),
('13', '2021-01-01', '13'), ('13', '2021-02-02', '13'), ('14', '2021-01-01', '14'), ('14', '2021-02-02', '14'),
('15', '2021-01-01', '15'), ('15', '2021-02-02', '15');
#---
ALTER TABLE `daily_statistics`
    ADD CONSTRAINT `FK_DAILY_STATISTICS_POST_ID` FOREIGN KEY (`post_statistics_id`)
        REFERENCES `post` (`post_id`) ON DELETE CASCADE;
#---
CREATE TABLE `category_post`
(
    `category_post_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
    `post_id`          int unsigned COMMENT 'Post ID',
    `category_id`      int unsigned NOT NULL COMMENT 'Category ID',
    PRIMARY KEY (`category_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Category Post';
#---
INSERT INTO `category_post` (`post_id`, `category_id`)
    VALUES ('1', '1'), ('2', '2'), ('3', '3'), ('4', '4'), ('5', '5'), ('2', '1'), ('2', '2'),
    ('2', '3'), ('2', '4'), ('2', '5');
#---
ALTER TABLE `category_post`
    ADD CONSTRAINT `FK_CATEGORY_POST_CATEGORY_ID` FOREIGN KEY (`category_id`)
        REFERENCES `category` (`category_id`) ON DELETE CASCADE,
    ADD CONSTRAINT `FK_CATEGORY_POST_POST_ID` FOREIGN KEY (`post_id`)
        REFERENCES `post` (`post_id`) ON
DELETE
SET NULL;
#---
ALTER TABLE `post`
    ADD CONSTRAINT `FK_AUTHOR_POST_AUTHOR_ID` FOREIGN KEY (`author_id`)
        REFERENCES `author` (`author_id`) ON DELETE SET NULL;