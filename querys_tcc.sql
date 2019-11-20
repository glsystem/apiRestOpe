#listando Nome da receita e seus itens de receita com join
select nome_receita, i.nome_ingrediente, ri.qtde as 'Qtd usada', m.tipo_medida  from glsystem.item_receita  as ri
inner join glsystem.receita as r
on r.id = ri.id_receita
inner join glsystem.ingrediente as i
on i.id = ri.id_ingrediente
inner join glsystem.medida as m
on m.id = i.id_medida;


#mostrando produtos
select r.id, r.nome_receita, ri.qtde, p.valor, sb.nome_categoria from glsystem.produto as p 
inner join glsystem.item_receita as ri
on ri.id = p.id_receita 
inner join glsystem.receita as r
on r.id = p.id_receita
inner join glsystem.categoria as sb
on sb.id = p.id_categoria;


#mostrando fornecedores
select nome_fornecedor, e_mail, cep, contato, nome_desc, id_endereco from glsystem.fornecedor as f
inner join glsystem.clas_fornecedor as cf
on cf.id = f.id_clas_fornecedor;

#Select full com login
select nome_completo, cpf, senha from login as l
inner join funcionario as f
on f.id = id_funcionario;

#Select full com funcionarios
select nome_completo, nome_cargo, cpf, rg, contato, salario, dt_admissao, dt_nascimento, id_endereco  from glsystem.funcionario as f
inner join glsystem.cargo as c
on c.id = f.id_cargo;

#dados dos clientes
select * from glsystem.cliente;

#Adicionar QUAL O PRODUTO FOI ENTREGUE e a QUANTIDADE
SELECT * FROM GLSYSTEM.ENTREGA;
select nome_fornecedor, DATE_FORMAT(dt_pedido, '%d/%M/%Y') as pedido_em , dt_recebido, CONCAT('R$ ',vlr_Total) valor from entrega   as e
inner join glsystem.fornecedor as f
on f.id = e.id_fornecedor;

#select full do estoque
select nome_ingrediente, qtde, tipo_medida from glsystem.estoque as e
inner join glsystem.ingrediente as i
on i.id = e.id_ingrediente
inner join glsystem.medida as m
on m.id = i.id_medida;