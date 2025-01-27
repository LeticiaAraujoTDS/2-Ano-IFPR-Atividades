create database atividade3;
use atividade3;

create table Clientes (
cliente_id int primary key,
nome varchar(20),
cidade varchar (30)
);

create table Pedidos (
pedido_id int primary key,
cliente_id int,
valor int,
foreign key (cliente_id) references Clientes(cliente_id)
);

insert into Clientes (cliente_id, nome, cidade) values
(1, 'Ana', 'São Paulo'),
(2, 'Bruno', 'Rio de Janeiro'),
(3, 'Carla', 'Curitiba'),
(4, 'Daniel', 'Recife');

insert into Pedidos (pedido_id, cliente_id, valor) values
(101, 1, 25000),
(102, 2, 30000),
(103, 2, 15000),
(104, 4, 40000);

-- a) Escreva uma consulta SQL que exiba o nome dos clientes e os valores de seus pedidos. Mostre apenas os clientes que têm pedidos registrados.
select Clientes.nome, Pedidos.valor from Clientes
join Pedidos on Clientes.cliente_id = Pedidos.cliente_id
order by Clientes.nome;

-- b) Escreva uma consulta SQL para listar todos os clientes e, caso tenham pedidos, exiba os valores correspondentes. Caso não tenham pedidos, o valor deve aparecer como NULL.
select Clientes.nome, Pedidos.valor 
from Clientes
left join Pedidos on Clientes.cliente_id = Pedidos.cliente_id;

-- c) Crie uma consulta SQL que mostre todos os pedidos, incluindo aqueles cujo cliente não está registrado na tabela de clientes.
select Pedidos.pedido_id, Pedidos.cliente_id, Pedidos.valor
from Pedidos
right join Clientes on Clientes.cliente_id = Pedidos.cliente_id;

-- d) Use o FULL JOIN para exibir todas as combinações possíveis entre clientes e pedidos, incluindo dados incompletos de ambos os lados.
select Clientes.nome, Clientes.cidade, Pedidos.pedido_id, Pedidos.valor
from Clientes
full join Pedidos
on Clientes.cliente_id = Pedidos.cliente_id;

-- d) Use o CROSS JOIN para combinar todos os clientes com todos os pedidos e exiba as colunas nome, pedido_id e valor.
select Clientes.nome, Pedidos.pedido_id, Pedidos.valor
from Clientes 
cross join Pedidos;
