<?php
include_once("Connection.php");

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblRequest;
CREATE TABLE TblRequest
(Request INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
User_ID VARCHAR(20) NOT NULL,
music_ID VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();


$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers
(UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FirstName VARCHAR(20) NOT NULL,
LastName VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
BirthYear INT(4) NOT NULL,
EditorStatus BOOLEAN NOT NULL,
PrimaryGenre VARCHAR(20) NOT NULL,
SecondaryGenre VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblMusic;
CREATE TABLE TblMusic
(MusicID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
MusicName VARCHAR(20) NOT NULL,
Genre_ID VARCHAR(20) NOT NULL,
Artist_ID VARCHAR(20) NOT NULL,
Producer_ID VARCHAR(20) NOT NULL,
RecordLabel_ID VARCHAR(20) NOT NULL,
RelearYear INT(4),
KeySection INT(3))");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblGenre;
CREATE TABLE TblGenre
(Genre_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Genre VARCHAR(20) NOT NULL,
SubGenre VARCHAR(20) NOT NULL,
GenreEra VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblArtist;
CREATE TABLE TblArtist
(Artist_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ArtistName VARCHAR(20) NOT NULL,
ArtistBirthYear INT(4))");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblProducer;
CREATE TABLE TblProducer
(Producer_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ProducerName VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS TblRecordLabel;
CREATE TABLE TblRecordLabel
(RecordLabel_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
RecordLabelName VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

?>

