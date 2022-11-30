USE master
GO

DROP DATABASE IF EXISTS wedkowanie

CREATE DATABASE wedkowanie

USE wedkowanie

CREATE TABLE Ryby (
id INTEGER IDENTITY(1,1) PRIMARY KEY,
nazwa TEXT,
wystepowanie TEXT,
styl_zycia INTEGER
)

CREATE TABLE Okres_ochronny (
id INTEGER IDENTITY(1,1),
Ryby_id INTEGER,
od_miesiaca INTEGER,
wymiar_ochronny INTEGER
FOREIGN KEY (Ryby_Id) REFERENCES Ryby(id)
)

CREATE TABLE Lowisko (
id INTEGER IDENTITY(1,1),
Ryby_id INTEGER,
akwen TEXT,
wojewodztwo TEXT,
rodzaj INTEGER
FOREIGN KEY (Ryby_Id) REFERENCES Ryby(id)
)
