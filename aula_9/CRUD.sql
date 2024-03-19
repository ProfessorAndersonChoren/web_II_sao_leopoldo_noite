# 1° Usar o banco
use parking_sao_leopoldo_night;
# População das tabelas
insert into parking_lots (number,situation,status) values (5,'Disponível',1);
insert into parking_lots values (10,'Disponível',1);
insert into clients values ('592.504.190-90','Juliana Marli Duarte','(51) 98765-4321',1);
insert into clients values ('727.945.710-01','Tatiane Carla Emanuelly Ramos','(51) 99918-1539',1);
insert into transactions values (null,'LVM-6994','BMW','X6','Vermelho','14:00',null,null,'592.504.190-90',1,1);
insert into transactions values (null,'MZE-5906','Mercedes-Benz','GLA 200','Preto','10:00',null,null,'727.945.710-01',10,1);

# Atualização das transações
update transactions set departure_time = '19:00',amount_paid = 75 where id = 1;
update transactions set departure_time = '12:00', amount_paid = 15 where id = 2;

# Refatorando a lógica da disponibilidade da vaga
# Lógica entrada
update parking_lots set situation = 'Ocupado' where number = 1 or number = 10;
# Lógica saída
update parking_lots set situation = 'Disponível' where number = 1 or number = 10;

# Consulta simples
select number,situation from parking_lots;

# Consulta com Junção de Tabelas
select t.entry_time,t.departure_time,c.fullname from transactions t
inner join clients c on c.cpf = t.client;

select license_plate,departure_time from transactions where departure_time >= '18:00:00' order by departure_time desc;

select sum(amount_paid) as 'Receita total' from transactions;
