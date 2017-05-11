create table usuario(
    id serial unique not null primary key,
    nome varchar(120),
    email varchar(120) not null unique,
    apelido varchar(60),
    senha varchar,
    tipo integer not null default 3,
    status integer not null default 2
);