create database aula;
show databases;
use aula;
create table medico(
codmed int primary key,
nomemed varchar(40) not null,
datanasc date not null,
cpf char(11),
cidade varchar(30) not null,
especialidade varchar(50) not null
);
create table paciente(
codPac int primary key,
nomePac varchar(40) not null,
dataNasc date not null,
cpf char(11),
cidade varchar(30) not null
);

show databases;
create table consulta(
codmed int not null,
codPac int not null,
data_consulta date not null,
hora time not null,
primary key(codmed, codPac),
foreign key(codmed) references medico(codmed),
foreign key(codPac) references paciente(codPac)
);

create database universidade;
show databases;
use universidade;

create table professor(
codprof int primary key,
nomeprof varchar(40) not null,
area varchar(20) not null,
data_nasc date not null,
CPF int(11) not null
);

create table disciplina(
coddisc int primary key,
nomedisc varchar(40) not null,
carga_hora time not null
);

show databases;
create table professorDisciplina(
codprof int not null,
coddisc int not null,
primary key(codprof, coddisc),
foreign key(codprof) references professor(codprof),
foreign key(coddisc) references disciplina(coddisc)
);

create database teste1;
show databases;
use teste1;
create table cliente(
codcli int primary key,
nome varchar(40) not null,
endereco varchar(40) not null,
datanasc date
);

create table produto(
codprod int primary key,
nome varchar(40),
valor float
);

drop database teste1;
use universidade;

alter table professor add formacao varchar(30) not null;
alter table disciplina add ementa varchar(100) not null;

use universidade;
show databases;
use aula;
insert into medico values(1,'Joao','1984-06-26','10000100000','Florianopolis','Ortopedia');
describe medico;
select * from medico;
insert into medico values(2,'Maria','1970-07-13','11100100000','Blumenau','Traumatologia');
insert into medico values(3,'Pedro','1956-11-25','11100100000','Porto Velho','Pediatria');
insert into medico values(4,'Carlos','1985-02-07','11110100000','Joinville','Ortopedia');
insert into medico values(5,'Marcia','1945-08-15','10110100000','Fortaleza','Neurologia');
insert into medico values(6,'Luciana','1975-04-25','01001011111','Rio Branco','Oftalmologia');

insert into paciente values(1,'Ana','1978-09-13','22010005000','Florianópolis');
insert into paciente values(2,'Paulo','1940-03-17','81101000400','Porto Velho');
insert into paciente values(3,'Lucia','1957-06-24','17910100000','Blumenau');
insert into paciente values(4,'Carlos','2001-10-08','12510100000','Joinville');
insert into paciente values(5,'Luiz','2000-08-14','14780111400','Fortaleza');
insert into paciente values(6,'Mauricio','1980-01-01','47855499635','Rio Branco');

select * from paciente;

insert into consulta values(1,1,'2021-05-21','14:00');
insert into consulta values(1,4,'2021-05-13','10:00');
insert into consulta values(2,1,'2020-10-13','9:00');
insert into consulta values(2,2,'2021-03-13','11:00');
insert into consulta values(2,3,'2020-08-14','14:00');
insert into consulta values(2,4,'2020-08-14','17:00');
insert into consulta values(3,6,'2020-05-19','18:00');
insert into consulta values(3,3,'2021-04-12','10:00');
insert into consulta values(6,5,'2021-04-21','13:00');
insert into consulta values(4,4,'2020-10-22','19:30');

select * from consulta;

use aula;
alter table medico add crm int;
alter table medico drop crm;
alter table medico change cidade cidadeNasc varchar(40);
desc medico;
alter table paciente modify cpf varchar(11);
update medico set especialidade = "Dermatologia" where nomeMed = 'Pedro';
delete from consulta where codPac = 3;
select * from paciente;
select * from consulta;
delete from paciente where nomePac = 'Lucia';

create database Empresa;
use Empresa;
create table Departamento (
	codigo int primary key,
    descricao varchar(100) not null
);
alter table Departamento change codigo cod_dept int;
create table Funcionario (
	cod_func int primary key,
    nome varchar(100) not null,
    endereco varchar(150),
    telefone varchar(15), 
    cod_departamento int,
    foreign key (cod_departamento) references Departamento(cod_dept)
);
create table Dependentes(
	cod_depend int primary key,
    cod_funcionario int,
    nome varchar(100) not null,
    data_nasc date,
    foreign key (cod_funcionario) references Funcionario(cod_func)
);
desc Departamento;
desc Funcionario;
desc Dependentes;

alter table Funcionario add column data_nasc date;
alter table Dependentes add column profissao varchar(30);
alter table Departamento modify column descricao char(50);
alter table Dependentes add column teste varchar(100);
alter table Dependentes drop column teste;

insert into Departamento (cod_dept, descricao) values
(1,'Recursos Humanos'),
(2,'Tecnologia da Informação'),
(3,'Financeiro');

insert into Funcionario(cod_func, nome, endereco, telefone, cod_departamento, data_nasc) values
(1,'João da Silva','Rua A, 123','99999-1111',1,'1985-01-15'),
(2,'Maria Oliveira','Rua B, 456','99999-2222',2,'1990-05-22'),
(3,'Carlos Souza','Rua C, 789','99999-3333',3,'1978-09-10');

insert into Dependentes(cod_depend, cod_funcionario, nome, data_nasc) values
(1,1,'Ana Silva','2010-03-20'),
(2,2,'Pedro Silveira','2012-08-14'),
(3,3,'Lucas Souza','2015-11-30');