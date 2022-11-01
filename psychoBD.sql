/* Lógico_1: */
CREATE DATABASE psychoMango;

USE psychoMango;


CREATE TABLE Person (
    pes_id int PRIMARY KEY,
    pes_nome char(30),
    data_nasc date,
    fk_Endereco_cep int
);

CREATE TABLE Login (
    email char(100) PRIMARY KEY,
    password char(8),
    username char(100),
    fk_Person_pes_id int
);

CREATE TABLE Endereco (
    cep int PRIMARY KEY,
    nm_rua char(100),
    num_residencia int,
    fk_Cidade_cid_id int
);

CREATE TABLE Cidade (
    cid_id int PRIMARY KEY,
    nm_cidade char(100),
    fk_Estados_estd_id int
);

CREATE TABLE Estados (
    estd_id int PRIMARY KEY,
    nm_estado char(100),
    sg_estado char(2)
);

CREATE TABLE Produto (
    cod_prod int PRIMARY KEY,
    nm_prod char(100),
    prec_prod int,
    descricao char(100),
    fk_Categoria_categ_id int
);

CREATE TABLE Categoria (
    categ_id int PRIMARY KEY,
    nm_categ char(50)
);
 
ALTER TABLE Person ADD CONSTRAINT FK_Person_2
    FOREIGN KEY (fk_Endereco_cep)
    REFERENCES Endereco (cep)
    ON DELETE RESTRICT;
 
ALTER TABLE Login ADD CONSTRAINT FK_Login_2
    FOREIGN KEY (fk_Person_pes_id)
    REFERENCES Person (pes_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Endereco ADD CONSTRAINT FK_Endereco_2
    FOREIGN KEY (fk_Cidade_cid_id)
    REFERENCES Cidade (cid_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Cidade ADD CONSTRAINT FK_Cidade_2
    FOREIGN KEY (fk_Estados_estd_id)
    REFERENCES Estados (estd_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_2
    FOREIGN KEY (fk_Categoria_categ_id)
    REFERENCES Categoria (categ_id)
    ON DELETE RESTRICT;