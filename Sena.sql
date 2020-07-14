create database proyectoD;
use proyectoD;


CREATE TABLE centro(
  idCentro int primary key not null ,
  nombreCentro VARCHAR(45) NOT NULL,
  direccion varchar(50)not null
  );

create Table ambiente(
  idAmbiente int Primary key not null,
  numeroAmbiente int (10) not null,
  descripcionAmbiente varchar (80) not null,
  horaUso varchar (20) not null,
  tipoFormacion varchar (50) not null,
  capacidad varchar (50),
  idCentro int not null,
  foreign key (idCentro)
  references centro(idCentro)
  );
  
CREATE TABLE programaformacion(
  idPrograma int primary key not null,
  tipoFormacion VARCHAR(45) NOT NULL,
  duracion VARCHAR(45) NOT NULL,
  jornada VARCHAR(45) NOT NULL,
  nombrePrograma VARCHAR(45) NOT NULL,
  idCentro int not null,
  foreign key (idCentro)
  references centro(idCentro)
  );
  
create Table ficha(
  idFicha int Primary key not null,
  numeroFicha int (15) not null,
  numeroAprendices int (10) not null,
  idPrograma int not null,
  jornada varchar(80)not null,
  trimestre int not null,
  fechaInicio varchar (20) not null,
  fechaFinal varchar (20) not null,
  foreign key (idPrograma)
  references programaformacion(idPrograma)
  );
  create Table eventos(
  idEvento int Primary key auto_increment not null,
  formacion varchar (50) not null,
  ficha int (30) not null,
  competencia varchar (80) not null,
  resultado varchar(50) not null,
  ambiente varchar (50) not null,
  instructor varchar (50) not null,
  hora varchar (40) not null,
  dia varchar (20) not null,
  idFicha int not null,
  foreign key (idFicha)
  references ficha(idFicha)
  );

  
create Table competencia(
  idCompetencia int Primary key not null,
  nombreCompetencia varchar (50) not null,
  horaCompetencia varchar (20) not null,
  fase varchar (20) not null,
  cantidadResultados int (10) not null,
  idFicha int not null,
  foreign key (idFicha)
  references ficha(idFicha)
  );
  
  create Table resultado(
  idResultado int Primary key not null,
  nombreResultado varchar (50) not null,
  horasResultado varchar (20) not null);
  
create table Comp_Res (
idCompetencia int not null,
foreign key (idCompetencia)
references competencia(idCompetencia),
idResultado int not null,
foreign key (idResultado)
references resultado(idResultado)
);

create Table instructor(
  idInstructor int Primary key not null,
  nombreInstructor varchar (50) not null,
  apellidoInstructor varchar (20) not null,
  contrato varchar (20) not null,
  diponibilidad varchar (50) not null,
  especialidad varchar (40) not null,
  idCompetencia int not null,
  foreign key (idCompetencia)
  references competencia(idCompetencia)	
);

alter table programaformacion modify   nombrePrograma VARCHAR(100) NOT NULL;
alter table competencia modify nombreCompetencia varchar (300)not null;
alter table Eventos add trimestre int(1) not null;
select*from programaformacion;
select*from Eventos;


Insert INTO centro(idcentro,nombreCentro,direccion)values(1,"Diseño y metrologia","Paloquemao calle 15"),(2,"Cenigraf","Paloquemao Calle 15"); 	
Insert INTO centro(idcentro,nombreCentro,direccion)values(3,"ECCI","Caracas con 57");

INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(228106,"Tecnologo","24 meses","Diurna","Analisisydesarrollodelossistemasdeformacion",1),(223247,"Tecnico","12 meses","Diurna","Mantenimientodeautomatismosindustriales",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(401,"Tecnico","12 meses","Diurna","Sistemas",1),(402,"Tecnico","12 meses","Diurna","Porgramacion de software",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(403,"Tecnologo","36 meses","Diurno","Desarrollo y adaptación de Prótesis y Órtesis",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(404,"Tecnologo","24 meses","Diurno","Diseño de Productos Industriales",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(405,"Tecnologo","30 meses","Nocturna","Diseño de Productos Industriales",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(406,"Tecnologo","24 meses","Diurno","Diseño de Troqueles",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(407,"Tecnologo","24 meses","Diurna","Diseño de Moldes para la Transformación de Materiales Plásticos",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(408,"Tecnologo","24 meses","Diurna","Aseguramiento Metrológico Industrial",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(409,"Tecnologo","30 meses","Nocturna","Aseguramiento Metrológico Industrial",1);
INSERT INTO programaformacion(idPrograma,tipoformacion,duracion,jornada,nombreprograma,idcentro)values(410,"Tecnologo","24 meses","Nocturna","Analisis y desarrollo de los sistemas de informacion",1);

INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1835301,1835301,30,228106,"Mañana",8,"2019/03/21","2021/03/21"),(1457684,1457684,25,223247,"Mixto",4,"2020/05/28","2021/05/28");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values (501,501,30,401,"Mixto",4,"2020/02/12","2021/02/12");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1616904,1616904,30,406,"Diurno",4,"2019/12/02","2021/12/03");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1751002,1751002,25,406,"Diurno",4,"2019/12/02","2021/12/03");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1963412,1963412,30,409,"Diurno",8,"2019/09/04","2021/09/04");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1835311,1835311,25,409,"Diurno",8,"2020/02/04","2022/02/04");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1907299,1907299,25,403,"Diurno",12,"2019/03/04","2022/03/04");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1905835,1905835,30,402,"Diurno",8,"2020/03/04","2022/03/04");
INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)values(1963430,1963430,25,401,"Diurno",6,"2020/03/04","2021/03/04");


INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(22050100,"ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMADE INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE.
ELABORAR MAPAS DE PROCESOS QUE PERMITAN IDENTIFICAR LAS ÁREAS INVOLUCRADAS EN UN SISTEMA DE INFORMACIÓN","40 horas","Desarollo",4,1835301);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(290201082,UPPER("Desarrollar con lógica cableada los automatismos requeridos para la automatización de máquinas industriales."),"60 HORAS","Analisis",3,1457684);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(2201545,"PROGRAMACION ORIENTADA A OBEJETOS","50 horas","Desarrollo",6,1835301);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(2201475,"MANEJO Y DISEÑO DE BASES DE DATOS","40 horas","Desarrollo",7,1835301);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values (12541,"MANTENIMIENTO DE LOS EQUIPOS DE COMPUTO","40 horas","Mantenimiento",4,501);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(1242517,"DISEÑO Y ESTRUCTURACIONDE REDES","40 horas","Redes",3,501);
insert into competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values (502,"Ofimatica","30 Horas","Analisis",4,501);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(503,upper("Definir objetivos de diseño del producto, con base en la información obtenida de diferentes fuentes"),"94 horas",upper("Evaluar"),5,1616904);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(504,upper("Generar alternativas de solución, de acuerdo con los métodos de diseño y la documentación requerida por el cliente"),"88 Horas",upper("Ejecucion"),4,1751002);
INSERT INTO competencia(idCompetencia,nombreCompetencia,horaCompetencia,fase,cantidadResultados,idFicha)values(505,upper("REALIZAR EN EQUIPOS DE MEDICIÓN CONFIRMACIÓN METROLÓGICACUMPLIENDO PARÁMETROS DE EFECTIVIDAD OPERATIVA Se ha habilitado la compatibilidad con lectores de pantalla"),"60 horas",upper("Planeacion"),3,1835311);

INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(101,"Deivis","Morales","Contratista","38horas","Sistemas",22050100);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(102,"Jairo","Ordoñez","Fijo","48horas","Cableado",290201082);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(103,"Mario","Fernandez","Contratista","38horas","Desarrollo web",2201545);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(104,"Paola","Medina","Fijo","48horas","Bases de datos",2201475);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(105,"Salome","Muñoz","Contratista","38horas","Redes",1242517);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(106,"Daniela","Lopez","Fijo","48horas","Java",505);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(107,"sebastian","Martinez","Contratista","38horas","Desarrollo de video juegos",503);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(108,"Daniel","Castañeda","Fijo","48horas","Redes",1242517);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(109,"Felipe","Gomez","Contratista","38horas","Sistemas",22050100);
INSERT INTO instructor(idInstructor,nombreInstructor,apellidoInstructor,contrato,diponibilidad,especialidad,idCompetencia)values(110,"Jhon","Morales","Contratista","38horas","Bases de datos",503);

Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10012,102,"ambiente de computo","20horas","Presencial","42 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10018,202,"ambiente de computo","20horas","Presencial","32 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10013,303,"ambiente con equipos especializados para sistemas","20horas","Presencial","42 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10011,105,"Auditorio","12horas","Presencial","30 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10010,305,"Biblioteca","20horas","Presencial","50 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10017,110,"Laboratorio","12horas","Presencial","15 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10016,111,"Laboratorio desarrollo de video juegos","12horas","Presencial","25 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10015,112,"Laboratorio Protesis y ortesis","12horas","Presencial","20 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10014,502,"ambiente diseñado para diseño grafico","20horas","Presencial","40 personas",1);
Insert into ambiente(idAmbiente,numeroAmbiente,descripcionAmbiente,horaUso,tipoFormacion,capacidad,idCentro)values(10019,402,"ambiente con equipos especialisados para diseño","20horas","Presencial","40 personas",1);

INSERT INTO Eventos(formacion,ficha,competencia,resultado,ambiente,instructor,hora,dia,idFicha,trimestre)values("ADSI",1835301,upper("Programacion orientada a objetos"),upper("Manejo netbeans"),102,upper("Deivis Morales"),"8:00","Lunes",1835301,2);
INSERT INTO Eventos(formacion,ficha,competencia,resultado,ambiente,instructor,hora,dia,idFicha,trimestre)values("ADSI",1835301,upper("Bases de datos"),upper("Consultas Bases de datos"),103,upper("Deivis Morales"),"8:00","Lunes",1835301,5);
INSERT INTO Eventos(formacion,ficha,competencia,resultado,ambiente,instructor,hora,dia,idFicha,trimestre)values("SISTEMAS",1835301,upper("mantenimiento"),upper("Partes del pc"),103,upper("Jairo Ordoñez"),"10:00","Viernes",501,4);
INSERT INTO Eventos(formacion,ficha,competencia,resultado,ambiente,instructor,hora,dia,idFicha,trimestre)values("SISTEMAS",501,upper("Redes"),upper("Estructuracion redes"),103,upper("Jairo Ordoñez"),"08:00","Viernes",501,4);


SELECT*FROM ficha;
SELECT*FROM Eventos;
SELECT*FROM programaformacion;
SELECT*FROM instructor;
SELECT*FROM competencia;
SELECT*FROM programaFormacion;
SELECT*FROM Ambiente;
SELECT*FROM centro;

#1. mostrar las competencias  con codigo y el nombre del progragrama al que pertenece acorde  su ficha 
select competencia.idCompetencia as "Codigo Competencia", competencia.nombreCompetencia, programaformacion.idPrograma as "Codigo Programa", programaformacion.nombrePrograma ,ficha.idFicha as "Ficha" from competencia inner join ficha  on ficha.idFicha=competencia.idFicha inner join programaformacion where programaformacion.idPrograma=ficha.idPrograma ;   

 #2. mostrar de los programas que son tecnicos que comienzan este año 
 select programaformacion.nombreprograma as "Nombre Programa", programaformacion.tipoformacion as "Tipo de formacion", year(ficha.fechaInicio) as Año,ficha.Idficha as Ficha from programaformacion inner join ficha on year(ficha.fechaInicio)=2020 and programaformacion.tipoformacion="Tecnico" where  programaformacion.idPrograma=ficha.idPrograma;
 
 #3. Mostrar los programas de formacion que sus numero de id sean impares y que su formacion se tecnologa organizada de por odern alfabetico
 SELECT idPrograma as "Id Programa", Tipoformacion as "Tipo de formacion" , nombrePrograma as "Nombre del programa de formacion " FROM programaformacion WHERE idPrograma like "%1" or idPrograma like "%3" or idPrograma like "%5" or idPrograma like "%7" or idPrograma like "%9" and tipoformacion="Tecnologo" order by nombrePrograma;
 
 #4. Mostrar los instructores que su id sea para con us nombre concatenado y que su contrato contratista y que la competencia sea comienze con numero par 
 SELECT idInstructor as "Identificacion", concat(nombreInstructor," ",apellidoInstructor) as "Nombre Completo",  contrato, idCompetencia as "Competencia" from instructor WHERE contrato="Contratista" and idCompetencia like "2%" or idCompetencia like "4%" or idCompetencia like "6%" or idCompetencia like "8%" or idCompetencia like "0%";
 
 #5. Mostrar las ficha del año 2019  que ingresaron antes de diciembre, adicional agregar el trimestre del año en el que ingresaron 
 SELECT idFicha, numeroFicha As "Ficha",fechaInicio as "Fecha inicio",case when month(fechaInicio) <4 then "Primer trimestre" when month(fechaInicio) <7 then "Segundo trimestre" when month(fechaInicio)<10 then "Tercer trimestre" else "Cuarto semestre" end "Trimestre 2019"   ,idPrograma as "Programa de formacion" from ficha where year(fechaInicio)=2019 and  month(fechaInicio) <12;
 
 #6. Mostrar a los instructores por competencia a las ficha ordenados alfabeticamente por apellido 
SELECT instructor.idInstructor as "Identificacion instructor", instructor.apellidoInstructor as "Apellido", ficha.numeroFicha as "Ficha" ,competencia.nombreCompetencia as "Competencia" FROM ficha inner join competencia on competencia.idFicha=ficha.idFicha inner join instructor where instructor.idCompetencia=competencia.idCompetencia order by instructor.apellidoInstructor; 
 
 #7. Mostrar a los instructores y sus especialidades, que su disponibilidad sea de 38 horas y que su id termine en numero impar
 SELECT idInstructor, concat(nombreInstructor," ",apellidoInstructor) as "Nombre Completo", especialidad, diponibilidad FROM instructor WHERE diponibilidad="38horas" and idInstructor like "%1" or idInstructor like "%3" or idInstructor like "%5" or idInstructor like "%7" or idInstructor like "%9";
 
 #8. Mostrar por el centro de la sede externa los tecnicos y fichas que estan actualmente 
 select centro.idCentro as "Identificacion centro", centro.nombreCentro as "Centro",  programaformacion.nombrePrograma as "Nombre programa", ficha.idFicha as "Ficha" from Centro inner join programaformacion on centro.idCentro=programaformacion.idCentro inner join ficha where ficha.idPrograma=programaformacion.idPrograma and centro.idCentro=3; 
 
 #9. Mostrar los ambientes de formacion que sean laboratorios y que su capacidad se un numero impar organizados alfabeticamente 
 SELECT numeroAmbiente, descripcionAmbiente, capacidad  FROM ambiente WHERE descripcionAmbiente like "Laboratorio %"  or descripcionAmbiente like "Laboratorio%" order by descripcionAmbiente;
 
 #10. Consulta de instructores que su especialidad sea base de datos y que su contrato sea fijo 
 SELECT idInstructor as "Identificacion", concat(nombreInstructor," ",apellidoInstructor) as "Nombre Completo", especialidad, contrato FROM instructor WHERE especialidad="Bases de datos"  and contrato="Fijo";
 
 
 