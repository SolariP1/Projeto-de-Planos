create database longa_vida;

create table plano(
       pla_codigo int primary key auto_increment,
       pla_descrição varchar(255),
       pla_valor varchar(255)
);

create table associados(
       ass_codigo int primary key auto_increment,
       ass_nome varchar(255),
       ass_endereco varchar(255),
       ass_cidade varchar(255),
       ass_estado varchar(255),
       ass_cpf varchar(13)
);