DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT 	 PROD.Id
            ,PROD.Barcode
			,SP_CheckAllergeen(p_id, 1)
			,SP_CheckAllergeen(p_id, 2)
			,SP_CheckAllergeen(p_id, 3)
			,SP_CheckAllergeen(p_id, 4)
			,SP_CheckAllergeen(p_id, 5)
	FROM Product AS PROD    
    WHERE PROD.Id = p_id;

END$$

DELIMITER ;