DROP PROCEDURE IF EXISTS SP_GetLeverancierGegevens;

DELIMITER $$

CREATE PROCEDURE SP_GetLeverancierGegevens(
    IN p_id INT
)
BEGIN

    SELECT 	 LVRC.Id
			,LVRC.Naam
            ,LVRC.ContactPersoon
            ,LVRC.Mobiel
            ,CNTC.Stad
            ,CNTC.Straat
            ,CNTC.Huisnummer
	FROM Leverancier AS LVRC    
    LEFT JOIN Contact AS CNTC
    ON CNTC.Id = LVRC.ContactId
    WHERE LVRC.Id = p_id;

END$$

DELIMITER ;