create database db_pulveasy;
use db_pulveasy;


CREATE TABLE tb_usuario(
    nome VARCHAR(40),
    cpf VARCHAR(14) PRIMARY KEY,
    email VARCHAR(50),
    senha VARCHAR(50)
);

CREATE TABLE tb_propriedade (
    cidade VARCHAR(40),
    bairro VARCHAR(40),
    rua VARCHAR(40),
    numero VARCHAR(5),
    estado VARCHAR(40),
    cnpj VARCHAR(14) PRIMARY KEY,
    nomePropriedade VARCHAR(40)
);

CREATE TABLE tb_produto (
    codigo VARCHAR(40) PRIMARY KEY,
    nome VARCHAR(40),
    ativo VARCHAR(40),
    fk_tipo_id VARCHAR(40)
);

CREATE TABLE tb_tipo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40)
);

CREATE TABLE tb_possui (
    fk_propriedade_cnpj VARCHAR(14),
    fk_usuario_cpf VARCHAR(14)
);

CREATE TABLE tb_pulveriza (
    fk_produto_cod VARCHAR(40),
    fk_propriedade_cnpj VARCHAR(14),
    dosagem VARCHAR(40),
    data VARCHAR(10) PRIMARY KEY,
    carencia VARCHAR(10)
);

CREATE TABLE tb_pulverizacao(
	id INT AUTO_INCREMENT PRIMARY KEY,
	fk_propriedade_cnpj VARCHAR(14),
    fk_propriedade_nome VARCHAR(40),
    fk_produto_nome VARCHAR(40),
    fk_produto_ativo VARCHAR(40),
    fk_pulveriza_dosagem VARCHAR(40),
    fk_tipo_nome VARCHAR(40),
    fk_pulveriza_data VARCHAR(10),
    hora time,
    nomeOperador VARCHAR(40),
    numeroEquipamento INT
    
    
);
 
ALTER TABLE tb_produto ADD CONSTRAINT fk_produto_2
    FOREIGN KEY (fk_tipo_id)
    REFERENCES tb_tipo (id)
    ON DELETE CASCADE;
 
ALTER TABLE tb_possui ADD CONSTRAINT fk_possui_1
    FOREIGN KEY (fk_propriedade_cnpj)
    REFERENCES tb_propriedade (cnpj)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_possui ADD CONSTRAINT fk_possui_2
    FOREIGN KEY (fk_usuario_cpf)
    REFERENCES tb_usuario (cpf)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_pulveriza ADD CONSTRAINT fk_pulveriza_1
    FOREIGN KEY (fk_produto_cod)
    REFERENCES tb_produto (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_pulveriza ADD CONSTRAINT fk_pulveriza_2
    FOREIGN KEY (fk_propriedade_cnpj)
    REFERENCES tb_propriedade (cnpj)
    ON DELETE SET NULL;
    
ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_3
    FOREIGN KEY (fk_propriedade_nome)
    REFERENCES tb_propriedade (nomePropriedade)
    ON DELETE SET NULL;
    
    ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_4
    FOREIGN KEY (fk_produto_nome)
    REFERENCES tb_produto (nome)
    ON DELETE SET NULL;
    
    ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_5
    FOREIGN KEY (fk_produto_nome)
    REFERENCES tb_produto (nome)
    ON DELETE SET NULL;
    
    ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_6
    FOREIGN KEY (fk_pulveriza_dosagem)
    REFERENCES tb_pulveriza (dosagem)
    ON DELETE SET NULL;
    
    ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_7
    FOREIGN KEY (fk_produto_ativo)
    REFERENCES tb_produto (nome)
    ON DELETE SET NULL;
    
    ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_8
    FOREIGN KEY (fk_tipo_nome)
    REFERENCES  tb_tipo (nome)
    ON DELETE SET NULL;
    
     ALTER TABLE tb_pulverizacao ADD CONSTRAINT fk_pulverizacao_9
    FOREIGN KEY (fk_pulveriza_data)
    REFERENCES tb_pulveriza(data)
    ON DELETE SET NULL;
    
    
   
    

    
    
    
