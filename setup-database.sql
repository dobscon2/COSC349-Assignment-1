CREATE TABLE movie (
  movieName varchar(100) not null,
  movieYear varchar(4) not null,
  movieDirector varchar(100) not null,
  cinemaRoom integer not null,
  primary key (movieName, movieYear)
);

CREATE TABLE booking (
  bookingID integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
  firstName varchar(50) NOT NULL,
  lastName varchar(50) NOT NULL,
  movieName varchar(100) NOT NULL,
  movieYear varchar(4) NOT NULL,
  constraint fk_movie foreign key (movieName) references movie(movieName),
  constraint fk_movie_year foreign key (movieYear) references movie(movieYear)
);

AUTO_INCREMENT=1000;

INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Spider-Man 3', '2007', 'Sam Raimi', 4);
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Doctor Stranger in the Multiverse of Madness, '2022', 'Sam Raimi', 1);
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Jurassic World Dominion', '2022', 'Colin Trevorrow', 2);
INSERT INTO movie (movieName, movieYear, movieDirector, cinemaRoom) VALUES ('Thor: Love and Thunder', '2022', 'Taika Waititi', 3);