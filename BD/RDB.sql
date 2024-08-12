create table if not exists Rotas(
idRota INT AUTO_INCREMENT PRIMARY KEY,
nameRota VARCHAR(50),
linkRota VARCHAR(50)
);

create table if not exists Usuarios(
idUser INT AUTO_INCREMENT PRIMARY KEY,
typeUser VARCHAR(5),
nome VARCHAR(80),
sobrenome VARCHAR(80),
email VARCHAR(150),
idFunc VARCHAR(80),
theme BIT
);

create table if not exists RdSociais(
idSocial INT AUTO_INCREMENT PRIMARY KEY,
nomeSocial VARCHAR(80),
logoSocial VARCHAR(80),
direct VARCHAR(250),
rdColor VARCHAR(500),
rdGradiente VARCHAR(1000) 
);

create table if not exists Feedback(
idFeedback INT AUTO_INCREMENT PRIMARY KEY,
nomeFunc VARCHAR(80),
sobrenomeFunc VARCHAR(80),
idFunc VARCHAR(80),
emailFunc VARCHAR(150),
assunto VARCHAR(500),
report VARCHAR(8000)
);

create table if not exists HeaderTableRastreador(
    idHeader INT AUTO_INCREMENT PRIMARY KEY,
    nameHeader VARCHAR(100)
);

create table if not exists Bobinas(
    id INT PRIMARY KEY,
    ordemProducao INT,
    linkCentroR VARCHAR(500),
    centroR VARCHAR(100),
    linkRenque VARCHAR(500),
    renque VARCHAR(100),
    ordemVendas INT,
    dataEntrega DATE,
    codigoItem VARCHAR(100),
    descricao VARCHAR(200),
    etapa VARCHAR(100),
    setor VARCHAR(50),
    localizacao VARCHAR(50),
    coluna INT,
    linha VARCHAR(5)
);

INSERT INTO RdSociais VALUES
(1, 'instagram', 'fa-brands fa-instagram', 'https://www.instagram.com/senaigrafica/', '#d6249f', 'radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)'),
(2, 'facebook', 'fa-brands fa-facebook-f', 'https://www.facebook.com/senaigrafica/?locale=pt_BR', '', '#3b5998'),
(3, 'twitter', 'fa-brands fa-twitter', 'https://twitter.com/i/flow/login?redirect_after_login=%2Fsenaigrafica', '', '#1da1f2');

INSERT INTO Rotas VALUES
(1, 'Home', './home.php'),
(2, 'Fale Conosco', './faleConosco.php'),
(3, 'Feedback', './feedback.php');

INSERT INTO Usuarios VALUES
(1, 'Admin', 'Conta', 'Teste', 'N/A', '123', 0);

INSERT INTO Feedback VALUES
(1, 'Conta', 'Teste', 1, 'N/A', 'Problema na Home', 'A home está com problemas.');

INSERT INTO HeaderTableRastreador VALUES
(1, 'Ordem'),
(2, 'ID'),
(3, 'Centro R'),
(4, 'Renque'),
(5, 'Ordem de Vendas'),
(6, 'DT. Entrega'),
(7, 'Código Item'),
(8, 'Descrição'),
(9, 'Etapa');

INSERT INTO Bobinas VALUES
(777999, 777777, './bobInfo.php', 'Ir para CentroR','./renque.php', 'Ir para Renque', 2987104, '2023-07-07', 'SPAKNCO-1SPAKNCO-1', '66444568 Choco Tort Marilan Morango 90g', 'Enviado', 'P.Q.C', 'MTZO', 6, 'B');
