DROP TABLE IF EXISTS Event;
DROP TABLE IF EXISTS Vendor;
DROP TABLE IF EXISTS Members;
DROP TABLE IF EXISTS Band;
DROP TABLE IF EXISTS Agent;
DROP TABLE IF EXISTS Artist;


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
   ArtistZip integer NOT NULL,
   PRIMARY KEY (ArtistID)
);

CREATE TABLE Agent
(
   AgentID INTEGER AUTO_INCREMENT,
   Fname Char(255) NOT NULL,
   Minit Char(10) NOT NULL,
   Lname char(255) NOT NULL,
   AgentStreet Char(255) NOT NULL,
   AgentCity Char(255) NOT NULL,
   AgentState Char(20) NOT NULL,
   AgentZip INTEGER NOT NULL,
   AgentEmail char(255) NOT NULL,
   OfficePhone Char(20) NOT NULL,
   CellPhone Char(20) NOT NULL,
   AgentType Char(20) NOT NULL,
   PRIMARY KEY (AgentID),
); 

CREATE TABLE Band
(
   BandID integer AUTO_INCREMENT,
   BandName Char(255) NOT NULL,
   BandRate Char(255) NOT NULL,
   Notes Char(255) NOT NULL,
   BandAgent char(255) NOT NULL,
   BandPhone char(20) NOT NULL,
   PRIMARY KEY (BandID),
   FOREIGN KEY (BandAgent) REFERENCES Agent (AgentID)
);

CREATE TABLE Members
(
   MemberID INTEGER AUTO_INCREMENT,
   BandID INTEGER NOT NULL,
   BandName Char(255) NOT NULL,
   MemberName Char(255) NOT NULL,
   MemberType Char(30) NOT NULL,
   PRIMARY KEY (MemberID),
   FOREIGN KEY (BandID) REFERENCES Band (BandID)
);

CREATE TABLE Vendor
(
   VendorID INTEGER AUTO_INCREMENT,
   VendorStreet char(255) NOT NULL,
   VendorCity char(255) NOT NULL,
   VendorState char(255) NOT NULL,
   VendorZip integer NOT NULL,
   VendorType char(255) NOT NULL,
   RepName char(255) NOT NULL,
   RepPhone char(255) NOT NULL,
   RepEmail char(255) NOT NULL,
   PRIMARY KEY (VendorID)
);

CREATE TABLE Event
(
   EventID integer AUTO_INCREMENT,
   Performer char(255) NOT NULL,
   EventStreet char(255) NOT NULL,
   EventCity char(255) NOT NULL,
   EventState char(255) NOT NULL,
   EventZip integer NOT NULL,
   EventDate char(255) NOT NULL,
   EventTime char(255) NOT NULL,
   EventStatus char(255) NOT NULL,
   EventCapacity integer NOT NULL,
   EventNotes char(255) NOT NULL,
   EventManager char(255) NOT NULL,
   PRIMARY KEY (EventID)
); 
