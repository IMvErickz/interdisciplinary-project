INSERT INTO `categoria`(`categ_desc`) 
VALUES ('KODOMO'), 
('SHOUNEN'), 
('SHOUJO'), 
('ECCHI'), 
('YAOI'), 
('YURI'), 
('GEKIGÁ'), 
('SEINEN'), 
('JOSEI');


INSERT INTO `produto`(`prod_nm`, `prec_prod`, `categ_id`) 
VALUES ('Chainsaw Man Vol. 1',33.90,2), 
('Fire Force Vol. 27',34.90,2), 
('Demon Slayer - Kimetsu no Yaiba Vol. 8',30.90,2), 
('Jujutsu Kaisen Vol. 1',35.90,2), 
('Naruto Gold Vol. 64',27.90,2), 
('Spy x Family Vol. 6',34.90,8), 
('One Piece Vol. 101',32.90,2), 
('Food Wars Vol. 36',32.90,2);

INSERT INTO `pais`(`nm_pais`) 
VALUES ('Afeganistão'), 
('Albânia'), ('Algéria'), 
('Samoa Americana'), 
('Andorra'), 
('Angola'), 
('Brasil');

INSERT INTO `sexo`(`desc_sexo`) 
VALUES ('Masculino'), 
('Feminino');

INSERT INTO `sexo`(`desc_sexo`) VALUES ('Prefiro não declarar');

UPDATE `produto` SET `imagem` = './assets/incons/Chainsaw.png' WHERE `produto`.`cod_prod` = 1;

UPDATE `produto` SET `imagem` = './assets/incons/FireForce.png' WHERE `produto`.`cod_prod` = 2;
UPDATE `produto` SET `imagem` = './assets/incons/kimetsu.png' WHERE `produto`.`cod_prod` = 3;
UPDATE `produto` SET `imagem` = './assets/incons/Jujutsu.png' WHERE `produto`.`cod_prod` = 4;
UPDATE `produto` SET `imagem` = './assets/incons/naruto.png' WHERE `produto`.`cod_prod` = 5;
UPDATE `produto` SET `imagem` = './assets/incons/spy.png' WHERE `produto`.`cod_prod` = 6;
UPDATE `produto` SET `imagem` = './assets/incons/one.png' WHERE `produto`.`cod_prod` = 7;
UPDATE `produto` SET `imagem` = './assets/incons/food.png' WHERE `produto`.`cod_prod` = 8;
