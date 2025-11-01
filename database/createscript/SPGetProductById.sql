DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT   PROD.Id
            ,PROD.Naam
            ,PROD.Barcode
            ,ALGE.Naam
            ,ALGE.Omschrijving
    FROM ProductPerAllergeen as PPAN
    INNER JOIN Product as PROD
    ON PPAN.ProductId = PROD.Id
    INNER JOIN Allergeen as ALGE
    ON PPAN.AllergeenId = ALGE.Id
    WHERE PPAN.Id = p_id;


END$$

DELIMITER ;