DROP PROCEDURE IF EXISTS SP_GetAllLeveringen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllLeveringen(
    IN p_StartDatum DATE,
    IN p_EindDatum DATE
)
BEGIN

    SELECT 	 LVRC.Id
			,LVRC.Naam          AS LeverancierNaam
            ,PROD.Naam          AS ProductNaam
            ,SUM(PPLC.Aantal)   AS VerschillendeProducten
	FROM Leverancier AS LVRC    
    LEFT JOIN ProductPerLeverancier AS PPLC
    ON LVRC.Id = PPLC.LeverancierId
    INNER JOIN Product AS PROD
    ON PPLC.ProductId = PROD.Id
    WHERE (p_StartDatum IS NULL OR PPLC.DatumLevering >= p_StartDatum) 
    AND (p_EindDatum IS NULL OR PPLC.DatumLevering <= p_EindDatum)
    ORDER BY LVRC.Naam DESC;

END$$

DELIMITER ;