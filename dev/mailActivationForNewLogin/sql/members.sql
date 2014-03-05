/*
drop schema if exists wisetechman;
create schema wisetechman;
*/

DROP TABLE IF EXISTS membersStatus ;
CREATE TABLE membersStatus (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  activation VARCHAR(50) DEFAULT NULL,
  status VARCHAR(20) DEFAULT 'active'
);

INSERT INTO membersStatus  (id,			activation,			status) VALUES
							(1,			NULL, 				'active'),
							(2,			NULL,				'active'),
							(3 ,		NULL,				'active');

DROP TABLE IF EXISTS membersLogin ;
CREATE TABLE membersLogin (
  id INT(11) UNSIGNED NOT NULL  PRIMARY KEY,
  username VARCHAR(50) DEFAULT NULL,
  password VARCHAR(50) DEFAULT NULL,
  email VARCHAR(50) DEFAULT NULL,
  authorizationLevel VARCHAR(50) DEFAULT 'normal',
  status VARCHAR(20) DEFAULT 'active'
 );

INSERT INTO membersLogin  (	id, 	username,						email,							password,	authorizationLevel) VALUES
							(1,		'guest@guest.com',				'guest@guest.com', 				'guest',  	'guest'),  
							(2,		'paharry@gmail.com',			'paharry@gmail.com',			'hello', 	'admin'), 
							(3,		'paul.harrison@oceanfree.net',	'paul.harrison@oceanfree.net',	'pah',		'normal');
							
							
							
DROP TABLE IF EXISTS membersContact;
CREATE TABLE membersContact (
  email VARCHAR(50) NOT NULL PRIMARY KEY,
  position VARCHAR(50) DEFAULT NULL,
  companyName VARCHAR(50) DEFAULT NULL,
  telephoneNumber VARCHAR(50) DEFAULT NULL,
  addr1 VARCHAR(50) DEFAULT NULL,
  addr2 VARCHAR(50) DEFAULT NULL,
  town VARCHAR(50) DEFAULT NULL,
  cityCounty VARCHAR(50) DEFAULT NULL,
  interaction VARCHAR(50) DEFAULT NULL
);

INSERT INTO membersContact  (email,					position,		companyName,	 telephoneNumber) VALUES
					('guest@guest.com', 			'none',			'guest',	 	'123456890'),
					('paharry@gmail.com',			'owner',		'pah company', 	'+353 87 7505069'),
					('paul.harrison@oceanfree.net',	'IT manager',	'paul ltd',	 	'+44 1604 215132');
		


