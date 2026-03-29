DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT 	 PROD.Id
            ,PROD.Barcode
			,CASE WHEN EXISTS (SELECT 1 FROM 
            Allergeen AS ALGE
            INNER JOIN ProductPerAllergeen AS PPAN 
            ON ALGE.Id = PPAN.AllergeenId
            WHERE PPAN.ProductId = p_id
            AND ALGE.Id = 1
            ) THEN "Ja" ELSE "Nee" END AS BevatGluten
            ,LVRC.Mobiel
            ,PROD.Naam                          AS ProductNaam
            ,MAGA.AantalAanwezig
            ,CONCAT(TRIM(TRAILING ".0" FROM MAGA.VerpakkingsEenheidInKilogram), " kg")	AS VerpakkingsEenheid
            ,PPLC.DatumLevering
	FROM Product AS PROD    
    LEFT JOIN ProductPerLeverancier AS PPLC
    ON LVRC.Id = PPLC.LeverancierId
    LEFT JOIN Product AS PROD
    ON PROD.Id = PPLC.ProductId
    LEFT JOIN Magazijn AS MAGA
    ON PROD.Id = MAGA.ProductId
    WHERE PROD.Id = p_id;

END$$

DELIMITER ;