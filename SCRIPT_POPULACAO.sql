use glsystem;
select * from cargo;
INSERT INTO cargo (nome_cargo) VALUES ('Cozinheiro'), 
('Atendente'),('Gerente');
select * from endereco;
INSERT INTO endereco (cidade,estado,cep,endereco,bairro,numero,complemento) Values 
('Osasco','São Paulo','06028-240','Rua Pedro Pinto de Carvalho','Umuarama',55,'Casa'),
('Franco da Rocha','São Paulo','07854-120','Avenida Giovani Rinaldi','Parque Vitória',234,'Casa'),
('Itapevi','São Paulo','06654-420','Rua Francelina','Vila Doutor Cardoso',29,'Casa'),
('São Paulo','São Paulo','04755-000','Rua Ada Negri','Santo Amaro',96,'Loja');
select * from funcionario;
INSERT INTO Funcionario (nome_completo,dt_nascimento,rg,cpf,id_cargo,dt_admissao,salario,contato,id_endereco) VALUES 
('Thais Rodrigues Gasparetto','1999/04/27','54.237.794-9','428.070.588-76',1,'2018/06/16',4000.00,'(11)98623-3619',1), 
('Thiago Cipriano Queiroz',	'2000/11/21','53.210.276-9','488.251.108-80',3,'2018/05/21',9000.00,'(11)95554-8379',2), 
('João Victor Batista Gonçalves','2000/04/29','54.175.751-9','332.201.188-79',2,'2016/03/20',4000.00,'(11)94146-9921',3);
select * from cliente;
INSERT INTO Cliente (Nome,CPF) VALUES ('Vinicius Ribeiro','267.178.748-79'), 
('Vitor Basile','482.793.728-14');
select * from venda;
INSERT INTO Venda (ID_Funcionario,vlr_final,ID_Cliente) VALUES (2,11.00,2),
(2,35.60,1);
select * from tipo_pagamento;
INSERT INTO Tipo_Pagamento (Desc_Tipo_Pagamento) VALUES ('Cartão de Crédito'),
('Dinheiro'),('Aplicativo');
select * from pagamento;
INSERT INTO Pagamento (ID_Tipo_Pagamento,ID_Venda) VALUES (1,2), (3,1);
select * from medida;
INSERT INTO Medida (Tipo_Medida) VALUES ('Litros'), 
('Gramas'), ('Unidade');
select * from ingrediente;
INSERT INTO ingrediente (Nome_Ingrediente, id_medida) VALUES ('Leite',1), 
('Farinha',2), ('Ovo',3), ('Fermento',2), ('Chocolate',2), ('Cenoura',2),('Coca-Cola',3), ('Guarana',3), ('Coxinha',3),('Kibe',3);
select * from clas_fornecedor;
INSERT INTO clas_fornecedor (nome_desc) VALUES ('Juridica'),
('Fisica');
select * from fornecedor;
INSERT INTO fornecedor (cnpj,nome_fornecedor,nome_fantasia,e_mail, cep,contato,celular,nome_contato,id_clas_fornecedor,id_endereco) VALUES 
('28.772.469/0001-68','PMG Conveniencia LTDA','PMG','sac@pmg.com.br','04755-000','(11) 5645-0000','(11) 95934-1696','PMG',1,4);
select * from estoque;
INSERT INTO estoque (id_ingrediente,qtde) VALUES (3,12), 
(1,1.5),(2,0.5);
select * from entrega;
INSERT INTO entrega (id_fornecedor, dt_pedido, dt_recebido, vlr_total) VALUES (1,'2019/10/07',null,500);
select * from item_entrega;
INSERT INTO item_entrega (id_ingrediente, qtde,vlr_ingrediente,id_entrega,id_estoque) VALUES (3,12,3.99,1,1);
select * from receita;
INSERT INTO receita (nome_receita) VALUES ('Bolo de Cenoura'),('Bolo de Chocolate'),('Coxinha'),('Kibe'),('Coca-Cola'),('Guaraná');
select * from categoria;select * from categoria;
INSERT INTO categoria (Nome_Categoria) VALUES ('Bolos'), 
('Bebidas'),('Salgados');

select * from produto;
INSERT INTO produto (id_receita,valor,id_categoria) VALUES (1,15.00,1),(2,15.00,1),(3,6.00,3),(4,6.00,3),
(5,6.50,2),(6,6.50,2);
select * from item_receita;
INSERT INTO item_receita (id_ingrediente,qtde,id_receita) VALUES (3,3,1),(1,5,1),(2,300,1),(4,2,1),(6,200,1),
(3,3,2),(1,5,2),(2,300,2),(4,2,2),(5,400,2),
(9,1,3),(10,1,4),(7,1,5),(8,1,6);
select * from item_venda;
INSERT INTO item_venda (id_venda,id_produto,qtde) VALUES (1,1,2);
select * from login;
INSERT INTO login (id_funcionario,senha) VALUES (1,'1234'),(2,'4321');


select nome_completo, cpf, senha from funcionario as f
right join login as l
on l.id_funcionario = f.id;

select * from login;