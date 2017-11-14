CREATE SEQUENCE expositor_seq;
CREATE SEQUENCE evento_seq;
CREATE SEQUENCE endereco_seq;
CREATE SEQUENCE categoria_seq;
CREATE SEQUENCE local_seq;
CREATE SEQUENCE status_seq;
CREATE SEQUENCE municipio_seq;
CREATE SEQUENCE uf_seq;
CREATE SEQUENCE telefone_seq;
CREATE SEQUENCE email_seq;
CREATE SEQUENCE expositorevento_seq;
CREATE SEQUENCE expositorcategoria_seq;

--------------------------------------------------------------------------------

CREATE TABLE Expositor (
	id_expositor INTEGER,
	nome VARCHAR2(255) NOT NULL,
	marca VARCHAR2(255),
	url_facebook VARCHAR2(255),
	url_instagram VARCHAR2(255),
	url_site VARCHAR2(255),
	CONSTRAINT expositor_pk PRIMARY KEY (id_expositor)
);

CREATE TABLE Evento (
	id_evento INTEGER,
	nome VARCHAR2(255) NOT NULL,
	data DATE,
	id_local INTEGER NOT NULL,
	CONSTRAINT evento_pk PRIMARY KEY (id_evento)
);

CREATE TABLE Endereco (
	id_endereco INTEGER,
	rua VARCHAR2(255) NOT NULL,
	numero VARCHAR2(255) NOT NULL,
	complemento VARCHAR2(255),
	eh_principal INTEGER NOT NULL,
	id_municipio INTEGER NOT NULL,
	CONSTRAINT endereco_eh_principal_bool CHECK (eh_principal IN (0, 1)),
	CONSTRAINT endereco_pk PRIMARY KEY (id_endereco)
);

CREATE TABLE Categoria (
	id_categoria INTEGER,
	nome VARCHAR2(255) NOT NULL,
	CONSTRAINT categoria_pk PRIMARY KEY (id_categoria)
);

CREATE TABLE Local (
	id_local INTEGER,
	nome VARCHAR2(255) NOT NULL,
	localizacao VARCHAR2(1023) NOT NULL,
	notas CLOB,
	CONSTRAINT local_pk PRIMARY KEY (id_local)
);

CREATE TABLE Status (
	id_status INTEGER,
	nome VARCHAR2(255),
	CONSTRAINT status_pk PRIMARY KEY (id_status)
);

CREATE TABLE Municipio (
	id_municipio INTEGER,
	nome VARCHAR2(255) NOT NULL,
	id_uf INTEGER NOT NULL,
	CONSTRAINT municipio_pk PRIMARY KEY (id_municipio)
);

CREATE TABLE UF (
	id_uf INTEGER,
	sigla CHAR(2) NOT NULL,
	nome VARCHAR2(255) NOT NULL,
	CONSTRAINT uf_pk PRIMARY KEY (id_uf)
);

CREATE TABLE Telefone (
	id_telefone INTEGER,
	numero VARCHAR2(31) NOT NULL,
	eh_principal INTEGER NOT NULL,
	id_expositor INTEGER NOT NULL,
	CONSTRAINT telefone_eh_principal_bool CHECK (eh_principal IN (0, 1)),
	CONSTRAINT telefone_pk PRIMARY KEY (id_telefone)
);

CREATE TABLE Email (
	id_email INTEGER,
	email VARCHAR2(255) NOT NULL,
	id_expositor INTEGER NOT NULL,
	CONSTRAINT email_pk PRIMARY KEY (id_email)
);

CREATE TABLE ExpositorEvento (
	id_expositorevento INTEGER,
	presente INTEGER NOT NULL,
	quantidade_vendas INTEGER,
	id_status INTEGER NOT NULL,
	id_evento INTEGER NOT NULL,
	id_expositorcategoria INTEGER NOT NULL,
	CONSTRAINT presente_bool CHECK (presente IN (0, 1)),
	CONSTRAINT expositorevento_pk PRIMARY KEY (id_expositorevento)
);

CREATE TABLE ExpositorCategoria (
	id_expositorcategoria INTEGER,
	ativo INTEGER NOT NULL,
	id_categoria INTEGER NOT NULL,
	id_expositor INTEGER NOT NULL,
	CONSTRAINT ativo_bool CHECK (ativo IN (0, 1)),
	CONSTRAINT expositorcategoria_pk PRIMARY KEY (id_expositorcategoria)
);

--------------------------------------------------------------------------------

ALTER TABLE Evento
ADD CONSTRAINT evento_local_fk
	FOREIGN KEY (id_local)
	REFERENCES Local(id_local);

ALTER TABLE Endereco
ADD CONSTRAINT endereco_municipio_fk
	FOREIGN KEY (id_municipio)
	REFERENCES Municipio(id_municipio);
	
ALTER TABLE Municipio
ADD CONSTRAINT municipio_uf_fk
	FOREIGN KEY (id_uf)
	REFERENCES UF(id_uf);
	
ALTER TABLE Telefone
ADD CONSTRAINT telefone_expositor_fk
	FOREIGN KEY (id_expositor)
	REFERENCES Expositor(id_expositor);

ALTER TABLE Email
ADD CONSTRAINT email_expositor_fk
	FOREIGN KEY (id_expositor)
	REFERENCES Expositor(id_expositor);

ALTER TABLE ExpositorEvento
ADD CONSTRAINT expev_status_fk
	FOREIGN KEY (id_status)
	REFERENCES Status(id_status);
	
ALTER TABLE ExpositorEvento
ADD CONSTRAINT expev_evento_fk
	FOREIGN KEY (id_evento)
	REFERENCES Evento(id_evento);
	
ALTER TABLE ExpositorEvento
ADD CONSTRAINT expev_expositorcategoria_fk
	FOREIGN KEY (id_expositorcategoria)
	REFERENCES ExpositorCategoria(id_expositorcategoria);
	
ALTER TABLE ExpositorCategoria
ADD CONSTRAINT expcat_categoria_fk
	FOREIGN KEY (id_categoria)
	REFERENCES Categoria(id_categoria);
	
ALTER TABLE ExpositorCategoria
ADD CONSTRAINT expcat_expositor_fk
	FOREIGN KEY (id_expositor)
	REFERENCES Expositor(id_expositor);

