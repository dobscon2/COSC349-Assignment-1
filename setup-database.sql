CREATE TABLE movie (
  movieName varchar(100) NOT NULL,
  movieYear YEAR NOT NULL,
  movieDirector varchar(100) NOT NULL,
  primary key (movieName, movieYear)
);

CREATE TABLE cinemaSessions (
  cinemaRoom integer NOT NULL,
  movieName varchar(100) NOT NULL,
  movieYear YEAR NOT NULL,
  sessionDateTime DATETIME NOT NULL,
  constraint fk_movie foreign key (movieName) references movie(movieName),
  constraint fk_movie_year foreign key (movieYear) references movie(movieYear),
  primary key (cinemaRoom, movieName, movieYear, sessionDateTime)
);

CREATE TABLE booking (
  bookingID integer PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(50) NOT NULL,
  lastName varchar(50) NOT NULL,
  movieName varchar(100) NOT NULL,
  movieYear YEAR NOT NULL,
  constraint fk_movie foreign key (movieName) references movie(movieName),
  constraint fk_movie_year foreign key (movieYear) references movie(movieYear)
);

AUTO_INCREMENT=1000;

INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Spider-Man 3', '2007', 'Sam Raimi');
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Doctor Stranger in the Multiverse of Madness, '2022', 'Sam Raimi');
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Jurassic World Dominion', '2022', 'Colin Trevorrow');
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Thor: Love and Thunder', '2022', 'Taika Waititi');