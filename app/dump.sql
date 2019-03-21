CREATE TABLE users (
  id int(10) UNSIGNED AUTO_INCREMENT NOT NULL,
  username varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  password varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  role varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE providers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    company VARCHAR(50) DEFAULT NULL,
    trade VARCHAR(50) DEFAULT NULL,
    adress VARCHAR(50) DEFAULT NULL,
    neighborhood varchar(50) DEFAULT NULL,
    city varchar(50) DEFAULT NULL,
    state VARCHAR(50) DEFAULT NULL,
    cep varchar(20) DEFAULT NULL,
    phone VARCHAR(20) DEFAULT NULL,
    cellPhone varchar(20) DEFAULT NULL,
    email VARCHAR(50) DEFAULT NULL,
    cnpj VARCHAR(20) DEFAULT NULL,
    contact VARCHAR(50) DEFAULT NULL,
    user_id int(11) DEFAULT null,
    created datetime DEFAULT NULL,
    modified datetime DEFAULT null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;