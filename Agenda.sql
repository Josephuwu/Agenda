create DATABASE Agenda;
use Agenda;

create table usuario(
idUsuario int primary key not null auto_increment,
Nombre varchar(45) not null,
Correo varchar(45) not null,
Contra varchar(45) not null);

create table nota(
idNota int primary key not null auto_increment,
Nombre varchar(45) not null,
Nota text not null);

create table evento(
idEvento int primary key not null auto_increment,
Nombre varchar(45) not null,
Descripcion text not null,
Fecha date not null,
Hora time not null);

