DROP PROCEDURE IF EXISTS SP_GetAllProductsByDate;

DELIMITER $$

CREATE PROCEDURE SP_GetAllProductsByDate(
    IN p_StartDatum DATE,
    IN p_EindDatum DATE
)
BEGIN

    SELECT 	 PROD.Id
			,LVRC.Naam              AS LeverancierNaam
            ,LVRC.ContactPersoon
            ,CNTC.Stad
            ,PROD.Naam              AS ProductNaam
            ,PELG.EinddatumLevering
	FROM Product AS PROD    
    INNER JOIN ProductPerLeverancier AS PPLC
    ON PROD.Id = PPLC.ProductId
    INNER JOIN Leverancier AS LVRC
    ON PPLC.LeverancierId = LVRC.Id
    INNER JOIN Contact AS CNTC
    ON CNTC.Id = LVRC.ContactId
    INNER JOIN ProductEinddatumLevering AS PELG
    ON PROD.Id = PELG.ProductId
    WHERE (p_StartDatum IS NULL OR PELG.EinddatumLevering >= p_StartDatum) 
    AND (p_EindDatum IS NULL OR PELG.EinddatumLevering <= p_EindDatum)
    ORDER BY PELG.EinddatumLevering DESC;

END$$

DELIMITER ;