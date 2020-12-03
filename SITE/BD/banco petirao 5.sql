create database petiraco;
use petiraco;

create table tipopess(id int primary key auto_increment,
					  ds boolean not null
);

create table cliente(id int primary key auto_increment,
					 idpess int,
					 nm varchar(15) not null,
                     sobrenm varchar(15) not null,
                     rg varchar(12) not null,
                     cpf varchar(14) not null,
                     sexo char(1) not null,
                     uf char(2),
                     cidade varchar(50) not null,
                     bairro varchar(50) not null,
                     logra varchar(50) not null,
                     num varchar(10),
                     cep varchar(9),
                     compl varchar(80),
					 email varchar(30),
                     usu varchar(16) not null,
                     senha varchar(16) not null,
                     constraint fk_pessoa_cliente foreign key (idpess) references tipopess(id) 
);

create table funcionario(id int primary key auto_increment,
						 nm varchar(15) not null,
						 sobrenm varchar(15) not null,
                         sexo char(1) not null,
						 cpf varchar(14) not null,
						 rg varchar(14) not null,
                         idpess int,
						 dsend varchar(500),
						 email varchar(30),
                         sal varchar(6),
                         funcao varchar(20),
                         constraint fk_pessoa_func foreign key (idpess) references tipopess(id) 
);

create table fornecedor(id int primary key auto_increment,
						 nm varchar(30) not null,
						 cnpj varchar(14) not null,
                         idpess int,
						 dsend varchar(500) not null,
						 email varchar(30) not null,
                         constraint fk_pessoa_forn foreign key (idpess) references tipopess(id)
);

create table produto(id int primary key auto_increment,
					 nm varchar(15) not null,
                     ani varchar(20) not null,
                     tipo varchar(10) not null,
                     val varchar(6) not null,
                     dtval date not null,
                     ds varchar(20) not null,
                     idforn int not null,
                     img varchar(100),
					 constraint fk_forn_prod foreign key (idforn) references fornecedor(id)
);

create table venda(id int primary key auto_increment,
				   dtven date not null,
                   valtotal varchar(10) not null,
                   idcli int,
                   idfunc int,
                   constraint fk_cli_vend foreign key (idcli) references cliente(id),
				   constraint fk_func_vend foreign key (idfunc) references funcionario(id)
);

create table venda_item(id int primary key auto_increment,
						qntd int not null,
                        idvenda int not null,
						constraint fk_vend_venditem foreign key (idvenda) references venda(id)
                        );
                        
create table servico(id int primary key auto_increment,
					 tipo varchar(10) not null,
                     tipoani varchar(7) not null,
                     valortotal varchar(6) not null,
                     idcli int,
                     idfunc int,
                     constraint fk_cli_ser foreign key (idcli) references cliente(id),
				     constraint fk_func_ser foreign key (idfunc) references funcionario(id)
);

INSERT INTO `petiraco`.`tipopess` (`ds`) VALUES ('0');
INSERT INTO `petiraco`.`tipopess` (`ds`) VALUES ('1');
INSERT INTO `petiraco`.`fornecedor` (`nm`, `cnpj`, `idpess`, `dsend`, `email`) VALUES ('fddfs', 'fdsdf', '1', 'dfssd', 'fds');
INSERT INTO `petiraco`.`produto` (`nm`, `tipo`, `val`, `dtval`, `ds`, `idforn`, `ani`) VALUES ('Prod1', 'A', '12.99', '2019-09-09', 'Descriçãoo', '1', 'Cachorro');
INSERT INTO `petiraco`.`produto` (`nm`, `tipo`, `val`, `dtval`, `ds`, `idforn`, `ani`) VALUES ('Produtinn ', 'A', '30.77', '2019-10-10', 'Opaaa', '1', 'Gato');
INSERT INTO `petiraco`.`produto` (`nm`, `tipo`, `val`, `dtval`, `ds`, `idforn`, `ani`) VALUES ('Coleira', 'A', '25.99', '2019-11-10', 'Deshu', '1', 'Gato');
INSERT INTO `petiraco`.`produto` (`nm`, `tipo`, `val`, `dtval`, `ds`, `idforn`, `ani`) VALUES ('Tesssstee', 'R', '199.99', '2019-09-01', 'hidhifdi','1' ,'Cachorro');
INSERT INTO `petiraco`.`produto` (`nm`, `tipo`, `val`, `dtval`, `ds`, `idforn`, `ani`) VALUES ('Tesssstee', 'M', '199.99', '2019-09-01', 'hidhifdi','1' ,'Cachorro');