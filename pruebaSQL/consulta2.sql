select sum(standard_cost) as TotalCostos, company
from products
         inner join suppliers
where company = 'Supplier J'