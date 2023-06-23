CREATE TABLE ludzie(
	id SERIAL PRIMARY KEY,
	ilosc INT NOT NULL
);

CREATE TABLE zombie(
	id SERIAL PRIMARY KEY,
	ilosc INT NOT NULL
);

CREATE TABLE zasoby(
	id SERIAL PRIMARY KEY,
	bron INT NOT NULL,
	jedzenie INT NOT NULL,
	woda INT NOT NULL,
	leki INT NOT NULL
);

-- Wypełnianie tabeli ludzie

INSERT INTO ludzie (ilosc)
	VALUES (70);

-- Wypełnianie tabeli zasoby

INSERT INTO zasoby (bron, jedzenie, woda, leki)
	VALUES (10, 40, 60, 21);

-- Wypełnianie tabeli zombie

INSERT INTO zombie (ilosc)
	VALUES (1000);

