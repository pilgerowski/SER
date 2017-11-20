insert into Status (id_status, nome) values (status_seq.nextval, 'Isento');
insert into Status (id_status, nome) values (status_seq.nextval, 'No dia');
insert into Status (id_status, nome) values (status_seq.nextval, 'Débito');

insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'AC', 'Acre');
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'AL', 'Alagoas');
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'AP', 'Amapá');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'AM', 'Amazonas');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'BA', 'Bahia');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'CE', 'Ceará');	 
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'DF', 'Distrito Federal');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'ES', 'Espírito Santo');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'GO', 'Goiás');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'MA', 'Maranhão');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'MT', 'Mato Grosso');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'MS', 'Mato Grosso do Sul');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'MG', 'Minas Gerais');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'PA', 'Pará');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'PB', 'Paraíba');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'PR', 'Paraná');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'PE', 'Pernambuco');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'PI', 'Piauí');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'RJ', 'Rio de Janeiro');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'RN', 'Rio Grande do Norte');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'RS', 'Rio Grande do Sul');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'RO', 'Rondônia');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'RR', 'Roraima');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'SC', 'Santa Catarina');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'SP', 'São Paulo');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'SE', 'Sergipe');	
insert into uf (id_uf, sigla, nome) values (uf_seq.nextval, 'TO', 'Tocantins');	

insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Porto Alegre', (select id_uf from uf where sigla = 'RS'));	
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Esteio', (select id_uf from uf where sigla = 'RS'));	
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Canoas', (select id_uf from uf where sigla = 'RS'));	
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Alvorada', (select id_uf from uf where sigla = 'RS'));	
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Cachoeirinha', (select id_uf from uf where sigla = 'RS'));
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Eldorado do Sul', (select id_uf from uf where sigla = 'RS'));
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Nova Santa Rita', (select id_uf from uf where sigla = 'RS'));
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Triunfo', (select id_uf from uf where sigla = 'RS'));
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Viamão', (select id_uf from uf where sigla = 'RS'));	
insert into municipio (id_municipio, nome, id_uf) values (municipio_seq.nextval, 'Guaiba', (select id_uf from uf where sigla = 'RS'));

insert into local (id_local, nome, localizacao, notas) values (local_seq.nextval, 'Viaduto Otávio da Rocha', 'Av. Borges de Medeiros esquina com a Rua Duque de Caxias', 'Foods trucks e banheiros químicos ficam na parte superior, na rua Duque de Caxias.');
insert into local (id_local, nome, localizacao, notas) values (local_seq.nextval, 'Praça Isabel a Católica', 'Na Av. Borges de Medeiros junto ao Pão dos Pobres', '');
insert into local (id_local, nome, localizacao, notas) values (local_seq.nextval, 'Praça Itália', 'Entre a Av. Borges de Medeiros e a Av. Praia de Belas, ao lado do Shopping Praia de Belas', '');
insert into local (id_local, nome, localizacao, notas) values (local_seq.nextval, 'Praça Garibaldi', 'Esquina da Av. Venâncio Aires com a Rua José do Patrocínio', '');

insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Acessórios');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Artes');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Autoral');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Bebidas');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Brechó');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Cerveja');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Comidas');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Doces');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Food Truck');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Pets');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Variedades');
insert into categoria (id_categoria, nome) values (categoria_seq.nextval, 'Vestuário');

insert into evento (id_evento, nome, data, id_local) values (evento_seq.nextval, 'Feira JAdore #1', TO_DATE('2010/05/03 13:00:00', 'yyyy/mm/dd hh24:mi:ss'), 1);
insert into evento (id_evento, nome, data, id_local) values (evento_seq.nextval, 'Feira JAdore #2', TO_DATE('2010/07/03 13:00:00', 'yyyy/mm/dd hh24:mi:ss'), 2);
insert into evento (id_evento, nome, data, id_local) values (evento_seq.nextval, 'Feira JAdore #3', TO_DATE('2010/09/03 13:00:00', 'yyyy/mm/dd hh24:mi:ss'), 3);

insert into expositor (id_expositor, nome, marca, url_site, url_facebook, url_instagram) values (expositor_seq.nextval, 'João das Couves', 'DasCouves', 'http://www.dascouves.com.br', '', '');
insert into expositor (id_expositor, nome, marca, url_site, url_facebook, url_instagram) values (expositor_seq.nextval, 'Maria Fulô', 'Maria Fulô', '', 'http://facebook.com/MariaFulo', '');

insert into endereco (id_endereco, rua, numero, complemento, eh_principal, id_municipio, id_expositor) values (endereco_seq.nextval, 'Av. Borges de Medeiros', '101', '', 1, 1, 1);
insert into endereco (id_endereco, rua, numero, complemento, eh_principal, id_municipio, id_expositor) values (endereco_seq.nextval, 'Av. Praia de Belas', '102', '', 0, 1, 1);
insert into endereco (id_endereco, rua, numero, complemento, eh_principal, id_municipio, id_expositor) values (endereco_seq.nextval, 'Av. Boqueirão', '103', '', 1, 3, 2);

insert into email (id_email, email, id_expositor) values (email_seq.nextval, 'charles.pilger@gmail.com', 1);
insert into email (id_email, email, id_expositor) values (email_seq.nextval, 'charles@pilger.com.br', 2);

insert into telefone (id_telefone, numero, eh_principal, id_expositor) values (telefone_seq.nextval, '(051)981-300-400', 1, 1);
insert into telefone (id_telefone, numero, eh_principal, id_expositor) values (telefone_seq.nextval, '(051)981-300-400', 1, 2);

insert into expositorcategoria(id_expositorcategoria, ativo, id_categoria, id_expositor) values (expositorcategoria_seq.nextval, 0, 1, 1);
insert into expositorcategoria(id_expositorcategoria, ativo, id_categoria, id_expositor) values (expositorcategoria_seq.nextval, 1, 2, 1);
insert into expositorcategoria(id_expositorcategoria, ativo, id_categoria, id_expositor) values (expositorcategoria_seq.nextval, 0, 1, 2);
insert into expositorcategoria(id_expositorcategoria, ativo, id_categoria, id_expositor) values (expositorcategoria_seq.nextval, 0, 2, 2);
insert into expositorcategoria(id_expositorcategoria, ativo, id_categoria, id_expositor) values (expositorcategoria_seq.nextval, 1, 3, 2);

insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 10, 1, 1, 1);
insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 20, 1, 2, 1);
insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 30, 1, 3, 2);
insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 10, 2, 1, 4);
insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 20, 2, 2, 4);
insert into expositorevento(id_expositorevento, presente, quantidade_vendas, id_status,	id_evento, id_expositorcategoria ) values (expositorevento_seq.nextval, 1, 30, 2, 3, 5);
