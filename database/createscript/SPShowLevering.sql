DROP PROCEDURE IF EXISTS SP_ShowLevering;

DELIMITER $$

CREATE PROCEDURE SP_ShowLevering(
    IN p_StartDatum DATE,
    IN p_EindDatum DATE,
    IN p_product VARCHAR(30)
)
BEGIN

    SELECT 	 LVRC.Id
			,p_StartDatum		AS StartDatum
            ,p_EindDatum		AS EindDatum
            ,PROD.Naam          AS ProductNaam
            ,GROUP_CONCAT(ALGE.Naam SEPARATOR ', ') AS Allergenen
            ,PPLC.DatumLevering
            ,PPLC.Aantal
	FROM Leverancier AS LVRC    
    LEFT JOIN ProductPerLeverancier AS PPLC
    ON LVRC.Id = PPLC.LeverancierId
    INNER JOIN Product AS PROD
    ON PPLC.ProductId = PROD.Id
    INNER JOIN ProductPerAllergeen AS PPAN
    ON PPAN.ProductId = PROD.Id
    INNER JOIN Allergeen AS ALGE
    ON PPAN.AllergeenId = ALGE.Id
    WHERE (p_StartDatum IS NULL OR PPLC.DatumLevering >= p_StartDatum) 
    AND (p_EindDatum IS NULL OR PPLC.DatumLevering <= p_EindDatum)
    AND p_product = PROD.Naam
    GROUP BY LVRC.Id
    ,PROD.Naam
    ,PPLC.DatumLevering
    ,PPLC.Aantal
    ORDER BY LVRC.Naam DESC;

END$$

DELIMITER ;