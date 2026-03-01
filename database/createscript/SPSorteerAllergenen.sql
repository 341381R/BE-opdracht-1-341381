DROP PROCEDURE IF EXISTS SP_SorteerAllergenen;

DELIMITER $$

CREATE PROCEDURE SP_SorteerAllergenen(
    IN  p_categorie VARCHAR(30)
)
BEGIN

    SELECT   ALGE.Id
            ,LVRC.Id
            ,PROD.Naam          AS ProductNaam
            ,ALGE.Naam          AS AllergeenNaam
            ,ALGE.Omschrijving
            ,MAGA.AantalAanwezig
    FROM Allergeen AS ALGE
    INNER JOIN ProductPerAllergeen AS PPAN
    ON ALGE.Id = PPAN.AllergeenId
    INNER JOIN Product AS PROD
    ON PROD.Id = PPAN.ProductId
    INNER JOIN Magazijn AS MAGA
    ON PROD.Id = MAGA.ProductId
    INNER JOIN ProductPerLeverancier AS PPLC
    ON PROD.Id = PPLC.ProductId
    INNER JOIN Leverancier AS LVRC
    ON LVRC.Id = PPLC.LeverancierId
    WHERE p_categorie = ALGE.Naam
    ORDER BY ALGE.Naam;
END$$

DELIMITER ;