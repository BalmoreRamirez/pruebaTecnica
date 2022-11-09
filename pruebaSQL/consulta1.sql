select 
employees.first_name as nombreEmpleado, 
employees.email_address as CorreoEmpleado, 
orders.id as IdOrden,
customers.last_name as NombreCliente,
orders.order_date as FechaOrden,
employees.id as IdEmpleado
from orders
inner join employees
inner join customers
where employees.id = 1 and  orders.order_date between '2006-04-01 00:00:00' and '2006-05-01 00:00:00'
