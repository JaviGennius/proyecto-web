/*Creacion de un usuario*/
/*CREATE USER 'hospital_felipeVI'@'localhost'  IDENTIFIED BY "1234";
GRANT ALL  PRIVILEGES ON hospital_felipe_vi.* TO "hospital_felipeVI"@"localhost";
*/
/*Creación de la Base de Datos*/
DROP DATABASE IF EXISTS Hospital_Felipe_VI;
CREATE DATABASE IF NOT EXISTS Hospital_Felipe_VI;
USE Hospital_Felipe_VI;

/*Creacción de las Tablas*/	
CREATE TABLE Pacientes(
	DNI_paciente varchar(9) PRIMARY KEY,
    Num_Historial CHAR(10) UNIQUE,
	Nombre_paciente varchar(20),
	Primer_apellido_paciente varchar(20),
	Segundo_apellido_paciente varchar(20),
	Fecha_nacimiento date, 
	Sexo ENUM("Hombre", "Mujer", "Otro"),
    Telefono_paciente int,
    Correo_paciente varchar(50),
	Cts_usuario char(255),
    Foto_usuario longblob
	);
    
CREATE TABLE Medicamentos (
   ID_medicamento int auto_increment PRIMARY KEY,
   Nombre_medicamento varchar(25)
   );
   
CREATE TABLE Enfermedades(
   ID_enfermedad int PRIMARY KEY auto_increment,
   Nombre_enfermedad varchar(25)
   );
   
CREATE TABLE Tratamientos(
   ID_Tratamiento int PRIMARY KEY auto_increment,
   Nombre_tratamiento text
   );
   
CREATE TABLE Ingresos(
   ID_ingreso int PRIMARY KEY auto_increment ,
   Fecha_alta date,
   Fecha_baja date,
   DNI_paciente varchar(9),
   ID_medicamento int,
   ID_tratamiento int,
   ID_enfermedad int,
   NIF_sanitario varchar(9)
);

CREATE TABLE Sanitarios(
	NIF_sanitario varchar (9) PRIMARY KEY,
    Nombre_Sanitario CHAR(45),
	Tipo_sanitario ENUM("Medico","Enfermero","Auxiliar"),
    Especialidad CHAR(30),
	ID_departamento int,
    Foto_sanitario longblob
	);

CREATE TABLE Departamentos (
   ID_departamento int auto_increment PRIMARY KEY,
   Nombre_departamento varchar(50),
   Descripcion_Departamento text,
   Horario char(25),
   Correo_Departamento CHAR(100),
   Telefono_Departamento int
   );
CREATE TABLE Servicios (
   ID_servicio int PRIMARY KEY auto_increment,
   Nombre_servicio varchar(100),
   ID_departamento int
   );
Create TABLE Salas (
	ID_Sala int auto_increment PRIMARY KEY,
    Sala_1 int,
    Sala_2 int,
    Sala_3 int,
	ID_Departamento int
);

Create Table Imagenes_centro (
	ID_imagen int auto_increment PRIMARY KEY,
    Imagen_centro longblob,
    Title varchar(100)
    );
    
/*Claves Ajenas*/

/*Ingresos:*/
ALTER TABLE Ingresos ADD FOREIGN KEY(DNI_paciente) REFERENCES Pacientes(DNI_paciente) ON UPDATE CASCADE ON DELETE SET NULL;   
ALTER TABLE Ingresos ADD FOREIGN KEY(ID_tratamiento) REFERENCES Tratamientos(ID_tratamiento) ON UPDATE CASCADE ON DELETE SET NULL;   
ALTER TABLE Ingresos ADD FOREIGN KEY(ID_medicamento) REFERENCES Medicamentos(ID_medicamento) ON UPDATE CASCADE ON DELETE SET NULL;   
ALTER TABLE Ingresos ADD FOREIGN KEY(ID_enfermedad) REFERENCES Enfermedades(ID_enfermedad) ON UPDATE CASCADE ON DELETE SET NULL;   
ALTER TABLE Ingresos ADD FOREIGN KEY(NIF_sanitario) REFERENCES Sanitarios(NIF_sanitario) ON UPDATE CASCADE ON DELETE SET NULL;   

/*Sanitarios*/
ALTER TABLE Sanitarios ADD FOREIGN KEY(ID_Departamento) REFERENCES Departamentos(ID_Departamento) ON UPDATE CASCADE ON DELETE SET NULL;   

/*Servicios:*/
ALTER TABLE Servicios ADD FOREIGN KEY(ID_Departamento) REFERENCES Departamentos(ID_Departamento) ON UPDATE CASCADE ON DELETE SET NULL;
/*Salas*/
ALTER TABLE Salas ADD FOREIGN KEY(ID_Departamento) REFERENCES Departamentos(ID_Departamento) ON UPDATE CASCADE ON DELETE SET NULL;
/*Insertar los Datos*/
/*Pacientes:*/
INSERT INTO Pacientes VALUES ('12345678A', '1001', 'Juan', 'Gomez', 'Perez', '1990-05-15',"Hombre", 616164011, 'juan@gmail.com', 'juanito123', '/imagenes/Persona1.jpg');
INSERT INTO Pacientes VALUES ('23456789B', '1002', 'Maria', 'Rodriguez', 'Lopez', '1985-08-22',"Mujer", 661626829, 'maria@yahoo.com', 'maria_85','/imagenes/Persona2.jpg') ;
INSERT INTO Pacientes VALUES ('34567890C', '1003', 'Carlos', 'Fernandez', 'Martinez', '1978-12-10',"Otro", 666666938, 'carlos@hotmail.com', 'cfm1978','/imagenes/Persona7.jpg');
INSERT INTO Pacientes VALUES ('45678901D', '1004', 'Laura', 'Sanchez', 'Garcia', '1995-04-03', "Mujer",669622447, 'laura@gmail.com', 'lsg95','/imagenes/Persona2.jpg');
INSERT INTO Pacientes VALUES ('56789012E', '1005', 'Roberto', 'Torres', 'Alvarez', '1980-09-27', "Hombre",606464525, 'roberto@gmail.com', 'rta80','/imagenes/Persona8.jpg');
INSERT INTO Pacientes VALUES ('67890123F', '1006', 'Ana', 'Gutierrez', 'Lopez', '1992-11-14', "Mujer",662616360, 'ana@yahoo.com', 'anaGL','/imagenes/Persona3.jpg');
INSERT INTO Pacientes VALUES ('78901234G', '1007', 'Francisco', 'Jimenez', 'Santos', '1987-07-08',"Hombre", 667161587, 'francisco@hotmail.com', 'fjs87','/imagenes/Persona9.jpg');
INSERT INTO Pacientes VALUES ('89012345H', '1008', 'Elena', 'Martinez', 'Ruiz', '1975-02-20', "Otro",636361968, 'elena@gmail.com', 'emr75','/imagenes/Persona4.jpg');
INSERT INTO Pacientes VALUES ('90123456I', '1009', 'David', 'Perez', 'Rodriguez', '1998-06-02', "Hombre",661621492, 'david@yahoo.com', 'dpr98','/imagenes/Persona9.jpg');
INSERT INTO Pacientes VALUES ('01234567J', '1010', 'Isabel', 'Sanz', 'Gomez', '1983-03-17',"Mujer" ,616451201, 'isabel@hotmail.com', 'isg83','/imagenes/Persona5.jpg');

/*Departamentos:*/
INSERT INTO DEPARTAMENTOS VALUES ("1", "Oncologia","El departamento de Oncología del Hospital Felipe VI es responsable de la evaluación, diagnóstico y tratamiento de pacientes con cáncer y tumores. Nuestro equipo de médicos y personal médico altamente calificados garantizan un tratamiento rápido a los pacientes.","8:00-16:00","oncologia@hospitalfelipeVI.org", "911234517");
INSERT INTO DEPARTAMENTOS VALUES ("2", "Cardiologia","El departamento de Cardiología del Hospital Felipe VI es responsable de la evaluación, diagnóstico y tratamiento de pacientes con problemas del sistema cardiovascular. Nuestro equipo de médicos y personal médico altamente calificados garantizan un tratamiento rápido a los pacientes.","9:00-15:30","cardiologia@hospitalfelipeVI.org", "911234567");
INSERT INTO DEPARTAMENTOS VALUES ("3", "Traumatologia","El departamento de Traumatología del Hospital Felipe VI es responsable de la evaluación, diagnóstico y tratamiento de pacientes con problemas que afectan a músculos, articulaciones y huesos, al igual que infecciones, lesiones deportivas, fracturas y problemas en las articulaciones. Nuestro equipo de médicos y personal médico altamente calificados garantizan un tratamiento rápido a los pacientes.","7:00-16:00","traumatologia@hospitalfelipeVI.org","911234589");
INSERT INTO DEPARTAMENTOS VALUES ("4", "Neurologia","El departamento de Neurología del Hospital Felipe VI es responsable de la evaluación, diagnóstico y tratamiento de pacientes con problemas del sistema nervioso. Nuestro equipo de médicos y personal médico altamente calificados garantizan un tratamiento rápido a los pacientes.","9:00-17:00","neurologia@hospitalfelipeVI.org","911234542");

/*oncologia*/

INSERT INTO Sanitarios (NIF_sanitario, Nombre_Sanitario, Tipo_sanitario, Especialidad, ID_departamento, Foto_sanitario) VALUES
    ('11111111A', 'Dr. Nicolás Urioitia', 'Medico', 'Quimioterapia', '1','/imagenes/c21.png'),
    ('22222222B', 'Dr. Paco Urrutia', 'Enfermero', 'Cualquier tipo de cáncer', '1','/imagenes/c18.jpg'),
    ('33333333C', 'Dr. Javier Espada', 'Medico', 'Terapia hormonal', '1','/imagenes/c19.jpg'),
    ('44444444D', 'Dra. Alba', 'Medico', 'Terapia biológica', '1','/imagenes/c17.jpg'),
    ('55555555E', 'Dr. Mikel Oyarzabal', 'Auxiliar', 'Oncología de radiación', '1','/imagenes/c22.jpeg'),
    ('66666666F', 'Dr. David Almendra', 'Medico', 'Cáncer en adultos', '1','/imagenes/c23.jpg');

/*cardiologia*/

INSERT INTO Sanitarios (NIF_sanitario, Nombre_Sanitario, Tipo_sanitario, Especialidad, ID_departamento, Foto_sanitario) VALUES
    ('77777777G', 'Dr. Fernando Alonso', 'Medico', 'Accidentes cardiovasculares', '2', '/imagenes/cardiologo1.jpg'),
    ('99999999H', 'Dra. Carla Fernández', 'Enfermero', 'Medicina vascular', '2', '/imagenes/c3.jpg'),
    ('10101010I', 'Dr. Antonio Herrero', 'Medico', 'Cardiología general', '2','/imagenes/c2.jpg' ),
    ('12121212J', 'Dra. Ana Sánchez', 'Medico', 'Cardiopatía congénita', '2','/imagenes/c4.png' ),
    ('13131313K', 'Dr. Carlos Rodríguez', 'Auxiliar', 'Enfermedad vascular periférica', '2','/imagenes/c5.jpeg'),
    ('14141414L', 'Dr. José Pérez', 'Medico', 'Insuficiencia cardíaca', '2','/imagenes/c6.jpg');
/*traumatologia*/

INSERT INTO Sanitarios (NIF_sanitario, Nombre_Sanitario, Tipo_sanitario, Especialidad, ID_departamento, Foto_sanitario) VALUES
    ('15151515M', 'Dr. Felipe Gimenez', 'Medico', 'Lumbalgia', '3','/imagenes/c14.jpeg'),
    ('16161616N', 'Dr. Daniel García', 'Medico', 'Fracturas de todo tipo', '3','/imagenes/c15.jpeg'),
    ('17171717O', 'Dr. José Pérez', 'Medico', 'Contracturas musculares', '3','/imagenes/c13.jpeg'),
    ('18181818P', 'Dra. Eva Hernando', 'Auxiliar', 'Las muñecas y manos', '3','/imagenes/c11.jpeg'),
    ('19191919Q', 'Dr. Carlos Rodríguez', 'Enfermero', 'La cadera', '3','/imagenes/c16.jpeg'),
    ('20202020R', 'Dra. Carla Fernandez', 'Medico', 'Sindrome del túnel carpiano', '3','/imagenes/c12.jpg');

/*neurologia*/

INSERT INTO Sanitarios (NIF_sanitario, Nombre_Sanitario, Tipo_sanitario, Especialidad, ID_departamento, Foto_sanitario) VALUES
    ('21212121S', 'Dr. Fran Gonzalez', 'Medico', 'Trastornos neurológicos', '4','/imagenes/doctor_1.jpeg'),
    ('23232323T', 'Dr. Fernando Alonso', 'Medico', 'Accidentes cerebrovasculares', '4','/imagenes/doctor_2.jpeg'),
    ('24242424U', 'Dr. Antonio Herrero', 'Auxiliar', 'Neurologia general', '4','/imagenes/doctor_3.jpeg'),
    ('25252525V', 'Dra. Ana Sánchez', 'Medico', 'Epilepsia', '4','/imagenes/c9.jpg'),
    ('26262626W', 'Dr. Carlos Rodríguez', 'Medico', 'Demencia', '4','/imagenes/c7.jpg'),
    ('27272727X', 'Dra. Carla Fernández', 'Enfermero', 'Parkinson', '4','/imagenes/c10.jpg');
/*Servicios:*/

/*Oncología:*/
INSERT INTO Servicios VALUES (1,"Diagnóstico de cualquier tipo de cáncer","1");
INSERT INTO Servicios VALUES (2,"Tratamiento, Evaluación y Administraenfermedadesdepartamentosción de quimioterapia","1");
INSERT INTO Servicios VALUES (3,"Tratamiento de terapia hormonal","1");
INSERT INTO Servicios VALUES (4,"Diagnóstico de terapia biológica","1");
INSERT INTO Servicios VALUES (5,"Diagnóstico de oncología de radiación","1");
INSERT INTO Servicios VALUES (6,"Diagnóstico de oncología quirúrgica","1");
INSERT INTO Servicios VALUES (7,"Tratamiento y Diagnóstico del cáncer en adultos","1");
INSERT INTO Servicios VALUES (8,"Diagnóstico de neurología general","1");

/*Cardiología:*/
INSERT INTO Servicios VALUES (9,"Diagnóstico trastornos cardiológicos","2");
INSERT INTO Servicios VALUES (10,"Tratamiento y Evaluación accidentes cardiovasculares","2");
INSERT INTO Servicios VALUES (11,"Tratamiento de insuficiencia cardíaca","2");
INSERT INTO Servicios VALUES (12,"Tratamiento y Diagnóstico de cardiopatía congénita","2");
INSERT INTO Servicios VALUES (13,"Tratamiento de arritmia","2");
INSERT INTO Servicios VALUES (14,"Diagnóstico Enfermedad vascular periférica","2");
INSERT INTO Servicios VALUES (15,"Diagnóstico cardiología general","2");

/*Traumatología*/
INSERT INTO Servicios VALUES (16,"Diagnóstico de lumbalgia", "3");
INSERT INTO Servicios VALUES (17,"Tratamiento y Evaluación de fracturas de todo tipo","3");
INSERT INTO Servicios VALUES (18,"Tratamiento de hernias discales","3");
INSERT INTO Servicios VALUES (19,"Tratamiento y Diagnóstico de contracturas musculares","3");
INSERT INTO Servicios VALUES (20,"Tratamiento de las muñecas y manos","3");
INSERT INTO Servicios VALUES (21,"Tratamiento de la cadera","3");
INSERT INTO Servicios VALUES (22,"Tratamiento de sindrome del túnel carpiano","3");
INSERT INTO Servicios VALUES (23,"Tratamiento de traumatología general","3");

/*Neurología:*/
INSERT INTO Servicios VALUES (24,"Diagnóstico trastornos neurológicos","4");
INSERT INTO Servicios VALUES (25,"Tratamiento y Evaluación accidentes cerebrovasculares","4");
INSERT INTO Servicios VALUES (26,"Tratamiento de TDA/TDAH","4");
INSERT INTO Servicios VALUES (27,"Tratamiento de epilepsia","4");
INSERT INTO Servicios VALUES (28,"Tratamiento y Diagnóstico de demencia","4");
INSERT INTO Servicios VALUES (29,"Tratamiento de Parkinson","4");
INSERT INTO Servicios VALUES (30,"Diagnóstico neurología general","4");

/*Enfermedades:*/
INSERT INTO Enfermedades VALUES (1,'Diabetes Tipo 2');
INSERT INTO Enfermedades VALUES (2,'Enfermedad de Alzheimer');
INSERT INTO Enfermedades VALUES (3,'Artritis Reumatoide');
INSERT INTO Enfermedades VALUES (4,'Hipertensión Arterial');
INSERT INTO Enfermedades VALUES (5,'Asma');
INSERT INTO Enfermedades VALUES (6,'Cáncer de Pulmón');

/*Medicamentos*/
INSERT INTO Medicamentos VALUES (1,'Paracetamol');
INSERT INTO Medicamentos VALUES (2,'Ibuprofeno');
INSERT INTO Medicamentos VALUES (3,'Omeprazol');
INSERT INTO Medicamentos VALUES (4,'Amoxicilina');
INSERT INTO Medicamentos VALUES (5,'Atorvastatina');
INSERT INTO Medicamentos VALUES (6,'Cetirizina');
INSERT INTO Medicamentos VALUES (7,'Metformina');
INSERT INTO Medicamentos VALUES (8,'Salbutamol');
INSERT INTO Medicamentos VALUES (9,'Lorazepam');
INSERT INTO Medicamentos VALUES (10,'Warfarina');
INSERT INTO Medicamentos VALUES (11,'Ciprofloxacino');
INSERT INTO Medicamentos VALUES (12,'Losartán');

/*Tratamientos:*/
INSERT INTO Tratamientos VALUES (1,'Tomar con alimentos para reducir posibles molestias estomacales.');
INSERT INTO Tratamientos VALUES (2,'Evitar tomar con el estómago vacío y no exceder la dosis recomendada.');
INSERT INTO Tratamientos VALUES (3,'Administrar antes de las comidas para mejorar la absorción.');
INSERT INTO Tratamientos VALUES (4,'Completar todo el curso de tratamiento, incluso si los síntomas desaparecen antes.');
INSERT INTO Tratamientos VALUES (5,'Tomar en la noche; ajustar la dosis según las indicaciones médicas.');
INSERT INTO Tratamientos VALUES (6,'Puede causar somnolencia; evitar operar maquinaria pesada.');
INSERT INTO Tratamientos VALUES (7,'Tomar con comidas para reducir posibles efectos secundarios gastrointestinales.');
INSERT INTO Tratamientos VALUES (8,'Usar según necesidad para aliviar los síntomas respiratorios.');
INSERT INTO Tratamientos VALUES (9,'Evitar el consumo de alcohol y consultar al médico si hay efectos secundarios.');
INSERT INTO Tratamientos VALUES (10,'Mantener una dieta equilibrada y realizar controles de coagulación regularmente.');
INSERT INTO Tratamientos VALUES (11,'No tomar con productos lácteos ni antiácidos; mantenerse hidratado.');
INSERT INTO Tratamientos VALUES(12,'Puede causar mareos; evitar actividades que requieran alerta hasta conocer la respuesta individual al medicamento.');

/*Ingresos:*/
INSERT INTO Ingresos VALUES ('0001', '2023-01-10', '2023-01-15', '12345678A', 1, 1, 1, '77777777G');
INSERT INTO Ingresos VALUES ('0002', '2023-02-15', '2023-02-22', '23456789B', 2, 2, 2, '99999999H');
INSERT INTO Ingresos VALUES ('0003', '2023-03-20', '2023-03-28', '34567890C', 3, 3, 3, '10101010I');
INSERT INTO Ingresos VALUES ('0004', '2023-04-25', '2023-05-02', '45678901D', 4, 4, 4, '12121212J');
INSERT INTO Ingresos VALUES ('0005', '2023-05-30', '2023-06-07', '56789012E', 5, 5, 5, '13131313K');
INSERT INTO Ingresos VALUES ('0006', '2023-06-15', '2023-06-22', '67890123F', 6, 6, 6, '14141414L');
INSERT INTO Ingresos VALUES ('0007', '2023-07-20', '2023-07-28', '78901234G', 7, 7, 1, '77777777G');
INSERT INTO Ingresos VALUES ('0008', '2023-08-25', '2023-08-31', '89012345H', 8, 8, 2, '99999999H');
INSERT INTO Ingresos VALUES ('0009', '2023-09-30', '2023-10-07', '90123456I', 9, 9, 3, '10101010I');
INSERT INTO Ingresos VALUES ('0010', '2023-10-15', '2023-10-22', '01234567J', 10, 10, 4, '12121212J');
INSERT INTO Ingresos VALUES ('0011', '2023-11-20', '2023-11-28', '12345678A', 11, 11, 5, '13131313K');
INSERT INTO Ingresos VALUES ('0012', '2023-12-25', '2024-01-02', '23456789B', 12, 12, 6, '14141414L');
INSERT INTO Ingresos VALUES ('0013', '2024-01-10', '2024-01-17', '34567890C', 1, 1, 1, '77777777G');
INSERT INTO Ingresos VALUES ('0014', '2024-02-15', '2024-02-22', '45678901D', 2, 2, 2, '99999999H');
INSERT INTO Ingresos VALUES ('0015', '2024-03-20', '2024-03-27', '56789012E', 3, 3, 3, '10101010I');
INSERT INTO Ingresos VALUES ('0016', '2024-04-25', '2024-05-02', '67890123F', 4, 4, 4, '12121212J');
INSERT INTO Ingresos VALUES ('0017', '2024-05-30', '2024-06-06', '78901234G', 5, 5, 5, '13131313K');
INSERT INTO Ingresos VALUES ('0018', '2024-06-15', '2024-06-22', '89012345H', 6, 6, 6, '14141414L');
INSERT INTO Ingresos VALUES ('0019', '2024-07-20', '2024-07-27', '90123456I', 7, 7, 1, '77777777G');
INSERT INTO Ingresos VALUES ('0020', '2024-08-25', '2024-08-31', '01234567J', 8, 8, 2, '99999999H');
INSERT INTO Ingresos VALUES ('0021', '2024-09-30', '2024-10-07', '12345678A', 9, 9, 3, '10101010I');
INSERT INTO Ingresos VALUES ('0022', '2024-10-15', '2024-10-21', '23456789B', 10, 10, 4, '12121212J');
INSERT INTO Ingresos VALUES ('0023', '2024-11-20', '2024-11-27', '34567890C', 11, 11, 5, '13131313K');
INSERT INTO Ingresos VALUES ('0024', '2024-12-25', '2025-01-01', '45678901D', 12, 12, 6, '14141414L');
INSERT INTO Ingresos VALUES ('0025', '2025-01-10', '2025-01-17', '56789012E', 1, 1, 1, '77777777G');
INSERT INTO Ingresos VALUES ('0026', '2025-02-15', '2025-02-21', '67890123F', 2, 2, 2, '99999999H');
INSERT INTO Ingresos VALUES ('0027', '2025-03-20', '2025-03-27', '78901234G', 3, 3, 3, '10101010I');
INSERT INTO Ingresos VALUES ('0028', '2025-04-25', '2025-05-01', '89012345H', 4, 4, 4, '12121212J');
INSERT INTO Ingresos VALUES ('0029', '2025-05-30', '2025-06-06', '90123456I', 5, 5, 5, '13131313K');
INSERT INTO Ingresos VALUES ('0030', '2025-06-15', '2025-06-21', '01234567J', 6, 6, 6, '14141414L');


INSERT INTO Salas VALUES (1,"104", "114","118",'1');
INSERT INTO Salas VALUES (2,"101","111","115",'2');
INSERT INTO Salas VALUES (3,"102","112","116",'4');
INSERT INTO Salas VALUES (4,"103","113","117",'3');


INSERT INTO Imagenes_centro VALUES (1, '/imagenes/hospitalslicer.png','Hospital');
INSERT INTO Imagenes_centro VALUES (2, '/imagenes/saladeingresos.png','Sala de ingresos');
INSERT INTO Imagenes_centro VALUES (3, '/imagenes/salaespera.png','Sala de espera');
INSERT INTO Imagenes_centro VALUES (4, '/imagenes/quirofano.png','Quirófano');
INSERT INTO Imagenes_centro VALUES (5, '/imagenes/personal.png','Personal');
INSERT INTO Imagenes_centro VALUES (6, '/imagenes/entradahsopital.png','Entrada de hospital');
INSERT INTO Imagenes_centro VALUES (7, '/imagenes/salaoncologia.png','Sala Oncología');
INSERT INTO Imagenes_centro VALUES (8, '/imagenes/salacardiologia.png','Sala cardiólogia');
INSERT INTO Imagenes_centro VALUES (9, '/imagenes/parking.png','Parking');