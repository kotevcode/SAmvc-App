# SAmvc Framework

* very simple to use
* just copy the .env.example to .env and install composer
* this is an example with one table in db - 'pages'
* just follow the code

## sample db

```
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `pages` (`id`,`url`,`name`,`body`) VALUES (1,'index','Home','this is the home page');
INSERT INTO `pages` (`id`,`url`,`name`,`body`) VALUES (2,'about','About','this is the about page');
```
