CREATE TABLE IF NOT EXISTS users (
  id VARCHAR(2) NOT NULL,
  user_name VARCHAR(100) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  gender VARCHAR(1) NOT NULL,
  user_level VARCHAR(1) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) ,
  cellphone_brand VARCHAR(50) NOT NULL,
  isp VARCHAR(50) NOT NULL,
  balance VARCHAR(4) NOT NULL,
  active_user VARCHAR(1) NOT NULL
);

INSERT INTO users VALUES
	('1','BRE2271','BRENDA','M','2','brenda@live.com','655-330-5736','SAMSUNG','CLARO','100','1'),
	('2','OSC4677','OSCAR','H','3','oscar@gmail.com','655-143-4181','LG','ICE','0','1'),
	('3','JOS7086','JOSE','H','3','francisco@gmail.com','655-143-3922','NOKIA','MOVISTAR','150','1'),
	('4','LUI6115','LUIS','H','0','enrique@outlook.com','655-137-1279','SAMSUNG','ICE','50','1'),
	('5','LUI7072','LUIS','H','1','luis@hotmail.com','655-100-8260','NOKIA','CLARO','50','0'),
	('6','DAN2832','DANIEL','H','0','daniel@outlook.com','655-145-2586','SONY','ICE','100','1'),
	('7','JAQ5351','JAQUELINE','M','0','jaqueline@outlook.com','655-330-5514','BLACKBERRY','CLARO','0','1'),
	('8','ROM6520','ROMAN','H','2','roman@gmail.com','655-330-3263','LG','CLARO','50','1'),
	('9','BLA9739','BLAS','H','0','blas@hotmail.com','655-330-3871','LG','ICE','100','1'),
	('10','JES4752','JESSICA','M','1','jessica@hotmail.com','655-143-6861','SAMSUNG','ICE','500','1'),
	('11','DIA6570','DIANA','M','1','diana@live.com','655-143-3952','SONY','ICE','100','0'),
	('12','RIC8283','RICARDO','H','2','ricardo@hotmail.com','655-145-6049','MOTOROLA','CLARO','150','1'),
	('13','VAL6882','VALENTINA','M','0','valentina@live.com','655-137-4253','BLACKBERRY','MOVISTAR','50','0'),
	('14','BRE8106','BRENDA','M','3','brenda2@gmail.com','655-100-1351','MOTOROLA','MOVISTAR','150','1'),
	('15','LUC4982','LUCIA','M','3','lucia@gmail.com','655-145-4992','BLACKBERRY','CLARO','0','1'),
	('16','JUA2337','JUAN','H','0','juan@outlook.com','655-100-6517','SAMSUNG','CLARO','0','0'),
	('17','ELP2984','ELPIDIO','H','1','elpidio@outlook.com','655-145-9938','MOTOROLA','MOVISTAR','500','1'),
	('18','JES9640','JESSICA','M','3','jessica2@live.com','655-330-5143','SONY','CLARO','200','1'),
	('19','LET4015','LETICIA','M','2','leticia@yahoo.com','655-143-4019','BLACKBERRY','ICE','100','1'),
	('20','LUI1076','LUIS','H','3','luis2@live.com','655-100-5085','SONY','ICE','150','1'),
	('21','HUG5441','HUGO','H','2','hugo@live.com','655-137-3935','MOTOROLA','MOVISTAR','500','1');
    
    
-- 1) Consultar el usuario y teléfono de los usuarios con nivel 1 o 3    
SELECT user_name, phone 
FROM users 
WHERE user_level = 1 OR user_level = 3;

-- 2) Consultar nombre, teléfono y genero de los usuarios con teléfono que no sea de la marca BLACKBERRY
SELECT user_name, phone, gender 
FROM users 
WHERE cellphone_brand <> "BLACKBERRY";

-- 3) Consultar los datos excepto el id de los usuarios con nivel 3
SELECT * 
FROM users 
WHERE user_level <> 3;

-- 4) Contar el número de usuarios mujeres.
SELECT phone FROM users WHERE gender = "M";

-- 5) Contar el número de usuarios de la compañía telefónicas MOVISTAR y CLARO.
SELECT COUNT(*) AS total_usuarios 
FROM users
WHERE isp = 'MOVISTAR' OR isp = 'CLARO';

-- 6) Consultar el usuario y teléfono de los usuarios con compañía telefónica ICE.
SELECT user_name, phone
FROM users
WHERE isp = "ICE";

-- 7) Calcular el saldo de los usuarios inactivos.
SELECT SUM(balance) AS Total_Saldos_Disponibles
FROM users
WHERE active_user <> 0;

-- 8) Consultar los números de teléfono sin saldo.
SELECT phone
FROM users
WHERE balance = 0;

-- 9) Calcular el saldo mínimo de los usuarios Hombres.
SELECT MIN(balance) AS Saldo_Minimo
FROM users
WHERE gender = "H";

-- 10) Consultar los números de teléfono con saldo igual a 500.
SELECT phone
FROM users
WHERE balance = 500;

-- 11) Consultar los datos de los usuarios que sus nombres empiecen con las letras "LU" o la letra "D".
SELECT * 
FROM users
WHERE first_name LIKE 'LU%' OR first_name LIKE 'D%';

-- 12) Consultar los datos de los usuarios que su usuario tenga el numero "70".
SELECT * 
FROM users
WHERE user_name LIKE "%70%";

-- 13) Calcular el máximo saldo de los usuarios mujeres de la operadora claro.
SELECT MAX(balance) AS Saldo_Max_Mujeres_Claro
FROM users
WHERE gender = "M" AND isp ="CLARO";

-- 14) Calcular el promedio del saldo de los usuarios hombres de la operadora MOVISTAR y un teléfono MOTOROLA.
SELECT AVG(balance) AS Saldo_Promedio_Hombres_Movistar_con_Motorola
FROM users
WHERE gender = "H" AND isp = "MOVISTAR" AND cellphone_brand = "MOTOROLA";

-- 15) Calcular el saldo promedio de los usuarios que tienen teléfono marca LG.
SELECT AVG(balance) AS Saldo_Promedio_Usuarios_LG
FROM users
WHERE cellphone_brand = "LG";