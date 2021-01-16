
CREATE TABLE MAP
(
name varchar(255) UNIQUE NOT NULL,
PRIMARY KEY (name)
);

CREATE TABLE server_region
(
	name varchar(255) UNIQUE NOT NULL,
	PRIMARY KEY (name)
);





CREATE TABLE TEAM
(
TeamID varchar(255) UNIQUE NOT NULL,
GameID BigInt(32) UNIQUE NOT NULL FOREIGN KEY REFERENCES Match(GameID) ON DELETE CASCADE,
hasFirstBlood BIT,
isWinner BIT,
CONSTRAINT unique_team PRIMARY KEY (TeamID, GameID)
);

CREATE TABLE USER
(
SummonerName UNIQUE NOT NULL,
Join_date int(8),
Level int(8),
PRIMARY KEY (SummonerName)
);

CREATE TABLE FRIENDS
(
summonerName1 varchar(255) UNIQUE NOT NULL FOREIGN KEY REFERENCES User(summonerName) ON DELETE CASCADE,
summonerName2 varchar(255) UNIQUE NOT NULL FOREIGN KEY REFERENCES User(summonerName) ON DELETE CASCADE,
CONSTRAINT friend_pair PRIMARY KEY (summonerName1, summonerName2)

);

CREATE TABLE is
(
ParticipantID UNIQUE NOT NULL FOREIGN KEY REFERENCES LeaguePlayer(ParticipantID) ON DELETE CASCADE,
SummonerName UNIQUE NOT NULL FOREIGN KEY REFERENCES User(SummonerName) ON DELETE CASCADE,
CONSTRAINT is_unique PRIMARY KEY (ParticipantID, SummonerName)
);

CREATE TABLE LeaguePlayer
(
ParticipantID varchar(255) UNIQUE NOT NULL,
GameID BigInt(255) UNIQUE NOT NULL FOREIGN KEY REFERENCES Match(GameID) ON DELETE CASCADE, 
Kills int(8),
ResourceEarned int(8),
Assists int(8),
Deaths int(8),
Role varchar(255),
Vision_Score int(8),
Final_Level int(8),
CONSTRAINT unique_player PRIMARY KEY (ParticipantID, TeamID, GameID)
);

CREATE TABLE ValorantPlayer
(
ParticipantID varchar(255) UNIQUE NOT NULL,
TeamID varchar(255) UNIQUE FOREIGN KEY  NOT NULL REFERENCES Team(TeamID) ON DELETE CASCADE,
GameID varchar(255) UNIQUE FOREIGN KEY  NOT NULL REFERENCES Match(GameID) ON DELETE CASCADE, 
Kills int(8),
ResourceEarned int(8),
Assists int(8),
Deaths int(8)
CONSTRAINT unique_player PRIMARY KEY (ParticipantID, TeamID, GameID)
);

CREATE TABLE Bought
(
name varchar(255) UNIQUE FOREIGN KEY REFERENCES champion(name) ON DELETE CASCADE,
participantID int(255) UNIQUE FOREIGN KEY REFERENCES LeaguePlayer(participantID) ON DELETE CASCADE
);

CREATE TABLE Item
(
name varchar(255) UNIQUE,
Health_Regen int(8),
Mana_Regen int(8),
Mana int(8),
Ability_Power int(8),
Attack_Damage int(8),
Cooldown_Reduction int(8),
Attack_Speed int(8),
Health int(8),
Magic_Resist int(8),
Armour int(8),
PRIMARY KEY (name)
);

CREATE TABLE ChampionPlayed 
(
name varchar(255) FOREIGN KEY REFERENCES champion(name) ON DELETE CASCADE,
participantID int(255) FOREIGN KEY UNIQUE REFERENCES LeaguePlayer(participantID) ON DELETE CASCADE,
CONSTRAINT played_champ PRIMARY KEY (name, participantID) 
);

CREATE TABLE champion
(
name varchar(255) UNIQUE NOT NULL,
Health Regen int(8),
Mana Regen int(8),
Mana int(8),
Ability Power int(8),
Attack Damage int(8),
Cooldown Reduction int(8),
Attack Speed int(8),
Health int(8),
Magic Resist int(8),
Armour int(8),
PRIMARY KEY (name)
);

CREATE TABLE championAbilities
(
name varchar(255) UNIQUE,
number int(8),
championName varchar(255) FOREIGN KEY REFERENCES Champion(name) ON DELETE CASCADE,
PRIMARY KEY (NAME)
);


CREATE TABLE AGENT
(
name varchar(255) UNIQUE,
	role varchar(255),
	PRIMARY KEY (name)
);
CREATE TABLE AgentPlayed
(
name varchar(255) FOREIGN KEY REFERENCES Agent(name) ON DELETE CASCADE,
	participantID UNIQUE int(255) FOREIGN KEY REFERENCES ValorantPlayer(participantID),
CONSTRAINT agent_pair PRIMARY KEY (name, participantID)
);
CREATE TABLE AgentAbilities
(
name varchar(255) UNIQUE,
price int(12),
agentName varchar(255) FOREIGN KEY REFERENCES Agent(name) ON DELETE CASCADE,
PRIMARY KEY (name)
);



CREATE TABLE guns
(
	name varchar(255),
	price int(12),
	type varchar(255),
);

CREATE TABLE buys 
(
name varchar(255) FOREIGN KEY REFERENCES Agent(name),
	participantID int(255) FOREIGN KEY REFERENCES ValorantPlayer(participantID),
CONSTRAINT purchases PRIMARY KEY (name, participantID)
);

CREATE TABLE match
(
	gameID UNIQUE NOT NULL,
	Duration int(8),
	gameMode varchar(255) FOREIGN KEY REFERENCES gameMode(gameMode) ON DELETE CASCADE,
	Region varchar(255) FOREIGN KEY REFERENCES Region(Region) ON DELETE CASCADE,
	RegionCode var(6),
	PRIMARY KEY (gameID),
);

SQL CREATE TABLE gameMode
(
	gameMode varchar(255),
	map varchar(255)
);
SQL CREATE TABLE region 
(
	region varchar(255),
	regionCode varchar(6) 
);


