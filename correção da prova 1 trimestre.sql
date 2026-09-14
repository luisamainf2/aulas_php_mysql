create database escola_prova;
use escola_prova;

create table alunos(
	matricula int primary key auto_increment,
    nome varchar(100),
    genero char(1),
    idade int
);

insert into alunos(nome, sexo, idade) values
('marcelo medeiros', 'M', 35),
('ana paula berlim', 'F', 25),
('lucas silva', 'M', 7),
('caroline silva','F',19),
('djalma medeiros', 'M', 65),
('arthur paes','M',6),
('eduarda duda','F', 8);

-- 10
select * from alunos where sexo = 'M';

-- 11
select * from alunos where nome like '%medeiros%' order by idade;

-- 12
select avg(idade) from alunos;

-- 13
select max(idade) from alunos;

-- 14
select count(nome) as qtd_alunos from alunos where idade < 20;

-- 15
select nome, idade from alunos
where idade = (select min(idade) from alunos);

-- 16
select count(nome) from alunos where idade > 10 and idade < 20;

-- 17
select count(sexo) from alunos where sexo = 'F';

-- 18
select sexo, count(sexo) from alunos group by sexo;
select * from alunos;

-- 19
update alunos
set idade = 20
where matricula = 4;

select * from alunos;

-- 20
delete from alunos where matricula = 5;

select 
	p.nomw_atributo,
    v.nome_atributo
from produto p 
join vendas v
on p.   
