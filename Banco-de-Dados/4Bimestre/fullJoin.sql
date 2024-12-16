create database exe2;
use exe2;
drop database exe2;

create table filmes(
	id_filme int primary key,
    titulo varchar(50),
    genero varchar(20)
);

create table ingressos_vendidos (
	id_ingresso int primary key,
    id_filme int,
    quantidade int,
    foreign key(id_filme) references filmes (id_filme)
);

insert into filmes values 
(1, 'Avatar','Ficção científica'),
(2, 'Titanic', 'Drama'),
(3, 'Inception', 'Ação'),
(4, 'O Rei Leão', 'Animação');

insert into ingressos_vendidos values 
(1,1, 150),
(2,2, 200),
(3,3, 120);

select f. as nome, f.genero as genero, iv.quantidade as ingressos_vendidos from filmes FULL JOIN ingressos_vendidos iv on f.id_filme = iv.id_filme;
