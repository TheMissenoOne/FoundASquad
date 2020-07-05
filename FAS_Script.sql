
create database FAS;

use FAS;


create table tb_rank(
cd_rank int not null,
nm_rank varchar(20),
constraint pk_rank primary key (cd_rank) 
);

create table tb_funcao(
cd_funcao INT NOT NULL,
nm_funcao varchar(50),
ds_funcao varchar(500),
constraint pk_funcao primary key (cd_funcao)
);  

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

create table tb_equipe(
cd_equipe INT NOT NULL,
qt_integrantes tinyint,
cd_jogo int,
constraint pk_equipe primary key (cd_equipe),
	constraint fk_equipe_jogo foreign key (cd_jogo)
		references tb_jogo(cd_jogo));
        
create table tb_usuario(
cd_usuario INT NOT NULL,
nm_usuario varchar (100),
nm_completo varchar(100),
nm_senha varchar(20),
dt_nascimento DATE,
nm_email varchar(100),
cd_rank int,

constraint  pk_usuario primary key (cd_usuario),
constraint fk_usuario_rank foreign key (cd_rank)
					references tb_rank (cd_rank));
                    
create table tb_plataforma(
cd_plataforma int not null,
nm_plataforma varchar(45),
cd_fabricante int,
constraint  pk_plataforma primary key (cd_plataforma),
constraint fk_plataforma_fabricante foreign key (cd_fabricante)
		references tb_fabricante (cd_fabricante)
);
                    
create table item_usuario_equipe(
cd_usuario int,
cd_equipe int,
cd_funcao int,
nm_nick varchar(30),
constraint fk_usuarioEquipe_usuario foreign key (cd_usuario)
	references tb_usuario(cd_usuario),
    constraint fk_usuarioEquipe_funcao foreign key (cd_funcao)
		references tb_funcao(cd_funcao),
			constraint fk_usuarioEquipe_equipe foreign key (cd_equipe)
				references tb_equipe (cd_equipe)
);

create table item_categoria_jogo(
cd_jogo int,
cd_categoria int,
constraint fk_catJogo_jogo foreign key (cd_jogo)
	references tb_jogo(cd_jogo),
constraint fk_catJogo_categoria foreign key (cd_categoria)
		references tb_categoria(cd_categoria)
);



                    

insert into tb_funcao values
(1,'Top-laner','As responsabilidades de um top laner incluem evitar invasões do jungler inimigo no início da partida, colocar sentinelas na parte superior do mapa, ajudar seu jungler caso ele comece pelo buff mais próximo da top lane, destruir as torres da top lane inimiga, eventualmente ajudar a rota central quando as tropas aliadas no topo estiverem avançadas e proteger os carries do time em team fights.'),
(2,'Jungler','Está sempre ajudando seus aliados a conseguir kills ou forçar o uso de feitiços de invocador dos inimigos, aliviando a pressão deles na rota. E enquanto fazem isso, eles ainda precisam prestar atenção no jungler do time inimigo, tentando prever seus movimentos para fazer counter-ganks, ou seja, ajudar seus aliados no momento em que o jungler inimigo aparecer para emboscá-los.'),
(3,'Mid-laner','São muito importantes em team fights seguindo dois padrões de comportamento: os do tipo Assassin que devem focar alvos de alta prioridade e matá-los, e os “magos” que são capazes de dar muito dano geralmente com efeitos em área. Sendo assim, é preciso reconhecer oportunidades valiosas e usar essas habilidades para causar prejuízo a todo o time adversário, especialmente quando estão todos próximos uns aos outros.'),
(4,'Atirador','O atirador é um dos personagens mais importantes do jogo, mas sem dúvida nenhuma é o mais frágil e o mais focado durante as team fights. São geralmente campeões que atacam à longa distância, que fazem itens caros e que tem como responsabilidade principal causar o máximo de dano possível no time inimigo.'),
(5,'Suporte','Importante para proteger o time, mesmo que morra no processo, deve fazer itens de auras, dando buffs para todo o time, ou de tanker para proteger, deve iniciar team fights, ou interromper o avanço dos inimigos, e ainda facilitar kills para o atirador.');




insert into tb_rank values
(1,'Bronze V'),
(2,'Bronze IV'),
(3,'Bronze III'),
(4,'Bronze II'),
(5,'Bronze I'),
(6,'Prata V'),
(7,'Prata IV'),
(8,'Prata III'),
(9,'Prata II'),
(10,'Prata I'),
(11,'Ouro V'),
(12,'Ouro IV'),
(13,'Ouro III'),
(14,'Ouro II'),
(15,'Ouro I'),
(16,'Platina V'),
(17,'Platina IV'),
(18,'Platina III'),
(19,'Platina II'),
(20,'Platina I'),
(21,'Diamante V'),
(22,'Diamante IV'),
(23,'Diamante III'),
(24,'Diamante II'),
(25,'Diamante I'),
(26,'Mestre'),
(27,'Desafiante');