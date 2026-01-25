DROP PROCEDURE IF EXISTS SP_LeverancierDetails;

DELIMITER $$

CREATE PROCEDURE SP_LeverancierDetails(
    IN p_id INT
)
BEGIN

    SELECT   LVRC.Naam
            ,LVRC.ContactPersoon
            ,LVRC.LeverancierNummer
            ,LVRC.Mobiel
            ,CNTC.Straat
            ,CNTC.Huisnummer
            ,CNTC.Postcode
            ,CNTC.Stad
    
    FROM Leverancier AS LVRC
    INNER JOIN Contact AS CNTC
    ON LVRC.ContactId = CNTC.Id
    WHERE LVRC.Id = p_id;


END$$

DELIMITER ;