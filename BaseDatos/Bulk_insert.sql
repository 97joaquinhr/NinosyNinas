BULK INSERT equipo07.equipo07.[UsoCFDI]
   FROM 'e:\wwwroot\equipo07\usoCFDI.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[MetodoPago]
   FROM 'e:\wwwroot\equipo07\MetodoPago.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )
SET DATEFORMAT dmy;
BULK INSERT equipo07.equipo07.[Donadores]
   FROM 'e:\wwwroot\equipo07\donadores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SELECT *
FROM MetodoPago