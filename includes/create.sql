CREATE TABLE userType(
    userTypeName VARCHAR(128) not NULL,
    userID VARCHAR(255) not NULL
    PRIMARY KEY (userID)
);

CREATE TABLE userAccount (
    nameOfUser VARCHAR(128) NOT NULL,
    email VARCHAR(128) PRIMARY KEY NOT NULL,
    pwd VARCHAR(128) NOT NULL,
    U_ID VARCHAR(255) FOREIGN KEY REFERENCES userType(userID),
    -- gender VARCHAR(128) NOT NULL,
    -- age INTEGER NOT NULL
);

 