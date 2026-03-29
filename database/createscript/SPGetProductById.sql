DROP PROCEDURE IF EXISTS SP_GetProductById;

DELIMITER $$

CREATE PROCEDURE SP_GetProductById(
    IN p_id INT
)
BEGIN

    SELECT 	 PROD.Id
            ,PROD.Barcode
			,FN_CheckAllergeen(p_id, 1) AS BevatGluten
			,FN_CheckAllergeen(p_id, 2) AS BevatGelatine
			,FN_CheckAllergeen(p_id, 3) AS BevatAZO_kleurstof
			,FN_CheckAllergeen(p_id, 4) AS BevatLactose
			,FN_CheckAllergeen(p_id, 5) AS BevatSoja
	FROM Product AS PROD    
    WHERE PROD.Id = p_id;

END$$

DELIMITER ;