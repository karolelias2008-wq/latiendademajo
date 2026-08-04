USE [La tiendademajo];
GO

-- Sumamos 5 unidades al stock actual del producto con ID 5
UPDATE dbo.Productos 
SET ProductoDisponible = ProductoDisponible + 5 
WHERE ProductoID = 2;
GO

-- Verificamos cómo quedó el inventario de vestidos
SELECT ProductoID, Nombre, ProductoDisponible 
FROM dbo.Productos 
WHERE Nombre LIKE '%Blusas%';

