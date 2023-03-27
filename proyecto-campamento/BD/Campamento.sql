drop database camping

    create database Camping;


    create table instructores(
        numero int primary key auto_increment,
        nombrePila varchar(30) not null,
        apellidoPat varchar (30) not null,
        apellidoMat varchar(30),
        edad int not null,
        años_experiencia integer
    );

        create table campamento(
            codigo char(5) primary key not null,
            nombre varchar (30) not null,
            fechaInicio varchar(11) not null,
            fechaFin varchar(11) not null
        );

    create table grupos(
        codigo char(3) primary key not null,
        nombre char(20) not null,
        capacidad int check(capacidad >=1 and capacidad<=25),
        campamento char(5) not null,
        foreign key (campamento) references campamento (codigo)
    );

    create table actividades(
        numero int primary key auto_increment,
        descripcion varchar(30) not null,
        duracion char(8) not null
    );

    create table estado(
        codigo char(4) primary key not null,
        nombre varchar(20) not null
    );

    create table ciudades(
        numero int primary key auto_increment not null,
        nombre varchar(20) not null,
        estado char(4) not null,
        foreign key (estado) references estado(codigo)
    );

    create table datos_medicos(
        codigo char(6) primary key not null,
        descripcion varchar(20) not null
    );

    create table admin(
        numAD int primary key auto_increment not null,
        nombrePila varchar(30) not null,
        apellidoPat varchar (30) not null,
        apellidoMat varchar (30),
        correoAD varchar(40) not null,
        passAD varchar(72) not null
    );


    create table campista(
        codigo int primary key auto_increment,
        nombrePila varchar(40) not null,
        apellidoPat varchar (30) not null,
        apellidoMat varchar (30),
        edad int check(edad >=18 and edad <=25),/*CHECAR EL NOT NULL*/
        telefono varchar (10) not null,
        correo varchar(30) not null,
        ciudad int not null,
        estado char(4) not null,
        foreign key (estado) references estado(codigo),
        foreign key(ciudad) references ciudades(numero)
    );


    create table cont_emergencia(
        numero int primary key auto_increment,
        nombrePila varchar(40) not null,
        apellidoPat varchar (30) not null,
        apellidoMat varchar (30),
        telefono varchar(10) not null,
        ciudad int not null,
        estado char(4) not null,
        foreign key (estado) references estado(codigo),
        foreign key(ciudad) references ciudades(numero)
    );


/*--------------------------------TABLAS DE MUCHOS A MUCHOS-------------------*/


    create table instructor_grupo(
        instructor int not null,
        grupo char(3) not null,
        primary key(instructor, grupo),
        foreign key(instructor) references instructores(numero),
        foreign key(grupo) references grupos(codigo)
    );

        create table campista_grupo(
            campista int not null,
            grupo char(3) not null,
             primary key(campista, grupo),
        foreign key(campista) references campista(codigo),
        foreign key(grupo) references grupos(codigo)
        );

    create table grupo_actividad(
        grupo char(3) not null,
        actividad int not null,
        primary key (grupo, actividad),
        foreign key(grupo) references grupos(codigo),
        foreign key(actividad) references actividades(numero)
    );


    create table campista_contacto(
        campista int not null,
        contacto int not null,
        primary key (campista, contacto),
        foreign key (campista) references campista(codigo),
        foreign key (contacto) references cont_emergencia(numero)
    );


    create table campista_datos(
        campista int not null,
        datos char(6) not null,
        primary key(campista, datos),
        foreign key(campista) references campista(codigo),
        foreign key(datos) references datos_medicos(codigo)
    );


                                delimiter $$
                                create trigger checkGroup
                                before insert on campista_grupo
                                for each row
                                begin
                                declare msg varchar(255);
                                declare cantGrupo integer;
                                select count(campista) into cantGrupo
                                from campista_grupo where grupo = new.grupo;
                                        if(cantGrupo = 25)
                                then
                                        set msg = concat("El grupo elegido esta lleno, porfavor elija otro");
                                                signal sqlstate "45000" set message_text = msg;
                                end if;
                                end $$
                                delimiter;
            delimiter $$
            create procedure campistaGrupos()
            begin
            select  cam.codigo as Numero, concat(cam.nombrePila,' ',cam.apellidoPat,' ',cam.apellidoMat) as Campista, 
            cam.edad as Edad, cam.telefono as Telefono, cam.correo as Correo, concat(ci.nombre,', ',cam.estado)as Ciudad, campista_grupo.grupo as Grupo
            from campista_grupo 
            right join campista as cam on campista_grupo.campista=cam.codigo
            inner join ciudades as ci on cam.ciudad=ci.numero;
            end$$
            delimiter;

            delimiter $$
            create procedure CONSULTARADMINS()
            begin
            select numAD as Codigo, concat (nombrePila,' ', apellidoPat,' ',apellidoMat) as Administrador, correoAD as Email 
            from admin;
            end$$
            delimiter;

    delimiter $$
    create procedure CONSULTARINSTRUCTORES()
    begin
    select I.numero as ID, concat(I.nombrePila,' ',I.apellidoPat,' ',I.apellidoMat) as Instructor, 
    I.edad as Edad, I.años_experiencia as Experiencia, IG.grupo as Grupos
     from instructor_grupo as IG
     right join instructores as I on I.numero=IG.instructor;
     end$$
     delimiter;
     

delimiter$$
create procedure ListaxGrupo(
    in grupo char(6)
)
begin
    select concat(cam.nombrePila, ' ', cam.apellidoPat, ' ',cam.apellidoMat) as Campista,
    cam.edad as Edad, cam.telefono as Telefono, cam.correo as Correo, ciu.nombre as Ciudad, es.nombre as Estado, cg.grupo as Grupo
    from campista as cam
    inner join campista_grupo as cg on cam.codigo = cg.campista
    inner join grupos as g on cg.grupo = g.codigo
    inner join estado as es on cam.estado = es.codigo
    inner join ciudades as ciu on cam.ciudad = ciu.numero
    where cg.grupo = grupo;
end$$
delimiter;

'Profe  ingrese a la pagina localhost/proyecto/insertarADMIN.php para ingresar un administrador y para que se realice la encriptacion y desencriptacion de la contraseña
para que ingrese a la parte administrativa... '

