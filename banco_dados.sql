CREATE DATABASE ecommerce;
USE ecommerce;
CREATE TABLE produtos (
  ID INTEGER AUTO_INCREMENT PRIMARY KEY
 ,NOME VARCHAR(20)
 ,PRECO FLOAT
 ,DESCRICAO VARCHAR(500)
);

INSERT INTO produtos (NOME,PRECO,DESCRICAO) VALUES ('PS4',3000,'O PlayStation 4, ou PS4 é um video game da Sony lançado em 2013. O console tem três versões principais: fat, slim e Pro. A primeira (e original) tem esse nome por causa do peso e conta com 500 GB de armazenamento. Já a edição Slim, mais leve que a anterior, pode ser encontrada com armazenamento de 500 GB ou de 1T.');
INSERT INTO produtos (NOME,PRECO,DESCRICAO) VALUES ('Notebook IdeaPad 3i (15” Intel) - Lenovo',1979,'Ele conta com os processadores Intel® Core™ da 10ª geração e possui modelos com placa de vídeo dedicada, o que aumenta o seu desempenho e proporciona uma experiência de entretenimento diferenciada. Os detalhes de design bem pensados, como o obturador de privacidade de webcam e câmera de alta resolução HD-720p, completam o quadro. Além disso, possui armazenamento híbrido: HDD ou SSD. Escolha o modelo que mais se adapta ao seu estilo!');
