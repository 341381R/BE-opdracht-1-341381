DROP PROCEDURE IF EXISTS SP_GetAllLeveranciers;

DELIMITER $$

CREATE PROCEDURE SP_GetAllLeveranciers(

)
BEGIN

    SELECT 	 LVRC.Id
			,LVRC.Naam
			,LVRC.LeverancierNummer
            ,LVRC.Mobiel
            ,COUNT(DISTINCT PPLC.LeverancierId)   AS VerschillendeProducten
	FROM Leverancier AS LVRC    
    INNER JOIN ProductPerLeverancier AS PPLC
    ON LVRC.Id = PPLC.LeverancierId
    ORDER BY VerschillendeProducten DESC;

END$$

DELIMITER ;