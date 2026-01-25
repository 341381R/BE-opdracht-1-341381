DROP PROCEDURE IF EXISTS SP_UpdateLeverancier;

DELIMITER $$

CREATE PROCEDURE SP_UpdateLeverancier(
     IN p_id INT
    ,IN p_naam VARCHAR(30)
    ,IN p_contactpersoon VARCHAR(50)
    ,IN p_leveranciernummer VARCHAR(11)
    ,IN p_mobiel VARCHAR(11)
    ,IN p_straat VARCHAR(50)
    ,IN p_huisnummer SMALLINT
    ,IN p_postcode VARCHAR(6)
    ,IN p_stad VARCHAR(30)
)
BEGIN

    UPDATE   Leverancier AS LVRC
    INNER JOIN Contact AS CNTC
    ON LVRC.ContactId = CNTC.Id
       SET   LVRC.Naam = p_naam
            ,LVRC.ContactPersoon = p_contactpersoon
            ,LVRC.LeverancierNummer = p_leveranciernummer
            ,LVRC.Mobiel = p_mobiel
            ,CNTC.Straat = p_straat
            ,CNTC.Huisnummer = p_huisnummer
            ,CNTC.Postcode = p_postcode
            ,CNTC.Stad = p_stad
            ,LVRC.DatumGewijzigd = sysdate(6)
     WHERE   LVRC.Id = p_id;

     SELECT ROW_COUNT() AS affected;


END$$

DELIMITER ;