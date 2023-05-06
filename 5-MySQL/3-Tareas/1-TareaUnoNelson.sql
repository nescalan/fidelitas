CREATE TABLE IF NOT EXISTS movies(
	title VARCHAR(100),
    year VARCHAR(100),
    director VARCHAR(50),
    genre VARCHAR(20),
    rating VARCHAR(100)
);
INSERT INTO movies (title, year, director, genre, rating)
VALUES
  ('The Matrix', '1999', 'Lana Wachowski', 'Action', '8.7'),
  ('Pulp Fiction', '1994', 'Quentin Tarantino', 'Crime', '8.9'),
  ('The Godfather', '1972', 'Francis Ford Coppola', 'Drama', '9.2'),
  ('Forrest Gump', '1994', 'Robert Zemeckis', 'Drama', '8.8'),
  ('The Shawshank Redemption', '1994', 'Frank Darabont', 'Drama', '9.3'),
  ('The Dark Knight', '2008', 'Christopher Nolan', 'Action', '9.0'),
  ('Star Wars: Episode IV - A New Hope', '1977', 'George Lucas', 'Sci-Fi', '8.6'),
  ('Inception', '2010', 'Christopher Nolan', 'Action', '8.8'),
  ('The Silence of the Lambs', '1991', 'Jonathan Demme', 'Thriller', '8.6'),
  ('The Lord of the Rings: The Fellowship of the Ring', '2001', 'Peter Jackson', 'Fantasy', '8.8');
  
  SELECT * 
  FROM movies AS best_movies
  WHERE rating > 8;