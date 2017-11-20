--- Lista de eventos com os respectivos locais e datas
SELECT 
    e.nome Evento, 
    l.nome Local, 
    TO_CHAR(e.data, 'DD-MM-YYYY HH24:MI') Data
FROM Evento e
JOIN Local l ON e.id_local = l.id_local;

--- Lista de expositores em débito
SELECT exp.nome, ev.nome
FROM ExpositorEvento expev
INNER JOIN ExpositorCategoria expcat
    ON expev.id_expositorcategoria = expcat.id_expositorcategoria
INNER JOIN Expositor exp
	ON expcat.id_expositor = exp.id_expositor
INNER JOIN Evento ev
	ON expev.id_evento = ev.id_evento
WHERE expev.id_status IN (
	SELECT id_status
	FROM Status
	WHERE nome = 'Débito'
);

--- Lista de todos os expositores com suas marcas e o município do
--- endereço marcado como principal
SELECT
	exp.nome Expositor,
	exp.marca Marca,
	m.nome Municipio,
	uf.sigla
FROM Expositor exp
INNER JOIN Endereco end
	ON exp.id_expositor = end.id_expositor
INNER JOIN Municipio m
	ON end.id_municipio = m.id_municipio
INNER JOIN UF
ON m.id_uf = uf.id_uf
WHERE end.eh_principal = 1;
	
--- Lista de eventos com ID, nome, data e número de expositores
--- para eventos com mais de um expositor
SELECT 
	ev.id_evento Id,
	ev.nome Nome,
	ev.data Data,
	COUNT(expev.id_expositorevento) Expositores
FROM Evento ev
INNER JOIN ExpositorEvento expev
	ON ev.id_evento = expev.id_evento
INNER JOIN ExpositorCategoria expcat
	ON expev.id_expositorcategoria = expcat.id_expositorcategoria
GROUP BY ev.id_evento, ev.nome, ev.data
HAVING COUNT(expev.id_expositorevento) > 1;

--- Lista de expositores com as respectivas quantidades de vendas
--- para expositores com menos de 100 vendas
SELECT
	exp.id_expositor Id,
	exp.nome Expositor,
	SUM(expev.quantidade_vendas) Vendas
FROM Expositor exp
INNER JOIN ExpositorCategoria expcat
	ON exp.id_expositor = expcat.id_expositor
INNER JOIN ExpositorEvento expev
	ON expev.id_expositorcategoria = expcat.id_expositorcategoria
GROUP BY exp.id_expositor, exp.nome
HAVING SUM(expev.quantidade_vendas) < 100; 

--- Lista de eventos com as respectivas quantidades de vendas
SELECT
	ev.id_evento Id,
	ev.nome Evento,
	SUM(expev.quantidade_vendas) Vendas
FROM Evento ev
INNER JOIN ExpositorEvento expev
	ON ev.id_evento = expev.id_evento
GROUP BY ev.id_evento, ev.nome;

--- Lista de eventos com as respectivas quantidades de vendas para eventos
--- com menos de 40 vendas
SELECT
	ev.id_evento Id,
	ev.nome Evento,
	SUM(expev.quantidade_vendas) Vendas
FROM Evento ev
INNER JOIN ExpositorEvento expev
	ON ev.id_evento = expev.id_evento
GROUP BY ev.id_evento, ev.nome
HAVING SUM(expev.quantidade_vendas) < 40;

--- Lista de expositores e respectivas categorias no evento Feira JAdore #1
SELECT
	exp.marca Expositor,
	cat.nome Categoria
FROM Expositor exp
INNER JOIN ExpositorCategoria expcat
	ON expcat.id_expositor = exp.id_expositor
INNER JOIN Categoria cat
	ON expcat.id_categoria = cat.id_categoria
INNER JOIN ExpositorEvento expev
	ON expcat.id_expositor = exp.id_expositor
WHERE expev.id_evento = (
	SELECT id_evento
	FROM Evento
	WHERE nome = 'Feira JAdore #1'
)
ORDER BY Expositor;

--- Lista de todos os expositores com o respectivo endereço
SELECT 
	exp.nome NOME, 
	end.rua RUA, 
	end.numero NUMERO, 
	end.complemento COMPLEMENTO, 
	muni.nome MUNICIPIO, 
	uf.sigla ESTADO
FROM Expositor exp
INNER JOIN Endereco end on end.id_expositor = exp.id_expositor
INNER JOIN Municipio muni on end.id_municipio = muni.id_municipio
INNER JOIN UF on muni.id_uf = uf.id_uf

