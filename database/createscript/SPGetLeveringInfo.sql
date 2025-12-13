DROP PROCEDURE IF EXISTS SP_GetLeveringInfo;

DELIMITER $$

CREATE PROCEDURE SP_GetLeveringInfo(

)
BEGIN

    SELECT 	 LVRC.Id
			,LVRC.Naam                          AS LeverancierNaam
            ,LVRC.ContactPersoon
			,LVRC.LeverancierNummer
            ,LVRC.Mobiel
            ,PROD.Naam                          AS ProductNaam
            ,MAGA.AantalAanwezig
            ,MAGA.VerpakkingsEenheidInKilogram
            ,PPLC.DatumLevering
	FROM Leverancier AS LVRC    
    INNER JOIN ProductPerLeverancier AS PPLC
    ON LVRC.Id = PPLC.LeverancierId
    INNER JOIN Product AS PROD
    ON PROD.Id = PPLC.ProductId
    INNER JOIN Magazijn AS MAGA
    ON PROD.Id = MAGA.ProductId
    ORDER BY VerschillendeProducten DESC;

END$$

DELIMITER ;