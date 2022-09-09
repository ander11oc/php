/* crear dos tablas

1 alumons
        nombre varchar 30
         mail varchar 70 primario
         codigo de curso foraneo de las taalba cursos
         
2 cursos codigo autoincrement 
nombre */




CREATE TABLE cursos(
	codigo int(20) AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50), 
);
CREATE TABLE usuarios(
	nombre varchar(50),
    mail varchar(50) PRIMARY KEY,
    codigo_curso int(20), 
    FOREIGN KEY(codigo_curso)REFERENCES cursos(codigo) 
);