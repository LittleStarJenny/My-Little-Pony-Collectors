CREATE DATABASE mlp
DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

CREATE TABLE publishers
(   PubId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    Companyname VARCHAR(550) NOT NULL

    -- constraint FK_catID foreign key(CategoryId) references categorys(CategoryId)
);

INSERT INTO publishers
(
    PubId, Companyname
)

VALUES
(1, 'Collage'),
(2, 'Carlton'),
(3, 'Independent'),
(4, 'Film Factory AB');

CREATE TABLE categories
(   CatId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    CatName VARCHAR(550) NOT NULL

);

INSERT INTO categories
(
    CatId, CatName
)

VALUES 
(1, 'VHS'),
(2, 'DVD'),
(3, 'Leksaker'),
(4, 'Ljud');

CREATE TABLE collectibles
(   ColId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    CatId INT(250) NOT NULL,
    Title VARCHAR(550) NOT NULL,
    Artnr VARCHAR (550) NOT NULL,
    img VARCHAR(500) NOT NULL,
    PubId INT (250) NOT NULL,

    constraint FK_CatId foreign key(CatId) references categories(CatId),
    constraint FK_PubId foreign key(PubId) references publishers(PubId)
);

INSERT INTO collectibles
(
    ColId, CatId, Title, Artnr, img, PubId
)

VALUES
(1, 1, 'Den magiska manteln', 'S.1024', 'img/den-magiska-manteln.JPG', 1),
(2, 1, 'Dagboken som försvann', 'S.1027', 'img/dagboken-som-försvann.JPG', 1),
(3, 1, 'Tur i oturen', 'S.1031', 'img/tur-i-oturen.JPG', 1),
(4, 1, 'Spöket på paradisets herrgård', '14504', 'img/spöket-på-paradisets-herrgård.JPG', 2),
(5, 1, 'De magiska mynten', '14505', 'img/de-magiska-mynten.JPG', 2),
(6, 1, 'Rampljus', '14506', 'img/rampljus.JPG', 2),
(7, 1, 'Enhörningarna som försvann', '14507', 'img/enhörningarna-som-försvann.JPG', 3),
(8, 1, 'Sweet Stuff och skattjakten', '14508', 'img/sweet-stuff-och-skattjakten.JPG', 3),
(9, 1, 'Den gyllene porten', '14509', 'img/den-gyllene-porten.JPG', 2),
(10, 1, 'Den vilda dalens undergång', '14510', 'img/den-vilda-dalens-undergång.JPG', 2),
(11, 1, 'Den vilda dalens undergång 2', '14511', 'img/den-vilda-dalens-undergång2.JPG', 3),
(12, 1, 'Låtsas-leken', '14512', 'img/låtsas-leken.JPG', 3),
(13, 1, 'De gyllene hästskorna', '14513', 'img/de-gyllene-hästskorna.JPG', 3),
(14, 1, 'Glasskriget', '14514', 'img/glasskriget.JPG', 3),
(15, 1, 'Midnattslottet', '14515', 'img/midnattslottet.JPG', 3),
(16, 1, 'Pyjamasparty', '8160', 'img/pyjamasparty.JPG', 4),
(17, 1, 'Maskerad', '8161', 'img/maskerad.JPG', 4),
(18, 1, 'Prinsessan som försvann', '8162', 'img/prinsessan-som-försvann.JPG', 4),
(19, 1, "Rock'n'roll", '8163', 'img/rocknroll.JPG', 4),
(20, 1, 'Upp i det blå', '8164', 'img/upp-i-det-blå.JPG', 4),
(21, 1, 'Paradisön', '8165', 'img/paradisön.JPG', 4);


CREATE TABLE languages
(   LanguageId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    Language VARCHAR(550) NOT NULL

);

INSERT INTO LANGUAGES
(
    LanguageId, Language
)

VALUES
(1, 'SVE'),
(2, 'ENG');

CREATE TABLE episodes
(   EpisodeId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    LanguageId INT(250) NOT NULL,
    EpiTitle VARCHAR(550) NOT NULL,
    ColiId INT(250) NOT NULL,

    constraint FK_LanguageId foreign key(LanguageId) references languages(LanguageId),
    constraint FK_ColiId foreign key(ColiId) references collectibles(ColiId)
);

INSERT INTO episodes
(
    EpisodeId, LanguageId, EpiTitle, ColiId
)

VALUES
(1, 1, 'Glasprinsessan', 1),
(2, 1, 'Genom dörren', 1);


CREATE TABLE admin
(   AdminId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    Name VARCHAR(150) NOT NULL,
    Password VARCHAR(550) NOT NULL

);

INSERT INTO admin
(
    AdminId, Name, Password
)

VALUES
(1, 'Jenny', '$2y$12$YMjKRfkFqAQ.fC7aeOBRa.Dv9Cv4CkZNdH0T1Zfqv.GMuCxIeGZ3q');

CREATE TABLE users
(   UserId INT NOT NULL AUTO_INCREMENT PRIMARY KEY, -- primary key column
    UserName VARCHAR(150) NOT NULL,
    Mail VARCHAR(550) NOT NULL,
    Password VARCHAR(550) NOT NULL

);

INSERT INTO users
(
    UserId, UserName, Mail, Password
)

VALUES
(1, 'LittleStarJenny', 'littlestarjenny6@gmail.com', '$2y$12$YMjKRfkFqAQ.fC7aeOBRa.Dv9Cv4CkZNdH0T1Zfqv.GMuCxIeGZ3q');