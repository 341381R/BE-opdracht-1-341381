DROP FUNCTION IF EXISTS FN_CheckAllergeen;

DELIMITER $$

CREATE FUNCTION FN_CheckAllergeen(
	ProductId INT,
	AllergeenId INT
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
            WHERE PPAN.ProductId = p_id
            AND ALGE.Id = AllergeenId
            ) THEN "Ja" ELSE "Nee" END;
            return Resultaat;
    END $$
    DELIMITER ;