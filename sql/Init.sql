CREATE DATABASE board;

use board;
GO

CREATE TABLE POST (
	boardID int IDENTITY,
	title varchar(25),
	content varchar(500),
	poster varchar(25),


	constraint boardID primary key (boardID),
);

insert into POST (title, content, poster) values ('Test', 'Testtesttest', 'Jake');