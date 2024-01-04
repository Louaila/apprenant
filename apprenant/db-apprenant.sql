CREATE TABLE APPRENANTS(
   apprenant_id INT,
   apprenant_nom VARCHAR(50),
   apprenant_prenom VARCHAR(50),
   apprenant_email VARCHAR(100),
   PRIMARY KEY(apprenant_id)
);

CREATE TABLE COURS(
   cours_id INT,
   cours_intitule VARCHAR(50),
   PRIMARY KEY(cours_id)
);

CREATE TABLE SUIVRE(
   apprenant_id INT,
   cours_id INT,
   PRIMARY KEY(apprenant_id, cours_id),
   FOREIGN KEY(apprenant_id) REFERENCES APPRENANTS(apprenant_id),
   FOREIGN KEY(cours_id) REFERENCES COURS(cours_id)
);
