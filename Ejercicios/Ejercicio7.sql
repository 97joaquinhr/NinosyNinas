SELECT nombre, SUM(sueldo)
FROM Elenco
GROUP BY nombre;

SELECT nomestudio, SUM(presupuesto) as 'Monto total'
FROM Pelicula
WHERE año BETWEEN 1980 AND 1989
GROUP BY nomestudio;

SELECT A.nombre, AVG(sueldo)
FROM Actor A, Elenco E
WHERE A.nombre = E.nombre
AND sexo = 'M'
GROUP BY sueldo
HAVING AVG(sueldo) > 5000000;

SELECT titulo, MIN(presupuesto)
FROM Pelicula
GROUP BY titulo;

SELECT TOP(1) E.nombre, sueldo
FROM Elenco E, Actor A
WHERE E.nombre = A.nombre
AND sexo = 'F'
ORDER BY sueldo DESC;
