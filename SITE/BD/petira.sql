create database petiraco;
use petiraco;

create table tipopess(id int primary key auto_increment,
					  ds boolean not null
);

create table cliente(id int primary key auto_increment,
					 nm varchar(15) not null,
                     sobrenm varchar(15) not null,
                     sexo boolean not null,
                     cpf varchar(14) not null,
                     idpess int,
                     dsend varchar(500),
					 email varchar(30),
                     constraint fk_id_id foreign key (idpess) references tipopess(id) 
);

create table funcionario(id int primary key auto_increment,
						 nm varchar(15) not null,
						 sobrenm varchar(15) not null,
                         sexo boolean not null,
						 cpf varchar(14) not null,
						 rg varchar(14) not null,
                         idpess int,
						 dsend varchar(500),
						 email varchar(30),
                         sal varchar(6),
                         funcao varchar(20),
                         constraint fk_id7_id2 foreign key (idpess) references tipopess(id) 
);

create table produto(id int primary key auto_increment,
					 nm varchar(15) not null,
                     tipo varchar(10) not null,
                     val varchar(6) not null,
                     dtval date not null,
                     ds varchar(20) not null
);

create table fornecedor(id int primary key auto_increment,
						 nm varchar(30) not null,
						 cnpj varchar(14) not null,
                         idpess int,
						 dsend varchar(500) not null,
						 email varchar(30) not null,
                         idprod int,
                         constraint fk_id3_id4 foreign key (idpess) references tipopess(id),
                         constraint fk_id5_id6 foreign key (idprod) references produto(id)
);

/*create table venda(id int primary key auto_increment,
				   dtven date not null,
                   valtotal varchar(10) not null,
                   idcli int,
                   idfunc int,
                   constraint fk_id_id foreign key (idcli) references cliente(id),
				   constraint fk_id_id foreign key (idfunc) references funcionario(id)
);

create table venda_item(id int primary key auto_increment,
						qntd*/
                        
create table servico(id int primary key auto_increment,
					 tipo varchar(10) not null,
                     tipoani varchar(7) not null,
                     valortotal varchar(6) not null,
                     idcli int,
                     idfunc int,
                     constraint fk_id8_id9 foreign key (idcli) references cliente(id),
				     constraint fk_id10_id11 foreign key (idfunc) references funcionario(id)
);