CREATE DATABASE slacknovo_loja;
USE slacknovo_loja;

CREATE TABLE categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE material (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE cor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE fornecedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL UNIQUE
);

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    contato VARCHAR(100),
    cpf CHAR(11) UNIQUE,
    data_cadastro DATE DEFAULT CURRENT_DATE
);

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL UNIQUE,
    telefone varchar(14)
);
 
CREATE TABLE produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    img_url VARCHAR(150),
    nome VARCHAR(80) NOT NULL,
    descricao TEXT,
    valor_compra DECIMAL(10,2) NOT NULL,
    valor_venda DECIMAL(10,2) NOT NULL,
    estado ENUM('novo','usado','consignado') NOT NULL,
    genero ENUM('masculino','feminino','unissex') NOT NULL,
    tamanho ENUM('PP','P','M','G','GG','G1','G2') NOT NULL,
    id_categoria INT,
    id_material INT,
    id_cor INT,
    id_fornecedor INT,
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
    FOREIGN KEY (id_material) REFERENCES material(id_material),
    FOREIGN KEY (id_cor) REFERENCES cor(id_cor),
    FOREIGN KEY (id_fornecedor) REFERENCES fornecedor(id_fornecedor)
);

ALTER TABLE produto
ADD COLUMN status ENUM('disponivel', 'vendido') NOT NULL DEFAULT 'disponivel';

CREATE TABLE venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    data_hora DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_produto INT NOT NULL,
    valor_compra_total DECIMAL(10,2) NOT NULL,
    valor_venda_total DECIMAL(10,2) NOT NULL,
    id_cliente INT,
    FOREIGN KEY (id_produto) REFERENCES produto(id_produto),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

CREATE TABLE saidacaixa (
    id_saida INT AUTO_INCREMENT PRIMARY KEY,
    valor DECIMAL(10,2) NOT NULL,
    motivo VARCHAR(500) NOT NULL,
    data_hora DATETIME DEFAULT CURRENT_TIMESTAMP
);