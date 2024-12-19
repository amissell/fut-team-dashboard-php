CREATE TABLE physicalGk (
    physicalGk_id INT NOT NULL AUTO_INCREMENT,
    diving INT NOT NULL,
    handling INT NOT NULL,
    kicking INT NOT NULL,
    reflexes INT NOT NULL,
    speed INT NOT NULL,
    positioning INT NOT NULL,
    PRIMARY KEY (physicalGk_id)
);

CREATE TABLE physicalPlayer (
    physicalPlayer_id INT NOT NULL AUTO_INCREMENT,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    passing INT NOT NULL,
    dribbling INT NOT NULL,
    defending INT NOT NULL,
    physical INT NOT NULL,
    PRIMARY KEY (physicalPlayer_id)
);

CREATE TABLE clubs (
    club_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    logo VARCHAR(255) NOT NULL,
    PRIMARY KEY (club_id)
);

CREATE TABLE nationalities (
    nationality_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    flag VARCHAR(255) NOT NULL,
    PRIMARY KEY (nationality_id)
);

CREATE TABLE players (
    player_id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    position ENUM('GK','LB','CBL','CBR','RB','CML','DMF','CMR','LW','ST','RW') NOT NULL,
    club_id INT NOT NULL,
    nationality_id INT NOT NULL,
    rating INT NOT NULL,
    physicalGk_id INT NOT NULL,
    physicalPlayer_id INT NOT NULL,
    PRIMARY KEY (player_id),
    FOREIGN KEY (club_id) REFERENCES clubs(club_id) ,
    FOREIGN KEY (nationality_id) REFERENCES nationalities(nationality_id) ,
    FOREIGN KEY (physicalGk_id) REFERENCES physicalGk(physicalGk_id) ,
    FOREIGN KEY (physicalPlayer_id) REFERENCES physicalPlayer(physicalPlayer_id) 
);

INSERT INTO clubs (name, logo)
VALUES 
    ('Manchester United', 'manutd_logo.png'),
    ('FC Barcelona', 'barcelona_logo.png');

INSERT INTO nationalities (name, flag)
VALUES
    ('English', 'england_flag.png'),
    ('Spanish', 'spain_flag.png');
INSERT INTO physicalGk (diving, handling, kicking, reflexes, speed, positioning)
VALUES
    (85, 80, 75, 90, 70, 80),
    (88, 82, 77, 92, 73, 82);
INSERT INTO physicalPlayer (pace, shooting, passing, dribbling, defending, physical)
VALUES
    (85, 90, 80, 88, 75, 85),
    (90, 92, 85, 87, 70, 88);


-- INSERT INTO players (name, photo, position, club_id, nationality_id, rating, physicalGk_id, physicalPlayer_id)
-- VALUES 
-- ('David De Gea', 'degea.png', 'GK', 1, 1, 85, 1, NULL),
-- ('Cristiano Ronaldo', 'cr7.png', 'ST', 1, 1, 92, NULL, 1),
-- ('Lionel Messi', 'messi.png', 'RW', 1, 1, 94, NULL, 2);



SELECT * FROM clubs;
SELECT * FROM nationalities;
SELECT * FROM physicalGk;
SELECT * FROM physicalPlayer;
SELECT * from players

ALTER TABLE players
MODIFY COLUMN physicalGk_id INT NULL,
MODIFY COLUMN physicalPlayer_id INT NULL;

INSERT INTO players (name, photo, position, club_id, nationality_id, rating, physicalGk_id, physicalPlayer_id)
VALUES 
('David De Gea', 'degea.png', 'GK', 1, 1, 85, 1, NULL),  
('Cristiano Ronaldo', 'cr7.png', 'ST', 1, 1, 92, NULL, 1),
('Lionel Messi', 'messi.png', 'RW', 1, 1, 94, NULL, 2);
SELECT * FROM players


show DATABASES;

-- use clinic;
-- SHOW tables;
-- use fut;


create DATABASE FutChampions;
use FutChampions;


SELECT 
    players.player_id, 
    players.name AS player_name, 
    players.position, 
    players.rating,
    clubs.name AS club_name,
    nationalities.name AS nationality
FROM 
    players
LEFT JOIN clubs ON players.club_id = clubs.club_id
LEFT JOIN nationalities ON players.nationality_id = nationalities.nationality_id;
