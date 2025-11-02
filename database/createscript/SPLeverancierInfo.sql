DROP PROCEDURE IF EXISTS SP_GetLeverancierInfo;

DELIMITER $$

CREATE PROCEDURE SP_GetLeverancierInfo(
    IN p_id INT
)
BEGIN

    SELECT   LVRC.Naam              AS LeverancierNaam
            ,LVRC.ContactPersoon
            ,LVRC.LeverancierNummer
            ,LVRC.Mobiel  
            ,PROD.Naam              AS ProductNaam
            ,PPLC.DatumLevering
            ,PPLC.Aantal
            ,PPLC.DatumEerstVolgendeLevering
            ,MAGA.AantalAanwezig
    
    FROM ProductPerLeverancier AS PPLC
    INNER JOIN Product AS PROD
    ON PPLC.ProductId = PROD.Id
    INNER JOIN Leverancier AS LVRC
    ON PPLC.LeverancierId = LVRC.Id
    INNER JOIN Magazijn AS MAGA
    ON PROD.Id = MAGA.ProductId
    WHERE PROD.Id = p_id
    ORDER BY PPLC.DatumLevering ASC;


END$$

DELIMITER ;