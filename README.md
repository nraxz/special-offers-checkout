Application
-------------
Howsy are building a new checkout. The checkout system allows users to pay upfront for products added to their property management agreement. The system should also allow users to take advantage of special offers. An initial offer will be “users who have agreed to a 12-month contract are entitled to a 10% discount off the basket total”

The products are below:

Product Code	Name	Price
P001	Photography	200
P002	Floorplan	100
P003	Gas Certificate	83.50
P004	EICR Certificate	51.00
job is to implement the basket which should have the following interface:

Basket can be initialised with offer(s) user is eligible for
It has an add method to add a product
Each individual product can only be added to the basket one time
It has a total method that returns the total cost of the basket - remember to take into account any valid offers

Installation
---------------
- Clone the repository
- install composer [composer can be download from here: https://getcomposer.org]
- run composer.json [composer init / composer update]
- Make sure phpspec is installed

Command
--------
[bin/phpspec run]


