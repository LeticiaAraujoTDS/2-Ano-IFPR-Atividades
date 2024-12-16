create database exe;
use exe;

create table alunos(
	id_aluno int primary key,
    nome varchar(20) not null,
    email varchar (30) not null
);

create table cursos (
	id_curso int primary key,
    nomeCurso varchar(20) not null,
    cargaHoraria int not null
);

insert into alunos values 
(1, 'Ana', 'a@gmail.com'),
(2, 'Bea', 'b@gmail.com'),
(3, 'Carla','c@#gnail.com');

insert into cursos values 
(1, 'BD', 120),
(2, 'OO', 120),
(3, 'DW',120);

select alunos.nome, cursos.nomeCurso from alunos inner join cursos on alunos.id_aluno = cursos.id_curso;
