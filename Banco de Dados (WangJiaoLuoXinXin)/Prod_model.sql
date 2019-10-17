Create Table Prod_model
(
    id_Prod_model int primary key,
	nome_produto varchar(40),
    valor_produto numeric (16,2),
    data_compra datetime
)
 Alter table produto add nome_fabricante int
 
Create unique index ix_nome_produto on produto(nome_produto)
 