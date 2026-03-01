DROP PROCEDURE IF EXISTS SP_SorteerAllergenen;

DELIMITER $$

CREATE PROCEDURE SP_SorteerAllergenen(
    IN  p_categorie VARCHAR(30)
)
BEGIN

    SELECT   ALGE.Id
            ,ALGE.Naam
            ,ALGE.Omschrijving
    FROM Allergeen AS ALGE
    WHERE p_categorie = ALGE.Naam
    ORDER BY ALGE.Naam;
    

END$$

DELIMITER ;