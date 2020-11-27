zapytanie 1:
SELECT id,nazwa,opis,cena FROM podzespoly WHERE cena<1000 ;

zapytanie 2:
SELECT nazwa,opis FROM podzespoly where dostepnosc=1 and producenci_id=1 

zapytanie 3:
SELECT podzespoly.nazwa,producenci.nazwa from producenci INNER JOIN podzespoly 
on producenci.id = podzespoly.producenci_id ;

zapytanie 4:
UPDATE producenci SET nazwa=UPPER(nazwa) WHERE nazwa='Patriot';