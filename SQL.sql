--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: alergia_clientes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE alergia_clientes (
    cedula character varying(15) NOT NULL,
    cod_alergia character varying(10) NOT NULL
);


ALTER TABLE public.alergia_clientes OWNER TO postgres;

--
-- Name: alergia_empleados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE alergia_empleados (
    cedula character varying(15) NOT NULL,
    cod_alergia character varying(10) NOT NULL
);


ALTER TABLE public.alergia_empleados OWNER TO postgres;

--
-- Name: alergia_transportadores; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE alergia_transportadores (
    id character varying(15) NOT NULL,
    cod_alergia character varying(10) NOT NULL
);


ALTER TABLE public.alergia_transportadores OWNER TO postgres;

--
-- Name: alergias; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE alergias (
    cod_alergia character varying(10) NOT NULL,
    tipo character varying(30) NOT NULL
);


ALTER TABLE public.alergias OWNER TO postgres;

--
-- Name: certificaciones; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE certificaciones (
    cod_certificacion character varying(10) NOT NULL,
    tipo character varying(50) NOT NULL,
    grado character varying(10) NOT NULL,
    fecha_expiracion date NOT NULL
);


ALTER TABLE public.certificaciones OWNER TO postgres;

--
-- Name: ciudades; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE ciudades (
    cod_ciudad character varying(10) NOT NULL,
    nombre character varying(20) NOT NULL,
    pais character varying(20) NOT NULL
);


ALTER TABLE public.ciudades OWNER TO postgres;

--
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cliente (
    nombres character varying(50) NOT NULL,
    direccion character varying(40) NOT NULL,
    cedula character varying(15) NOT NULL,
    telefono character varying(10) NOT NULL,
    cod_ciudad character varying(10) NOT NULL,
    cod_sanguineo character varying(10) NOT NULL
);


ALTER TABLE public.cliente OWNER TO postgres;

--
-- Name: empleados; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleados (
    nombres character varying(20) NOT NULL,
    apellidos character varying(20) NOT NULL,
    cedula character varying(10) NOT NULL,
    telefono character varying(15) NOT NULL,
    cod_sanguineo character varying(10) NOT NULL,
    celular character varying(10) NOT NULL,
    direccion character varying(40) NOT NULL,
    correo character varying(30) NOT NULL,
    cod_eps character varying(10) NOT NULL,
    salario numeric(9,0) NOT NULL,
    cargo character varying(20) NOT NULL,
    fecha_ingreso date NOT NULL,
    tel_familiar character varying(10) NOT NULL,
    cod_ciudad character varying(10) NOT NULL
);


ALTER TABLE public.empleados OWNER TO postgres;

--
-- Name: empleados_certificacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE empleados_certificacion (
    cod_certificado character varying(10) NOT NULL,
    cedula character varying(15) NOT NULL
);


ALTER TABLE public.empleados_certificacion OWNER TO postgres;

--
-- Name: eps; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE eps (
    codigo_eps character varying(10) NOT NULL,
    nombre_afiliado character varying(20) NOT NULL,
    apellido_afiliado character varying(20) NOT NULL,
    telefono_afiliado character(10) NOT NULL
);


ALTER TABLE public.eps OWNER TO postgres;

--
-- Name: facturas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE facturas (
    cod_factura character varying(10) NOT NULL,
    fecha_de_compra date NOT NULL,
    total numeric(10,0) NOT NULL,
    cod_material character varying(10) NOT NULL,
    nit character varying(15) NOT NULL
);


ALTER TABLE public.facturas OWNER TO postgres;

--
-- Name: materiales_obra; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE materiales_obra (
    cod_material character varying(10) NOT NULL,
    tipo character varying(30) NOT NULL,
    material_fabricacion character varying(30) NOT NULL,
    "tamaño" character varying(30) NOT NULL
);


ALTER TABLE public.materiales_obra OWNER TO postgres;

--
-- Name: matriales_proveedores; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE matriales_proveedores (
    nit character varying(20) NOT NULL,
    cod_material character varying(10) NOT NULL
);


ALTER TABLE public.matriales_proveedores OWNER TO postgres;

--
-- Name: proveedores; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proveedores (
    nombre character varying(20) NOT NULL,
    apellidos character varying(20) NOT NULL,
    nit character varying(20) NOT NULL,
    direccion character varying(40) NOT NULL
);


ALTER TABLE public.proveedores OWNER TO postgres;

--
-- Name: tipo_sanguineo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_sanguineo (
    cod_sanguineo character varying(10) NOT NULL,
    rh character varying(5) NOT NULL,
    tipo character varying(10) NOT NULL
);


ALTER TABLE public.tipo_sanguineo OWNER TO postgres;

--
-- Name: transportadores; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE transportadores (
    nombre character varying(20) NOT NULL,
    id character varying(10) NOT NULL,
    placa character varying(10) NOT NULL,
    cod_certificacion character varying(10) NOT NULL
);


ALTER TABLE public.transportadores OWNER TO postgres;

--
-- Name: transportadores_certificacion; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE transportadores_certificacion (
    id character varying(10) NOT NULL,
    cod_certificacion character varying(10) NOT NULL
);


ALTER TABLE public.transportadores_certificacion OWNER TO postgres;

--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    id integer NOT NULL,
    usuario character varying(70) NOT NULL,
    contrasena character varying(15) NOT NULL,
    correo character varying(70) NOT NULL,
    tipo character varying(20) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO postgres;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Data for Name: alergia_clientes; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO alergia_clientes VALUES ('1005468546', '02');
INSERT INTO alergia_clientes VALUES ('1007248656', '05');
INSERT INTO alergia_clientes VALUES ('10075496548', '01');
INSERT INTO alergia_clientes VALUES ('102454821', '05');
INSERT INTO alergia_clientes VALUES ('879565431', '02');


--
-- Data for Name: alergia_empleados; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO alergia_empleados VALUES ('1005245965', '03');
INSERT INTO alergia_empleados VALUES ('985687458', '05');
INSERT INTO alergia_empleados VALUES ('1005489645', '02');
INSERT INTO alergia_empleados VALUES ('1007254464', '04');
INSERT INTO alergia_empleados VALUES ('985678964', '04');


--
-- Data for Name: alergia_transportadores; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO alergia_transportadores VALUES ('01', '05');
INSERT INTO alergia_transportadores VALUES ('02', '04');
INSERT INTO alergia_transportadores VALUES ('03', '03');
INSERT INTO alergia_transportadores VALUES ('04', '02');
INSERT INTO alergia_transportadores VALUES ('05', '01');


--
-- Data for Name: alergias; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO alergias VALUES ('01', 'Chocolate Blanco');
INSERT INTO alergias VALUES ('02', 'Acetaminofen');
INSERT INTO alergias VALUES ('03', 'Mani');
INSERT INTO alergias VALUES ('04', 'Piña');
INSERT INTO alergias VALUES ('05', 'Abejas');


--
-- Data for Name: certificaciones; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO certificaciones VALUES ('01', 'Conduccion', '3', '2025-12-05');
INSERT INTO certificaciones VALUES ('02', 'Alturas', '2', '2030-12-12');
INSERT INTO certificaciones VALUES ('03', 'Conduccion de Maquinaria Pesada', '05', '2030-12-12');
INSERT INTO certificaciones VALUES ('04', 'Altura', '5', '3000-12-12');
INSERT INTO certificaciones VALUES ('05', 'Cruz Roja', '1', '2025-06-05');


--
-- Data for Name: ciudades; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO ciudades VALUES ('01', 'Bogota', 'Colombia');
INSERT INTO ciudades VALUES ('02', 'Quito', 'Ecuador');
INSERT INTO ciudades VALUES ('03', 'San Salvador', 'El salvador');
INSERT INTO ciudades VALUES ('04', 'Santo Domingo', 'Republica Dominicana');
INSERT INTO ciudades VALUES ('05', 'Otawwa', 'Canada');


--
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO cliente VALUES ('Elizabeth Guerrero Prada', 'clla 22A N 52-45 Villanueva', '102454821', '0374564525', '05', '03');
INSERT INTO cliente VALUES ('Bernavet Linero Plata', 'Kra 12 N 25-48 La concordia', '879565431', '0379658321', '05', '01');
INSERT INTO cliente VALUES ('Jhoan David Caceres', 'Cll 35 N 32-48 Giron', '1007248656', '0379191524', '01', '03');
INSERT INTO cliente VALUES ('Juliana Estefania Torrres', 'cll 22B N 78-52 Barrio Stepen', '1005468546', '0375896452', '03', '02');
INSERT INTO cliente VALUES ('Angie Isabel Macias Tapias', 'Kra 12A N 58-32 barrio Luxemburg', '10075496548', '0379515753', '02', '05');


--
-- Data for Name: empleados; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleados VALUES ('Andres Felipe
', 'Barajas Wellman', '1007254464', '0375894458', '02', '3193570748', 'cll 35 n 20-57 FLORIDABLANCA', 'andres@hotmail.com', '01', 2000000, 'dibujante', '2000-03-15', '3152894578', '01');
INSERT INTO empleados VALUES ('Nanci Alejandra', 'Rodrigues Chaparro', '985678964', '0375896549', '03', '3165894458', 'Cll 32 N 28-78 Barrio Pablosexto', 'Nanci_72@hotmail.es', '02', 4000000, 'planificadora', '2015-07-01', '3152698454', '02');
INSERT INTO empleados VALUES ('Luisa Fernanda ', 'Osorio Gomez', '1005489645', '0375486934', '04', '3185964725', 'Cll 29 N 28-47 Edificio 2,La Esperanza', 'F_Luisa@gmail.com', '03', 1250000, 'Supervisora', '2018-10-15', '3215896456', '05');
INSERT INTO empleados VALUES ('Ana Lucia ', 'Pinto Gomez', '985687458', '0376531254', '01', '3185693254', 'Cll 48 N 78-56 Barrio Mercedez', 'Ana_Lu12@gmail.com', '04', 2000000, 'secretaria', '2019-02-01', '3216549878', '01');
INSERT INTO empleados VALUES ('Juan Esteban ', 'Aranda Gomez', '1005245965', '0375896258', '04', '3213697418', 'Kra 12 N 5-14 Barrio Libertadores', 'J-Esteban_125@hotmail.es', '05', 3500000, 'Constructor', '2000-01-15', '3186549658', '03');
INSERT INTO empleados VALUES ('ANDRES FELIPE ', 'BARAJAS WELLMAN', '107249858', '0375451254', '01', '3195874654', 'cll 35 n 20-52', 'Flipe_85@hotmail.es', '01', 52146500, 'empleado', '2019-06-18', '0374548754', '02');


--
-- Data for Name: empleados_certificacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO empleados_certificacion VALUES ('02', '1005245965');
INSERT INTO empleados_certificacion VALUES ('03', '1005489645');
INSERT INTO empleados_certificacion VALUES ('04', '1007254464');
INSERT INTO empleados_certificacion VALUES ('05', '985687458');
INSERT INTO empleados_certificacion VALUES ('03', '985678964');


--
-- Data for Name: eps; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO eps VALUES ('01', 'Andres Felipe', 'Barajas Wellman', '3193570748');
INSERT INTO eps VALUES ('02', 'Nanci Alejandra', 'Rodrigues Chaparro', '3215468794');
INSERT INTO eps VALUES ('03', 'Luisa Fernada', 'Osorio Gomez', '3165896547');
INSERT INTO eps VALUES ('04', 'Ana Lucia', 'Pinto Gomez', '3185479865');
INSERT INTO eps VALUES ('05', 'Juan Esteban', 'Aranda Gomez', '3145789654');


--
-- Data for Name: facturas; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO facturas VALUES ('2154', '2015-05-01', 1575000, '01', '0245695867');
INSERT INTO facturas VALUES ('7985', '2018-05-15', 2458000, '03', '5648646511-H');
INSERT INTO facturas VALUES ('9635', '2018-01-28', 750000, '05', '654893156-B');
INSERT INTO facturas VALUES ('7418', '2017-07-22', 500000, '04', '654893156-B');
INSERT INTO facturas VALUES ('8524', '2019-01-01', 1850000, '02', '25646983563-N');


--
-- Data for Name: materiales_obra; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO materiales_obra VALUES ('01', 'Tuberia', 'Cobre', '24 Pulgadas');
INSERT INTO materiales_obra VALUES ('02', 'Valvulas', 'Aluminio', '10 Pulgadas');
INSERT INTO materiales_obra VALUES ('03', 'varilla', 'acero corrugado', '15 metros');
INSERT INTO materiales_obra VALUES ('04', 'Llave de cierre', 'Acero inoxidable', '0.5 pulgada');
INSERT INTO materiales_obra VALUES ('05', 'rociadores contra incendio', 'Acero inoxidable', '25 milimetros');
INSERT INTO materiales_obra VALUES ('06', 'Alcantarillado', 'aluminio', '52');
INSERT INTO materiales_obra VALUES ('', '', '', '');


--
-- Data for Name: matriales_proveedores; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO matriales_proveedores VALUES ('0245695867', '01');
INSERT INTO matriales_proveedores VALUES ('25646983563-N', '02');
INSERT INTO matriales_proveedores VALUES ('4546489416-M', '03');
INSERT INTO matriales_proveedores VALUES ('5648646511-H', '01');
INSERT INTO matriales_proveedores VALUES ('654893156-B', '05');


--
-- Data for Name: proveedores; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO proveedores VALUES ('Jose Alfonso', 'Espitia Prada', '0245695867', 'cll 48 n 78-95 avenida caracas');
INSERT INTO proveedores VALUES ('Janet Cecilia', 'Caceres Wellman', '25646983563-N', 'Kra 22 N 54-85 ');
INSERT INTO proveedores VALUES ('Hervin Alonso', 'Nivia Plata', '654893156-B', 'Cll 48 N 54-32 Barrio El consuelo ');
INSERT INTO proveedores VALUES ('Edgar Macias', 'Prada Prada', '4546489416-M', 'cll 52 N 78-98 Floridablanca');
INSERT INTO proveedores VALUES ('Edwin Antonio', 'Pinto Agudelo', '5648646511-H', 'cll 72 N 28-24 Edificio 4 El diamante');
INSERT INTO proveedores VALUES ('ANDRES FELIPE ', 'BARAJAS WELLMAN', '123456', 'C');
INSERT INTO proveedores VALUES ('DIGITE EL NOMBRE', 'DIGITE LOS APELLIDOS', '', 'DIGITE LA DIRECCION');


--
-- Data for Name: tipo_sanguineo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tipo_sanguineo VALUES ('01', 'O', 'positivo');
INSERT INTO tipo_sanguineo VALUES ('02', 'O', 'negativo');
INSERT INTO tipo_sanguineo VALUES ('03', 'AB', 'positivo');
INSERT INTO tipo_sanguineo VALUES ('04', 'B', 'negativo');
INSERT INTO tipo_sanguineo VALUES ('05', 'A', 'positivo');


--
-- Data for Name: transportadores; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO transportadores VALUES ('Jorge Bastos Pineda', '01', 'ACD-032', '01');
INSERT INTO transportadores VALUES ('Jhon Steven Mendoza', '02', 'GFD-854', '01');
INSERT INTO transportadores VALUES ('Jhonatan Chaux', '03', 'BSA-457', '03');
INSERT INTO transportadores VALUES ('Camilo Marin', '04', 'GAL-137', '03');
INSERT INTO transportadores VALUES ('Ivan Mendoza', '05', 'PRR-0001', '01');
INSERT INTO transportadores VALUES ('andres', '12345', '123-XXX', '01');


--
-- Data for Name: transportadores_certificacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO transportadores_certificacion VALUES ('01', '01');
INSERT INTO transportadores_certificacion VALUES ('02', '03');
INSERT INTO transportadores_certificacion VALUES ('03', '03');
INSERT INTO transportadores_certificacion VALUES ('04', '01');
INSERT INTO transportadores_certificacion VALUES ('05', '03');


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuarios VALUES (10, 'postgres', '123456', 'flipe_11', 'Administrador');


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuarios_id_seq', 11, true);


--
-- Name: alergia_clientes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY alergia_clientes
    ADD CONSTRAINT alergia_clientes_pkey PRIMARY KEY (cedula, cod_alergia);


--
-- Name: alergia_empleados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY alergia_empleados
    ADD CONSTRAINT alergia_empleados_pkey PRIMARY KEY (cedula, cod_alergia);


--
-- Name: alergia_transportadores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY alergia_transportadores
    ADD CONSTRAINT alergia_transportadores_pkey PRIMARY KEY (id, cod_alergia);


--
-- Name: alergias_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY alergias
    ADD CONSTRAINT alergias_pkey PRIMARY KEY (cod_alergia);


--
-- Name: certificaciones_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY certificaciones
    ADD CONSTRAINT certificaciones_pkey PRIMARY KEY (cod_certificacion);


--
-- Name: ciudades_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY ciudades
    ADD CONSTRAINT ciudades_pkey PRIMARY KEY (cod_ciudad);


--
-- Name: cliente_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (cedula);


--
-- Name: empleados_certificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleados_certificacion
    ADD CONSTRAINT empleados_certificacion_pkey PRIMARY KEY (cod_certificado, cedula);


--
-- Name: empleados_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_pkey PRIMARY KEY (cedula);


--
-- Name: eps_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY eps
    ADD CONSTRAINT eps_pkey PRIMARY KEY (codigo_eps);


--
-- Name: facturas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY facturas
    ADD CONSTRAINT facturas_pkey PRIMARY KEY (cod_factura);


--
-- Name: materiales_obra_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY materiales_obra
    ADD CONSTRAINT materiales_obra_pkey PRIMARY KEY (cod_material);


--
-- Name: matriales_proveedores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY matriales_proveedores
    ADD CONSTRAINT matriales_proveedores_pkey PRIMARY KEY (nit, cod_material);


--
-- Name: proveedores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedores
    ADD CONSTRAINT proveedores_pkey PRIMARY KEY (nit);


--
-- Name: tipo_sanguineo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_sanguineo
    ADD CONSTRAINT tipo_sanguineo_pkey PRIMARY KEY (cod_sanguineo);


--
-- Name: transportadores_certificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY transportadores_certificacion
    ADD CONSTRAINT transportadores_certificacion_pkey PRIMARY KEY (id, cod_certificacion);


--
-- Name: transportadores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY transportadores
    ADD CONSTRAINT transportadores_pkey PRIMARY KEY (id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: alergia_clientes_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_clientes
    ADD CONSTRAINT alergia_clientes_cedula_fkey FOREIGN KEY (cedula) REFERENCES cliente(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alergia_clientes_cod_alergia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_clientes
    ADD CONSTRAINT alergia_clientes_cod_alergia_fkey FOREIGN KEY (cod_alergia) REFERENCES alergias(cod_alergia) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alergia_empleados_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_empleados
    ADD CONSTRAINT alergia_empleados_cedula_fkey FOREIGN KEY (cedula) REFERENCES empleados(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alergia_empleados_cod_alergia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_empleados
    ADD CONSTRAINT alergia_empleados_cod_alergia_fkey FOREIGN KEY (cod_alergia) REFERENCES alergias(cod_alergia) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alergia_transportadores_cod_alergia_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_transportadores
    ADD CONSTRAINT alergia_transportadores_cod_alergia_fkey FOREIGN KEY (cod_alergia) REFERENCES alergias(cod_alergia) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: alergia_transportadores_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alergia_transportadores
    ADD CONSTRAINT alergia_transportadores_id_fkey FOREIGN KEY (id) REFERENCES transportadores(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cliente_cod_ciudad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_cod_ciudad_fkey FOREIGN KEY (cod_ciudad) REFERENCES ciudades(cod_ciudad) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: cliente_cod_sanguineo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT cliente_cod_sanguineo_fkey FOREIGN KEY (cod_sanguineo) REFERENCES tipo_sanguineo(cod_sanguineo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleados_certificacion_cedula_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados_certificacion
    ADD CONSTRAINT empleados_certificacion_cedula_fkey FOREIGN KEY (cedula) REFERENCES empleados(cedula) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleados_certificacion_cod_certificado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados_certificacion
    ADD CONSTRAINT empleados_certificacion_cod_certificado_fkey FOREIGN KEY (cod_certificado) REFERENCES certificaciones(cod_certificacion) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleados_cod_ciudad_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_cod_ciudad_fkey FOREIGN KEY (cod_ciudad) REFERENCES ciudades(cod_ciudad) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleados_cod_eps_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_cod_eps_fkey FOREIGN KEY (cod_eps) REFERENCES eps(codigo_eps) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: empleados_cod_sanguineo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY empleados
    ADD CONSTRAINT empleados_cod_sanguineo_fkey FOREIGN KEY (cod_sanguineo) REFERENCES tipo_sanguineo(cod_sanguineo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: facturas_cod_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY facturas
    ADD CONSTRAINT facturas_cod_material_fkey FOREIGN KEY (cod_material) REFERENCES materiales_obra(cod_material) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: facturas_nit_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY facturas
    ADD CONSTRAINT facturas_nit_fkey FOREIGN KEY (nit) REFERENCES proveedores(nit) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: matriales_proveedores_cod_material_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY matriales_proveedores
    ADD CONSTRAINT matriales_proveedores_cod_material_fkey FOREIGN KEY (cod_material) REFERENCES materiales_obra(cod_material) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: matriales_proveedores_nit_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY matriales_proveedores
    ADD CONSTRAINT matriales_proveedores_nit_fkey FOREIGN KEY (nit) REFERENCES proveedores(nit) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: transportadores_certificacion_cod_certificacion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY transportadores_certificacion
    ADD CONSTRAINT transportadores_certificacion_cod_certificacion_fkey FOREIGN KEY (cod_certificacion) REFERENCES certificaciones(cod_certificacion) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: transportadores_certificacion_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY transportadores_certificacion
    ADD CONSTRAINT transportadores_certificacion_id_fkey FOREIGN KEY (id) REFERENCES transportadores(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: transportadores_cod_certificacion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY transportadores
    ADD CONSTRAINT transportadores_cod_certificacion_fkey FOREIGN KEY (cod_certificacion) REFERENCES certificaciones(cod_certificacion) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

