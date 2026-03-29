DROP FUNCTION IF EXISTS FN_CheckAllergeen;

DELIMITER $$

CREATE FUNCTION FN_CheckAllergeen(
	p_ProductId INT,
	p_AllergeenId INT
)
RETURNS VARCHAR(3)
DETERMINISTIC
BEGIN
	DECLARE Resultaat VARCHAR(3);
	SET Resultaat =
		CASE WHEN EXISTS (SELECT 1 FROM 
            Allergeen AS ALGE
            INNER JOIN ProductPerAllergeen AS PPAN 
            ON ALGE.Id = PPAN.AllergeenId
            WHERE PPAN.ProductId = p_ProductId
            AND ALGE.Id = p_AllergeenId
            ) THEN "Ja" ELSE "Nee" END;
            return Resultaat;
    END $$
    DELIMITER ;