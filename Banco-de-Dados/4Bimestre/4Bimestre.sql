create database atividade4;
use atividade4;

create table Produtos (
    produto_id INT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    categoria VARCHAR(30) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

create table Vendas (
    venda_id INT PRIMARY KEY,
    cliente_id INT NOT NULL,
    produto_id INT NOT NULL,
    data_venda DATE NOT NULL,
    quantidade INT NOT NULL,
    foreign key (produto_id) references Produtos(produto_id)
);

create table Estoque (
    produto_id INT PRIMARY KEY,
    quantidade_disponivel INT NOT NULL,
    fornecedor_id INT NOT NULL,
    foreign key (produto_id) references Produtos(produto_id)
);

create table Fornecedores (
    fornecedor_id INT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cidade VARCHAR(50) NOT NULL
);

insert into Produtos (produto_id, nome, categoria, preco) values
(1, 'Notebook', 'Eletrônicos', 3000.00),
(2, 'Smartphone', 'Eletrônicos', 2000.00),
(3, 'Fone de Ouvido', 'Acessórios', 200.00),
(4, 'Mochila', 'Acessórios', 150.00);

insert into Vendas (venda_id, cliente_id, produto_id, data_venda, quantidade) values
(201, 1, 1, '2025-01-10', 1),
(202, 2, 2, '2025-01-11', 2),
(203, 3, 4, '2025-01-15', 1),
(204, 5, 1, '2025-01-20', 1);

insert into Estoque (produto_id, quantidade_disponivel, fornecedor_id) values
(1, 5, 101),
(2, 10, 102),
(3, 20, 103),
(4, 15, 101);

insert into Fornecedores (fornecedor_id, nome, cidade) values
(101, 'Tech Supplies', 'São Paulo'),
(102, 'Mobile World', 'Rio de Janeiro'),
(103, 'Audio Store', 'Belo Horizonte');

-- a) Liste o nome dos clientes, os produtos que compraram e a data da venda. Inclua apenas os clientes que realizaram compras.

select Vendas.cliente_id, Produtos.nome as produto, Vendas.data_venda 
from Vendas inner join Produtos on Vendas.produto_id = Produtos.produto_id;
 
-- b) Liste todos os produtos, incluindo a quantidade disponível no estoque e o nome do fornecedor. Para produtos que não têm fornecedor associado no estoque, mostre NULL.

select Produtos.nome as Nome, Estoque.quantidade_disponivel as Quant, Fornecedores.nome as Fornecedor
from Produtos left join Estoque on Produtos.produto_id = Estoque.produto_id
left join Fornecedores on Estoque.fornecedor_id = Fornecedores.fornecedor_id;

-- c) Crie uma lista de combinação entre todos os fornecedores e produtos. A lista deve exibir o nome do fornecedor e o nome do produto.

select Produtos.nome as Produto, Fornecedores.nome as Fornecedor from Produtos left join Estoque on Produtos.produto_id = Estoque.produto_id
left join Fornecedores on Estoque.fornecedor_id = Fornecedores.fornecedor_id;

