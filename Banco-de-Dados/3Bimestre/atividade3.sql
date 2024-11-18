create database empresa;
use empresa;

create table departamentos (
    CodDept int primary key,
    Nome varchar(100) not null,
    Localizacao varchar(100)
);

create table funcionarios (
    CodFunc int primary key,
    PrimeiroNome varchar(50) not null,
    SegundoNome varchar(50),
    UltimoNome varchar(50) not null,
    DataNasci date,
    CPF varchar(11) unique not null,
    RG varchar(20) unique,
    Endereco varchar(200),
    CEP varchar(8),
    Cidade varchar(100),
    Fone varchar(15),
    Funcao varchar(100),
    Salario decimal(10, 2)
);

alter table funcionarios add column Codigo_departamento int,
add foreign key (Codigo_departamento) references departamentos(CodDept);

alter table departamentos add column Codigo_funcionario_gerente int,
add foreign key (Codigo_funcionario_gerente) references funcionarios(CodFunc);

-- Inserindo valores

insert into departamentos (CodDept, Nome, Localizacao)
values 
(1, 'Investigação', 'Andar 3, bloco a'),
(2, 'Recursos Humanos', 'Andar 2, bloco b'),
(3, 'TI', 'Andar 5, bloco c');

insert into funcionarios (CodFunc, PrimeiroNome, SegundoNome, UltimoNome, DataNasci, CPF, RG, Endereco, Cep, Cidade, Fone, Funcao, Salario, Codigo_departamento)
values
(1, 'Jason', NULL, 'Gideon', '1965-06-10', '10012345678', 'NY1234567', 'Rua Central, 100', '12345-67', 'Washington', '(202) 555-1234', 'Chefe de Unidade', 12000.00, 1),
(2, 'Aaron', NULL, 'Hotchner', '1970-04-10', '10123456789', 'CA9876543', 'Rua da Paz, 200', '23456-78', 'Washington', '(202) 555-2345', 'Especialista em Crimes Violentos', 11000.00, 1),
(3, 'Emily', NULL, 'Prentiss', '1975-01-12', '10234567890', 'TX1122334', 'Avenida Norte, 150', '34567-89', 'Washington', '(202) 555-3456', 'Professora de Psicologia Forense', 9500.00, 1),
(4, 'Penelope', NULL, 'Garcia', '1982-07-01', '10345678901', 'FL8765432', 'Rua das Flores, 500', '45678-90', 'Washington', '(202) 555-4567', 'Analista Técnica de Inteligência', 8000.00, 3),
(5, 'David', NULL, 'Rossi', '1955-11-15', '10456789012', 'NJ5432109', 'Rua Velha, 300', '56789-01', 'Washington', '(202) 555-5678', 'Especialista em Profiling', 10000.00, 1),
(6, 'Derek', NULL, 'Morgan', '1980-05-09', '10567890123', 'IL6789101', 'Avenida do Sol, 400', '67890-12', 'Washington', '(202) 555-6789', 'Agente Especial', 9500.00, 1),
(7, 'Spencer', NULL, 'Reid', '1983-10-04', '10678901234', 'NV1122334', 'Rua Nova, 600', '78901-23', 'Washington', '(202) 555-7890', 'Especialista em Psicologia Forense', 8500.00, 1);

update departamentos set Codigo_funcionario_gerente = 1 where CodDept = 1; 
update departamentos set Codigo_funcionario_gerente = 4 where CodDept = 3; 

-- A) Listar nome e sobrenome ordenado por sobrenome
select PrimeiroNome, UltimoNome from funcionarios order by UltimoNome;

-- B) Listar todos os campos de funcionários ordenados por cidade
select * from funcionarios order by Cidade;

-- C) Liste os funcionários que têm salário superior a R$ 1.000,00 ordenados pelo nome completo
select PrimeiroNome, UltimoNome from funcionarios where salario > 1000.00 order by PrimeiroNome;

-- D)Liste a data de nascimento e o primeiro nome dos funcionários ordenados do mais novo para o mais velho
select DataNasci, PrimeiroNome from funcionarios order by DataNasci desc;

-- E) Liste os funcionários como uma listagem telefônica
select PrimeiroNome, Fone from funcionarios order by PrimeiroNome;

-- F) Liste o total da folha de pagamento
select sum(Salario) as totalfolhapagamento from funcionarios;

-- G) Liste o nome, o nome do departamento e a função de todos os funcionários
select f.primeironome, d.nome as departamento, f.funcao
from funcionarios f
join departamentos d on f.codigo_departamento = d.coddept;

-- H) Liste todos departamentos com seus respectivos gerentes
select d.nome as departamento, f.primeironome, f.ultimonome
from departamentos d
left join funcionarios f on d.codigo_funcionario_gerente = f.codfunc;

-- I) Liste o valor da folha de pagamento de cada departamento (nome)
select d.nome as departamento, sum(f.salario) as folha_pagamento
from funcionarios f
join departamentos d on f.codigo_departamento = d.coddept
group by d.nome;

-- J) Liste os departamentos dos funcionários que têm a função de supervisor
select d.nome as departamento
from funcionarios f
join departamentos d on f.codigo_departamento = d.coddept
where f.funcao like '%supervisor%';

-- K) Liste a quantidade de funcionários desta empresa
select count(*) as total_funcionarios from funcionarios;

-- L) Liste o salário médio pago pela empresa
select avg(salario) as salario_medio from funcionarios;

-- M) Liste os nomes dos funcionários que moram em Recife e que exerçam a função de Telefonista
select primeiroNome, ultimoNome
from funcionarios
where cidade = 'Recife' and funcao = 'Telefonista';

-- N) Liste o nome do departamento e do funcionário ordenados por departamento e funcionário
select d.nome as departamento, f.primeironome, f.ultimonome
from departamentos d
join funcionarios f on f.codigo_departamento = d.coddept
order by d.nome, f.primeironome;

-- O) Liste o nome completo de todos os funcionários que não tenham segundo nome
select concat(primeironome, ' ', ultimoNome) as nome_completo
from funcionarios
where segundoNome is null;

-- P) Liste o menor salário pago pela empresa em cada departamento
select d.nome as departamento, min(f.salario) as menor_salario
from funcionarios f
join departamentos d on f.codigo_departamento = d.coddept
group by d.nome;