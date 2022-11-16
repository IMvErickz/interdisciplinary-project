/* Logico: */

CREATE DATABASE psychomango;

USE psychomango;

/* Lógico_1: */


CREATE TABLE Endereco (
    cep int PRIMARY KEY,
    nm_rua char(100),
    num_residencia int,
    cid_id int
);

CREATE TABLE Cidade (
    cid_id int PRIMARY KEY,
    nm_cidade char(100),
    estd_id int
);

CREATE TABLE Estados (
    estd_id int PRIMARY KEY,
    nm_estado char(100),
    sg_estado char(2),
    id_pais int
);

CREATE TABLE Produto (
    cod_prod int PRIMARY KEY,
    prod_nm char(100),
    prec_prod int,
    categ_id int
);

CREATE TABLE Categoria (
    categ_id int PRIMARY KEY,
    categ_desc char(50)
);

CREATE TABLE pais (
    id_pais int PRIMARY KEY not null AUTO_INCREMENT,
    nm_pais char(100)
);

CREATE TABLE Carrinho_Person (
    car_id int not null AUTO_INCREMENT,
    cod_prod int,
    pes_id int,
    pes_nome char(30),
    data_nasc date,
    email char(100),
    password char(8),
    cep int,
    PRIMARY KEY (car_id, pes_id)
);
 
ALTER TABLE Endereco 
    FOREIGN KEY (cid_id)
    REFERENCES Cidade (cid_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Cidade 
    FOREIGN KEY (estd_id)
    REFERENCES Estados (estd_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Estados 
    FOREIGN KEY (id_pais)
    REFERENCES pais (id_pais)
    ON DELETE RESTRICT;
 
ALTER TABLE Produto 
    FOREIGN KEY (categ_id)
    REFERENCES Categoria (categ_id)
    ON DELETE RESTRICT;
 
ALTER TABLE Carrinho_Person 
    FOREIGN KEY (cod_prod)
    REFERENCES Produto (cod_prod)
    ON DELETE RESTRICT;
 
ALTER TABLE Carrinho_Person 
    FOREIGN KEY (cep)
    REFERENCES Endereco (cep);