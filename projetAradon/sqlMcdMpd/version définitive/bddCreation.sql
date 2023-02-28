
CREATE DATABASE IF NOT EXISTS nfthaven2; 

USE nfthaven2;

CREATE TABLE collection (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  imagePath VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL
);

CREATE TABLE user (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  address VARCHAR(255),
  dateOfBirth DATE,
  profilPicture VARCHAR(255),
  dateProfilCreated DATE
);

CREATE TABLE nft (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  imagePath VARCHAR(255) NOT NULL,
  user_id INT,
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE collection_nft (
  collection_id INT NOT NULL,
  nft_id INT NOT NULL,
  PRIMARY KEY (collection_id, nft_id),
  FOREIGN KEY (collection_id) REFERENCES collection(id),
  FOREIGN KEY (nft_id) REFERENCES nft(id)
);

CREATE TABLE user_nft (
  user_id INT NOT NULL,
  nft_id INT NOT NULL,
  PRIMARY KEY (user_id, nft_id),
  FOREIGN KEY (user_id) REFERENCES user(id),
  FOREIGN KEY (nft_id) REFERENCES nft(id)
);

CREATE TABLE user_collection (
  user_id INT NOT NULL,
  collection_id INT NOT NULL,
  PRIMARY KEY (user_id, collection_id),
  FOREIGN KEY (user_id) REFERENCES user(id),
  FOREIGN KEY (collection_id) REFERENCES collection(id)
);