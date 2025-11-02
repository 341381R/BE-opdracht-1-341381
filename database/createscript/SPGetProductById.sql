DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT   PROD.Naam          AS ProductNaam
            ,PROD.Barcode
            ,ALGE.Naam          AS AllergeenNaam
            ,ALGE.Omschrijving  
    FROM ProductPerAllergeen AS PPAN
    INNER JOIN Product AS PROD
    ON PPAN.ProductId = PROD.Id
    INNER JOIN Allergeen AS ALGE
    ON PPAN.AllergeenId = ALGE.Id
    WHERE PPAN.ProductId = p_id;


END$$

DELIMITER ;