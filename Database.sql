
create table Users(
idUser integer not null auto_increment,
firstName varchar(30) not null,
lastName varchar(30) not null,
email varchar(40) not null unique,
pass varchar(30) not null,
age date not null,
mobile varchar(14) not null,
primary key(idUser)
);



create table Games(
idGame integer not null auto_increment,
points integer not null default 0,
lives integer not null default 0,
primary key(idGame)
);

create table UsersGame(
idUser integer not null,
idGame integer not null,
foreign key (idUser) references Users(idUser),
foreign key (idGame) references Games(idGame)
);
