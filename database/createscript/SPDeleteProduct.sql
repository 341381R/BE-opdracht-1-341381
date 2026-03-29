DROP PROCEDURE IF EXISTS SP_DeleteProduct;

DELIMITER $$

CREATE PROCEDURE SP_DeleteProduct(
    IN p_id   INT
)

BEGIN

    START TRANSACTION;
    DELETE FROM ProductPerAllergeen AS PPAN
    WHERE p_id = PPAN.ProductId;
    
    DELETE FROM Product AS PROD
    WHERE p_id = PROD.Id;

    COMMIT;

        SELECT ROW_COUNT() AS affected;

END$$

DELIMITER ;