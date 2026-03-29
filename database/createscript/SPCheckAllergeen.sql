DROP PROCEDURE IF EXISTS SP_CheckAllergeen;

DELIMITER $$

CREATE PROCEDURE SP_CheckAllergeen (
IN ProductId INT,
IN AllergeenId INT
)
BEGIN
	SELECT
		CASE WHEN EXISTS (SELECT 1 FROM 
            Allergeen AS ALGE
            INNER JOIN ProductPerAllergeen AS PPAN 
            ON ALGE.Id = PPAN.AllergeenId
            WHERE PPAN.ProductId = p_id
            AND ALGE.Id = AllergeenId
            ) THEN "Ja" ELSE "Nee" END AS Resultaat;
    END $$
    DELIMITER ;