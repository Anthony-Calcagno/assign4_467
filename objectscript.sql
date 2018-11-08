DROP TABLE IF EXISTS Event;
DROP TABLE IF EXISTS Vendor;
DROP TABLE IF EXISTS Members;
DROP TABLE IF EXISTS Band;
DROP TABLE IF EXISTS Artist;
DROP TABLE IF EXISTS Agent;


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
   PRIMARY KEY (AgentID)
); 

CREATE TABLE Artist
(
   ArtistID integer AUTO_INCREMENT,
   AgentID integer,
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
   PRIMARY KEY (ArtistID),
   FOREIGN KEY (AgentID) REFERENCES Agent (AgentID)
);

CREATE TABLE Band
(
   BandID integer AUTO_INCREMENT,
   BandName Char(255) NOT NULL,
   BandRate Char(255) NOT NULL,
   Notes Char(255) NOT NULL,
   BandAgent char(255) NOT NULL,
   BandPhone char(20) NOT NULL,
   PRIMARY KEY (BandID)
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
   ArtistID integer,
   BandID integer,
   EventName char(255) NOT NULL,
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
   TicketPrice char(255) NOT NULL,
   TicketSales integer NOT NULL,
   PRIMARY KEY (EventID),
   FOREIGN KEY (ArtistID) REFERENCES Artist (ArtistID),
   FOREIGN KEY (BandID) REFERENCES Band (BandID)
);

INSERT INTO Artist (Fname, Minit, Lname, Gender, Email, PhoneNumber, ConcertRate, ArtistStreet, ArtistCity, ArtistState, ArtistZip) VALUES ('Anthony', 'J', 'Calcagno', 'Male', 'ajc@gmail.com', '(630)478-8765', '100', '200 Pine ave', 'DeKalb', 'Illinois', '60101');
INSERT INTO Artist (Fname, Minit, Lname, Gender, Email, PhoneNumber, ConcertRate, ArtistStreet, ArtistCity, ArtistState, ArtistZip) VALUES ('Leonardo', 'D', 'Vinci', 'Male', 'D@gmail.com', '(630)909-8765', '50', '300 Pine ave', 'Kalb', 'Illinois', '68901');
INSERT INTO Agent (Fname, Minit, Lname, AgentEmail, OfficePhone, CellPhone, AgentType, AgentStreet, AgentCity, AgentState, AgentZip) VALUES ('Tim', 'k', 'Wambo', 'agent@gmail.com', '(630)564-5867', '(630)432-4567', 'Artist', 'street name', 'citytown', 'Wisconsin', '88798');
INSERT INTO Agent (Fname, Minit, Lname, AgentEmail, OfficePhone, CellPhone, AgentType, AgentStreet, AgentCity, AgentState, AgentZip) VALUES ('Lammy', 'L', 'Johnson', 'agent@gmail.com', '(630)564-5867', '(630)432-4567', 'Band', 'street name', 'citytown', 'Wisconsin', '88798');
INSERT INTO Band (BandName, BandRate, Notes, BandAgent, BandPhone) VALUES ('The Band Boys', '300', 'note', 'jome', '(630)564-5867');
INSERT INTO Band (BandName, BandRate, Notes, BandAgent, BandPhone) VALUES ('The Band Girls', '400', 'notes', 'jomes', '(631)564-5867');
INSERT INTO Event ( EventName,EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'The Bash', '11/11/2018', '02:30 pm', 'Sold Out', '343', 'Great Event', 'Jim', 'Estreet', 'Ecity', 'Estate', '22334', '20','343');
 INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Big Time Event', '12/15/2018', '05:00 pm', 'Advertised', '300', 'Fun times', 'Dan', 'Pine Ave', 'DeKalb', 'Illinois','99999', '30','55');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Polooza', '10/04/2018', '03:00 pm', 'Cancelled', '400', 'Awesome', 'Jane', 'Oak Ave', 'Mich City', 'Michigan', '88888', '15','6');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'PARTY', '08/14/2018', '08:00 pm', 'Completed', '343', 'Great Event', 'Stacy', 'street', 'city', 'Illinois', '22534', '40','192');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Out of Names', '09/13/2018', '02:30 pm', 'Completed', '200', 'Great', 'Lommy', 'Maple ave', 'Place area', 'Illinois','22090', '20','156');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Bash', '11/28/2018', '02:35 pm', 'Sold Out', '300', 'Event', 'Manager', 'Tree ave', 'Chicago', 'Illinois', '55866', '25','300');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Something fun', '11/05/2018', '01:30 pm', 'Cancelled', '359', 'Ouch', 'Manch', 'street ave', 'Dtown', 'Illinois', '11334', '20','9');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Cold Event', '12/10/2018', '12:30 pm', 'Advertised', '430', 'fun fun fun', 'Leader', 'Stream ave', 'Streamwood', 'Illinois', '22399', '10','30');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Sweet times', '12/24/2018', '06:00 pm', 'Created', '500', 'Christmas Eve', 'Jam', 'road ave', 'citytown', 'Illinois', '24344', '20','0');
INSERT INTO Event ( EventName, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventManager, EventStreet, EventCity, EventState, EventZip, TicketPrice, TicketSales) VALUES ( 'Its good', '11/14/2018', '05:15 pm', 'Approved', '120', 'Expensive', 'Brady', 'Bstreet', 'Chitown', 'Wisconsin', '12334', '25','110'); 
