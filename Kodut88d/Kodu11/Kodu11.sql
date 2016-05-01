CREATE TABLE loomaaed_ando (
    id integer PRIMARY KEY auto_increment,
    nimi varchar, 
    vanus integer,
    liik varchar, 
    puur integer,
);

INSERT INTO loomaaed_ando (nimi, vanus, liik, puur) VALUES 
    ('Kuningas', 8, 'lõvi', 1), 
    ('Kavalpea', 3, 'rebane', 3), 
    ('Paks', 20, 'jõehobu', 2), 
    ('Maiasmokk', 6, 'karu', 4), 
    ('Suslik', 1, 'rebane', 3), 
    ('Snowwhite', 9, 'jääkaru', 4), 
    ('Pikk', 7, 'kaelkirjak', 5), 
    ('Triibu', 5, 'sebra', 5);
    
SELECT nimi, puur FROM loomaaed_ando WHERE puur=4;

SELECT max(vanus), min(vanus) FROM loomaaed_ando; 

SELECT puur, count(*) FROM loomaaed_ando GROUP BY puur; 

UPDATE loomaaed_ando SET vanus=vanus+1;