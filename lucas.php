<?php

phpinfo();
?>
create table GCAD_PESSOA
(
  CD_ORGANIZ       NUMBER(7) not null,
  CD_EMPRESA       NUMBER(6) not null,
  CD_PARCEIRO      NUMBER(7) not null,
  U_VERSION        CHAR(1),
  ID_OCC           NUMBER(8) not null,
  NM_PESSOA        VARCHAR2(40) not null,
  DT_NASCIMENTO    DATE,
  TP_SEXO          NUMBER(1),
  NM_PAI           VARCHAR2(40),
  NM_MAE           VARCHAR2(40),
  CD_NATURALIDADE  NUMBER(5),
  CD_NACIONALIDADE NUMBER(7),
  CD_OPERADOR      NUMBER(6) not null,
  DT_TRANSACAO     DATE not null,
  NR_CPFCNPJ       CHAR(14),
  TP_PESSOA        NUMBER(1),
  NM_APELIDO       VARCHAR2(100),
  NM_FANTASIA      VARCHAR2(100),
  DS_OBSERVA       VARCHAR2(200),
  TP_PARCEIRO      NUMBER(1),
  IN_CANCELADO     CHAR(1)
)