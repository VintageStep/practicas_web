CREATE FUNCTION ExisteEmpresa (CIF varchar(10))
RETURNS bit

BEGIN

DECLARE @rc bit

IF EXISTS (select empresa.CIF from empresa WHERE empresa.CIF=CIF)

	SET @rc=1

ELSE

	SET @rc=0
    
RETURN @rc