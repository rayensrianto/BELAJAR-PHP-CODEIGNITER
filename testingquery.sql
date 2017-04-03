USE deptech;

SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers
ON Orders.CustomerID=Customers.CustomerID;

SELECT siswa.`nama_depan`, siswa.`nama_belakang`, ekstrakulikuler.`nama_ekstrakulikuler`, data_ekstrakulikuler.`tahun_mulai`
FROM data_ekstrakulikuler
JOIN siswa ON siswa.`id_siswa` = data_ekstrakulikuler.`id_ekstrakulikuler`
JOIN ekstrakulikuler ON ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`;

SELECT siswa.`id_siswa`, ekstrakulikuler.`id_ekstrakulikuler`, siswa.`nama_depan`, siswa.`nama_belakang`, 
ekstrakulikuler.`nama_ekstrakulikuler`, YEAR(data_ekstrakulikuler.`tahun_mulai`) AS tahun_mulai
FROM data_ekstrakulikuler
JOIN siswa ON siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa`
JOIN ekstrakulikuler ON ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`
ORDER BY siswa.`id_siswa`;

SELECT siswa.`id_siswa`, ekstrakulikuler.`id_ekstrakulikuler`, GROUP_CONCAT(siswa.nama_depan), 
siswa.`nama_belakang`, ekstrakulikuler.`nama_ekstrakulikuler`, data_ekstrakulikuler.`tahun_mulai`
FROM data_ekstrakulikuler
JOIN siswa ON siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa`
JOIN ekstrakulikuler ON ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`;

SELECT id_siswa, nama_depan, nama_belakang FROM siswa;

SELECT siswa.`id_siswa`, ekstrakulikuler.`id_ekstrakulikuler`, siswa.`nama_depan`, siswa.`nama_belakang`, 
ekstrakulikuler.`nama_ekstrakulikuler`, YEAR(data_ekstrakulikuler.`tahun_mulai`) AS tahun_mulai
FROM data_ekstrakulikuler
JOIN siswa ON siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa`
JOIN ekstrakulikuler ON ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler`
WHERE data_ekstrakulikuler.`id_siswa` = 1 AND data_ekstrakulikuler.`id_ekstrakulikuler` = 2
ORDER BY `siswa`.`id_siswa`;

SELECT `siswa`.`id_siswa`, `ekstrakulikuler`.`id_ekstrakulikuler`, `siswa`.`nama_depan`, `siswa`.`nama_belakang`, 
`ekstrakulikuler`.`nama_ekstrakulikuler`, YEAR(data_ekstrakulikuler.`tahun_mulai`) AS tahun_mulai 
FROM `data_ekstrakulikuler` 
JOIN `siswa` ON siswa.`id_siswa` = data_ekstrakulikuler.`id_siswa` 
JOIN `ekstrakulikuler` ON ekstrakulikuler.`id_ekstrakulikuler` = data_ekstrakulikuler.`id_ekstrakulikuler` 
WHERE `id_siswa` = '1' AND `id_ekstrakulikuler` = '2';



UPDATE `data_ekstrakulikuler` SET `id_ekstrakulikuler` = '1' WHERE `id_siswa` = '5' AND `id_ekstrakulikuler` = '5';
UPDATE `data_ekstrakulikuler` SET `id_ekstrakulikuler` = '2' WHERE `id_siswa` = '1' AND `id_ekstrakulikuler` = '1';
