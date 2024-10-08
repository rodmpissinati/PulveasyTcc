create database db_pulveasy;
use db_pulveasy;


CREATE TABLE tb_usuario(
    nome VARCHAR(40),
    cnpj VARCHAR(14) PRIMARY KEY,
    email VARCHAR(50),
    senha VARCHAR(50)
);

CREATE TABLE tb_propriedade (
	inscest varchar (25),
    cidade VARCHAR(40),
    bairro VARCHAR(40),
    rua VARCHAR(40),
    numero VARCHAR(5),
    estado VARCHAR(40),
    nomePropriedade VARCHAR(40),
    PRIMARY KEY (inscest, nomePropriedade)
);


-- CREATE TABLE tb_produto (
   --  codigo VARCHAR(40),
   --  nome VARCHAR(40),
   --  ativo VARCHAR(40),
   --  tipo VARCHAR(40),
   --  carencia VARCHAR(10),
    --  PRIMARY KEY (codigo, nome, ativo, carencia)
-- );

-- CREATE TABLE tb_possui (
-- fk_propriedade_incest VARCHAR(14),
-- fk_usuario_cnpj VARCHAR(14)
-- );

CREATE TABLE tb_pulverizacao(
	id INT AUTO_INCREMENT PRIMARY KEY,
	fk_propriedade_inscest VARCHAR(25),
	fk_propriedade_nome VARCHAR(40),
    nomeOperador VARCHAR(40),
    numeroEquipamento VARCHAR(20),
    codigo VARCHAR(40),
    nome VARCHAR(40),
    ativo VARCHAR(40),
    tipo VARCHAR(40),
    carencia VARCHAR(10),
    dosagem VARCHAR(40),
    dataPulv VARCHAR(10),
    hora time
    
);

CREATE TABLE tb_tempoReal(
	fk_pulverizacao_id INT,
    localizacao VARCHAR(40),
    temperatura VARCHAR(4),
    umidade VARCHAR(20),
    chuva boolean,
    velocidade VARCHAR(3)

);
 
    
ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_1
    FOREIGN KEY (fk_propriedade_inscest, fk_propriedade_nome )
    REFERENCES tb_propriedade (inscest, nomePropriedade )
    ON DELETE CASCADE;
    
   -- ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_2
    -- FOREIGN KEY (fk_produto_codigo, fk_produto_nome, fk_produto_ativo, fk_produto_carencia)
   -- REFERENCES tb_produto(codigo, nome, ativo, carencia)
   -- ON DELETE SET NULL;

ALTER TABLE tb_tempoReal ADD CONSTRAINT fk_tempoReal_1
    FOREIGN KEY (fk_pulverizacao_id)
    REFERENCES tb_pulverizacao (id)
    ON DELETE SET NULL;
    
  select * from  tb_pulverizacao;
    
-- select * from  tb_propriedade;
    
 -- drop database db_pulveasy;
    
    



    

    
    
    
