DROP TABLE IF EXISTS Artist;
DROP TABLE IF EXISTS Agent;
DROP TABLE IF EXISTS Event;

CREATE TABLE Artist
(
   ArtistID integer AUTO_INCREMENT,
   Fname Char(255) NOT NULL,
   Minit Char(10) NOT NULL,
   Lname Char(255) NOT NULL,
   Gender Char(20) NOT NULL,
   Email Char(255) NOT NULL,
   PhoneNumber Char(25) NOT NULL,
   ConcertRate integer NOT NULL,
   ArtistStreet char(255) NOT NULL,
   ArtistCity char(255) NOT NULL,
   ArtistState char(20) NOT NULL,
   ZipCode integer NOT NULL,
   primary key (ArtistID)
);

CREATE TABLE Band
(
   BandID integer AUTO_INCREMENT,
   Name   Char(255) NOT NULL,
   Member Char(255) NOT NULL,
   Rate   Char(255) NOT NULL,
   
