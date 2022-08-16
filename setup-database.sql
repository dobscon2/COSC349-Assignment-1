CREATE TABLE movie (
  movieName varchar(100) NOT NULL,
  movieYear YEAR NOT NULL,
  movieDirector varchar(100) NOT NULL,
  primary key (movieName, movieYear)
);

CREATE TABLE cinemaSessions (
  sessionID integer PRIMARY KEY AUTO_INCREMENT,
  cinemaRoom integer NOT NULL,
  movieName varchar(100) NOT NULL,
  movieYear YEAR NOT NULL,
  sessionDateTime DATETIME NOT NULL,
  constraint fk_movie_session foreign key (movieName, movieYear) references movie(movieName, movieYear)
);

CREATE TABLE booking (
  bookingID integer PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(50) NOT NULL,
  lastName varchar(50) NOT NULL,
  sessionID integer NOT NULL,
  constraint fk_session foreign key (sessionID) references cinemaSessions(sessionID)
);

ALTER TABLE cinemaSessions AUTO_INCREMENT=100;
ALTER TABLE booking AUTO_INCREMENT=100;

INSERT INTO movie (movieName, movieYear, movieDirector) VALUES ('Spider-Man 3', 2007, 'Sam Raimi');
INSERT INTO movie (movieName, movieYear, movieDirector) VALUES ('Doctor Strange in the Multiverse of Madness', 2022, 'Sam Raimi');
INSERT INTO movie (movieName, movieYear, movieDirector) VALUES ('Jurassic World Dominion', 2022, 'Colin Trevorrow');
INSERT INTO movie (movieName, movieYear, movieDirector) VALUES ('Thor: Love and Thunder', 2022, 'Taika Waititi');

INSERT INTO cinemaSessions (cinemaRoom, movieName, movieYear, sessionDateTime) VALUES (4, 'Doctor Strange in the Multiverse of Madness', 2022, '2022-08-22 10:30:00');
INSERT INTO cinemaSessions (cinemaRoom, movieName, movieYear, sessionDateTime) VALUES (1, 'Thor: Love and Thunder', 2022, '2022-08-22 11:30:00');