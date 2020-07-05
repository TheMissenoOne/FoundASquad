

create database FAS;

use FAS;




create table tb_equipe(
cd_equipe INT NOT NULL,
qt_integrantes tinyint,
constraint pk_equipe primary key (cd_equipe)); 


create table tb_fabricante(
cd_fabricante int not null,
nm_fabricante varchar(150),
constraint pk_fabricante primary key (cd_fabricante)
); 


create table tb_categoria(
cd_categoria int not null,
nm_categoria varchar(50),
ds_categoria varchar(200),
constraint pk_categoria primary key (cd_categoria)
);


create table tb_jogo(
cd_jogo INT NOT NULL,
nm_jogo varchar (100),
dt_lancamento DATE,
cd_plataforma int,
ds_jogo varchar (500),
nm_faixa_etaria char(2),
constraint pk_jogo primary key (cd_jogo));


create table tb_funcao(
cd_funcao INT NOT NULL,
nm_funcao varchar(50),
ds_funcao varchar(500),
cd_jogo int,
constraint pk_funcao primary key (cd_funcao),
	constraint fk_funcao_jogo foreign key (cd_jogo)
		references tb_jogo (cd_jogo)
); 



create table tb_plataforma(
cd_plataforma int not null,
nm_plataforma varchar(45),
cd_fabricante int,
constraint  pk_plataforma primary key (cd_plataforma),
	constraint fk_plataforma_fabricante foreign key (cd_fabricante)
		references tb_fabricante (cd_fabricante));
  
  



create table tb_usuario(
cd_usuario INT NOT NULL,
nm_usuario varchar (100),
nm_completo varchar(100),
nm_senha varchar(20),
dt_nascimento DATE,
nm_email varchar(100),
constraint  pk_usuario primary key (cd_usuario));

create table tb_perfil(
cd_perfil int not null,
nm_nick varchar(30),
nm_rank varchar(15),
nm_pontuacao varchar(30),
ic_buscando boolean,
cd_funcao int,
cd_usuario int,
constraint  pk_perfil primary key (cd_perfil),
constraint fk_perfil_funcao foreign key (cd_funcao)
	references tb_funcao(cd_funcao),
constraint fk_perfil_usuario foreign key (cd_usuario)
	references tb_usuario(cd_usuario)
				
);

create table item_perfil_equipe(
cd_perfil int,
cd_equipe int,
ic_qualidade boolean,
constraint fk_item_perfil foreign key (cd_perfil)
	references tb_perfil(cd_perfil),
		constraint fk_item_equipe foreign key (cd_equipe)
			references tb_equipe(cd_equipe));


create table item_categoria_jogo(
cd_jogo int,
cd_categoria int,
constraint fk_catJogo_jogo foreign key (cd_jogo)
	references tb_jogo(cd_jogo),
		constraint fk_catJogo_categoria foreign key (cd_categoria)
			references tb_categoria(cd_categoria)
);



insert into tb_fabricante(cd_fabricante, nm_fabricante) values
(1, 'Microsoft');

insert into tb_plataforma(cd_plataforma, nm_plataforma, cd_fabricante) values 
(1, 'Windows', 1);

insert into tb_jogo (cd_jogo,nm_jogo,dt_lancamento,cd_plataforma,ds_jogo,nm_faixa_etaria) values 
(1, 'OverWatch','2016-03-24',1,'Tiro em primeira pessoa competitivo',12);

insert into tb_funcao (cd_funcao, nm_funcao, ds_funcao, cd_jogo) values
(1,'Ofensivo',' Personagens ofensivos têm alta mobilidade e são conhecidos por sua capacidade de causar grandes quantidades de dano. Para equilibrar isso, personagens ofensivos têm um baixo número de pontos de vida.',1),
(2,'Defensivo','Personagens defensivos se sobressaem em proteger locais específicos e na criação de pontos de obstrução. Eles também podem fornecer vários auxílios de campo, tais como torres-sentinela e armadilhas.',1),
(3,'Tanque','Personagens Tanque são os que mais possuem pontos de vida. Devido a isso, eles são capazes de chamar a atenção do inimigo para longe de seus companheiros de equipe, também como para atrapalhar o time inimigo.',1),
(4,'Suporte','Personagens de Suporte são personagens que têm habilidades que melhoram a sua própria equipe e/ou enfraquecem o inimigo. Eles podem não ser os que causam mais dano ou possuem mais pontos de vida, mas os buffs e debuffs que fornecem garantem que seus companheiros de equipe tenham menos trabalho para lidar com adversários.',1);


insert into tb_usuario (cd_usuario,nm_usuario,nm_completo,nm_senha,dt_nascimento,nm_email)values
(1,'Vfms','Vitor Misseno','12345678','2000-01-01','vfms2000@gmail.com'),
(2,'SirRupus','Eduardo Lourenço da Silva','12345678','2000-01-01','eduardo.silva11@icloud.com'),
(3,'GGizao2000','Lucas Abdalla','12345678','2000-01-01','lucas.abdalla@gmail.com'),
(4,'SuaMaeJa','Pedro Henrique','12345678','2000-01-01','pedro.moreira@hotmail.com'),
(5,'Mandela','Mandela Silva','12345678','2000-01-01','mandela2000@mail.com'),
(6,'DinoSsauro','Lucas Carvalho','12345678','2000-01-01','lukinhas@gmail.com'),
(7,'RangerRosa','João Marcelo','12345678','2000-01-01','joaomarcelomarcelinho@gmail.com'),
(8,'Kripta','Bruna Andrade','12345678','2000-01-01','japa@gmail.com'),
(9,'Atomo','Lucas Araujo','12345678','2000-01-01','atomo.andrade@gmail.com'),
(10,'Rosa','Rosana Oliveira','12345678','2000-01-01','rosa.desbotada@gmail.com'),
(11,'NegroSupremo','Pablo Luis','12345678','2000-01-01','luis.zicado@gmail.com'),
(12,'Kibi','Paulo Marques','12345678','2000-01-01','paulo.carvalho@gmail.com'),
(13,'Darlam','Diego Freitas','12345678','2000-01-01','diego.freitas@gmail.com'),
(14,'PrumaTerrestre','Bruno Moreira','12345678','2000-01-01','bruno.moreira@gmail.com'),
(15,'Carlinhos','Carlos Victor','12345678','2000-01-01','carlos.victor@gmail.com');

insert into tb_perfil (cd_perfil, nm_nick, nm_rank, nm_pontuacao, cd_funcao,cd_usuario) values
(1,'Starkiller-1642',null,null,1,1),
(2,'barbara-11328',null,null,2,2),
(3,'firebathero#11133',null,null,3,3),
(4,'firebathero-11133',null,null,4,4),
(5,'Skyluro-1234',null,null,3,5);

insert into tb_equipe (cd_equipe, qt_integrantes) values 
(1,4),
(2,4);

insert into tb_categoria (cd_categoria,nm_categoria,ds_categoria) values 
(1,'FPS', 'Jogo de tiro em primeira pessoa');

insert into item_categoria_jogo (cd_jogo, cd_categoria) values 
(1,1);

insert into item_perfil_equipe (cd_perfil,cd_equipe,ic_qualidade) values
(1,1,true),
(2,1,true),
(3,1,true),
(4,1,true),
(5,2,false);
