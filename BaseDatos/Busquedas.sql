SELECT D.Nombre, M.Descripcion
FROM Donadores D, Donadores_MetodoPago Dm, MetodoPago M
WHERE D.Email=Dm.Email
AND Dm.IdMetodo=M.IdMetodo
AND M.Descripcion = 'Tarjeta%'
AND D.Ocupacion LIKE 'Maestro'

SELECT F.Nombre
FROM Funcion F, Rol R, Usuario U, Rol_Funcion Rf, Usuario_Rol Ur
WHERE F.IdFuncion=Rf.IdFuncion
AND R.IdRol=Rf.IdRol
AND U.Username=Ur.Username
AND R.IdRol=Ur.IdRol
AND U.Username LIKE 'Joaquin'