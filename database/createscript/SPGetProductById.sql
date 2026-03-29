DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT 	 PROD.Id
            ,PROD.Barcode
			,CALL SP_CheckAllergeen(p_id, 1)
			,CALL SP_CheckAllergeen(p_id, 2)
			,CALL SP_CheckAllergeen(p_id, 3)
			,CALL SP_CheckAllergeen(p_id, 4)
			,CALL SP_CheckAllergeen(p_id, 5)
	FROM Product AS PROD    
    WHERE PROD.Id = p_id;

END$$

DELIMITER ;