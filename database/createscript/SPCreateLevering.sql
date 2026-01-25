DROP PROCEDURE IF EXISTS SP_CreateLevering;

DELIMITER $$

CREATE PROCEDURE SP_CreateLevering(
    IN 
    IN p_Aantal                       TINYINT,
    IN p_DatumEerstVolgendeLevering   DATE
)

BEGIN
    INSERT INTO ProductPerLeverancier (
        Naam,
        Omschrijving)
        VALUES (p_naam, p_omschrijving);

        SELECT LAST_INSERT_ID() AS new_id;

END$$

DELIMITER ;