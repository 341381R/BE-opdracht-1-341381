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
    
    FROM Product AS PROD
    INNER JOIN ProductPerLeverancier AS PPLC
    ON PPLC.LeverancierId = LVRC.Id
    INNER JOIN Leverancier AS LVRC
    ON PPLC.ProductId = PROD.Id
    WHERE PROD.Id = p_id
    ORDER BY PPLC.DatumLevering ASC;


END$$

DELIMITER ;