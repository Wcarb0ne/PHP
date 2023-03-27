create database T13_CRUD;
use T13_CRUD;

create table Usuario
(
	id_Usuario int auto_increment not null primary key,
    nome_Usuario varchar(30) not null,
    login_Usuario varchar(15) not null unique,
    senha_Usuario varchar(15) not null,
    confirmarSenha_Usuario varchar(15) not null,
    email_Usuario varchar(30) not null,
    dataNasc_Usuario date not null,
    cpf_Usuario varchar(15) not null,
    genero_Usuario varchar(50) not null,
    telefone1_Usuario varchar(15) not null,
    telefone2_Usuario varchar(15) null,
    logradouro_Usuario varchar(50) not null,
    cidade_Usuario varchar(50) not null,
    uf_Usuario varchar(50) not null,
    cep_Usuario varchar(9) not null,
    cadastro_Usuario timestamp not null,
    status_Usuario varchar(20) not null,
    obs_Usuario varchar(255) null
);
select * from Usuario;
insert into Usuario
(nome_Usuario,login_Usuario,senha_Usuario,confirmarSenha_Usuario,email_Usuario,dataNasc_Usuario,cpf_Usuario,genero_Usuario,telefone1_Usuario,telefone2_Usuario,logradouro_Usuario,cidade_Usuario,uf_Usuario,cep_Usuario,status_Usuario,obs_Usuario)
values
('Administrador','admin','123','123','adm@gmail.com','25032023','1122334455','Masculino','11983733531','','ferias','guarulhos','São Paulo','07196255','Ativo','bora')


