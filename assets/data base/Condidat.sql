
create database Opale;
create table Opale.condidats
(
Id integer auto_increment primary key,
Firstname varchar(30),
Secondname varchar(30),
Appdata date,
email varchar(100),
tele varchar(20),
Adresse varchar(100),
nasdata date,
cv BLOB
);
Alter table Opale.condidats add column position varchar(50);
alter table Opale.condidats modify column cv text;
/**/
Alter table Opale.condidats add column etat varchar(50);
SET SQL_SAFE_UPDATES = 0;
update Opale.condidats set etat="wait" where Id=Id;

alter table Opale.condidats modify column nasdata varchar(30);
alter table Opale.condidats modify column Appdata varchar(30);
alter table Opale.condidats modify column Appdata date;
alter table Opale.condidats modify column nasdata date;
alter table Opale.condidats add column motvlettre BLOB;

select * from Opale.condidats;



create table Opale.employers
(
nom varchar(50),
email varchar(50),
datenaiss date,
poste varchar(170),
prix float,
ville varchar(50),
situation varchar(130));
alter table Opale.employers add column id integer primary key auto_increment;



alter table Opale.employers add column emplidentifiant integer;
alter table Opale.employers add column image varchar(100);
UPDATE Opale.employers set image='employeprofil.png' where emplidentifiant='OPL-12345';
alter table Opale.employers modify column emplidentifiant varchar(30);
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('Sami Haroun','SamiHaroun@gmail.com','1990-12-05','Administrateur des ventes',7500.00,'Mekness','Marié','OPL-12345','2015-04-02');
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('Mohammed Jamal','JamalMed@gmail.com','1995-01-22','Marketing Degital',8000.00,'Mekness','Marié','OPL-12465','2020-10-21');
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('Hiba Irshad','IrshadHeba@gmail.com','1992-05-18','Marketing Degital',8000.00,'Mekness','Marié','OPL-12523','2021-07-25');
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('Tuqa Twil','TWILToqa@gmail.com','1998-12-12','Développeur Full Stack',9500.00,'Fes','Celibataire','OPL-12489','2022-02-01');
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('marwan El-ahmadi','ELahmadiMar@gmail.com','1990-06-18','Graphic designer',9600.00,'casablanca','Marié','OPL-12325','2017-03-01');
insert into Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut) values('Said Skhiri','SakhiSaid@gmail.com','1990-05-28','responsable RH',9800.00,'Mekness','Marié','OPL-12534','2016-10-01');

update Opale.employers set datedebut="2017-10-01" where emplidentifiant="OPL-12534";
SET SQL_SAFE_UPDATES = 0;
create table Opale.RHinfo
(
nom varchar(50),
matricule varchar(30),
passwrd varchar(200)
);
alter table Opale.RHinfo add column id integer primary key auto_increment;
select * from Opale.RHinfo;
describe Opale.RHinfo;
insert into Opale.RHinfo (nom,matricule,passwrd) values ('Said Skhiri','OPL-12534','RHpasswordSaid');


alter table Opale.employers add column datedebut date;

create table Opale.annances
(
id integer primary key auto_increment,
title varchar(100),
contenu varchar(500)
);
select * from Opale.annances;
insert into Opale.annances (title,contenu) values ('Titre annance 1','Contenu annance 1');
delete from Opale.annances where id in(10);
create table Opale.dommandes(
id integer primary key auto_increment,
period integer,
datedeb date,
datefin date,
type varchar(100)
);
alter table Opale.dommandes add column empname varchar(50);
alter table Opale.dommandes add column matricule varchar(50);
alter table Opale.dommandes add column status varchar(3); /* soit V soit F*/
update Opale.dommandes set  status="V" where id=3;
update Opale.dommandes set  status="F" where id=3;
select * from Opale.dommandes;
update Opale.condidats set etat="wait" where id=9;





