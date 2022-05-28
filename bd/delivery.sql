CREATE DATABASE delivery;
use delivery;
CREATE TABLE CLIENTE (
    id int(5) PRIMARY KEY auto_increment not null,
    telefone int(11) not null,
    endereco varchar(80) not null,
    nome varchar(60) not null
);

CREATE TABLE PEDIDO (
    qtde int(2) not null,
    formadepgto varchar(10) not null,
    id int(5) PRIMARY KEY auto_increment not null,
    status varchar(10) not null
);

CREATE TABLE PRODUTO (
    nome varchar(60) not null,
    preco float(4) not null,
    id int(5) PRIMARY KEY auto_increment not null
);

CREATE TABLE MOTOBOY (
    nome varchar(60) not null,
    telefone int(11) not null,
    cpf int(11) PRIMARY KEY not null,
    dataehora datetime not null
);

CREATE TABLE ESTOQUE (
    nome varchar(60) not null,
    qtde float(4) not null,
    peso float(4),
    id int(5) PRIMARY KEY auto_increment not null
);

CREATE TABLE ADMINISTRADOR (
    nome varchar(60) not null,
    id int(5) PRIMARY KEY auto_increment not null
);

CREATE TABLE REALIZA (
    FK_PEDIDO_id int(5) not null,
    FK_CLIENTE_id int(5) not null,
    dataehora datetime PRIMARY KEY not null
);

CREATE TABLE CONTEM (
    FK_PEDIDO_id int(5),
    FK_PRODUTO_id int(5)
);

CREATE TABLE ENTREGA (
    FK_PEDIDO_id int(5),
    FK_MOTOBOY_cpf int(11),
    dataehora datetime PRIMARY KEY not null,
    taxa float(4) not null
);

CREATE TABLE DIMINUI (
    FK_PRODUTO_id int(5) not null,
    FK_ESTOQUE_id int(5) not null
);

CREATE TABLE CADASTRA_M (
    FK_ADMINISTRADOR_id int(5) not null,
    FK_MOTOBOY_cpf int(11) not null,
    dataehora datetime PRIMARY KEY not null
);

CREATE TABLE CADASTRA_E (
    FK_ADMINISTRADOR_id int(5) not null,
    FK_ESTOQUE_id int(5) not null,
    dataehora datetime PRIMARY KEY not null
);
 
ALTER TABLE REALIZA ADD CONSTRAINT FK_REALIZA_1
    FOREIGN KEY (FK_PEDIDO_id)
    REFERENCES PEDIDO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE REALIZA ADD CONSTRAINT FK_REALIZA_2
    FOREIGN KEY (FK_CLIENTE_id)
    REFERENCES CLIENTE (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CONTEM ADD CONSTRAINT FK_CONTEM_1
    FOREIGN KEY (FK_PEDIDO_id)
    REFERENCES PEDIDO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CONTEM ADD CONSTRAINT FK_CONTEM_2
    FOREIGN KEY (FK_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE ENTREGA ADD CONSTRAINT FK_ENTREGA_1
    FOREIGN KEY (FK_PEDIDO_id)
    REFERENCES PEDIDO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE ENTREGA ADD CONSTRAINT FK_ENTREGA_2
    FOREIGN KEY (FK_MOTOBOY_cpf)
    REFERENCES MOTOBOY (cpf)
    ON DELETE RESTRICT;
 
ALTER TABLE DIMINUI ADD CONSTRAINT FK_DIMINUI_1
    FOREIGN KEY (FK_PRODUTO_id)
    REFERENCES PRODUTO (id)
    ON DELETE RESTRICT;
 
ALTER TABLE DIMINUI ADD CONSTRAINT FK_DIMINUI_2
    FOREIGN KEY (FK_ESTOQUE_id)
    REFERENCES ESTOQUE (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CADASTRA_M ADD CONSTRAINT FK_CADASTRA_M_1
    FOREIGN KEY (FK_ADMINISTRADOR_id)
    REFERENCES ADMINISTRADOR (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CADASTRA_M ADD CONSTRAINT FK_CADASTRA_M_2
    FOREIGN KEY (FK_MOTOBOY_cpf)
    REFERENCES MOTOBOY (cpf)
    ON DELETE RESTRICT;
 
ALTER TABLE CADASTRA_E ADD CONSTRAINT FK_CADASTRA_E_1
    FOREIGN KEY (FK_ADMINISTRADOR_id)
    REFERENCES ADMINISTRADOR (id)
    ON DELETE RESTRICT;
 
ALTER TABLE CADASTRA_E ADD CONSTRAINT FK_CADASTRA_E_2
    FOREIGN KEY (FK_ESTOQUE_id)
    REFERENCES ESTOQUE (id)
    ON DELETE RESTRICT;