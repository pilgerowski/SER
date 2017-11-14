select e.nome as EVENTO, l.nome as LOCAL, TO_CHAR(e.data, 'DD-MM-YYYY HH24:MI') as DATA
from evento e
join local l on e.id_local = l.id_local;


