CREATE TABLE Alunos (
    ID             INTEGER AUTO_INCREMENT,
    Nome           VARCHAR(80) NOT NULL,
    Telefone       VARCHAR(15) NOT NULL,
    Email          VARCHAR(80) NOT NULL UNIQUE,
    DataNascimento DATETIME    NOT NULL,
    DataCadastro   DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID)
);

CREATE TABLE Turmas (
    ID         INTEGER     AUTO_INCREMENT,
    Nome       VARCHAR(80) NOT NULL,
    Periodo    CHAR(1)     NOT NULL CHECK (Periodo IN ('M',   --// MATUTINO 
                                                       'N',   --// NOTURNO
                                                       'D')), --// DIURNO
    Descricao  VARCHAR(255)
    Capacidade INTEGER     NOT NULL,
    DataInicio DATETIME,
    DataFim    DATETIME,
    Ativo      BOOLEAN     DEFAULT TRUE,
    PRIMARY KEY (ID)
);

CREATE TABLE Matriculas (
    ID            INTEGER  AUTO_INCREMENT,
    AlunoID       INTEGER  NOT NULL,
    TurmaID       INTEGER  NOT NULL,
    DataMatricula DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID),
    FOREIGN KEY (AlunoID) REFERENCES Alunos(ID),
    FOREIGN KEY (TurmaID) REFERENCES Turmas(ID)
);