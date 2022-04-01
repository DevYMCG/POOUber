var car = new Car("AW456", new Account("Andres Herrera", "DOCT123"));
car.passenger = 4;
car.printDataCar();

var uberx = new UberX("AW456", new Account("Yesenia Araque", "DOCT123"), "chevrolet", "Spark");
uberx.passenger = 4;
uberx.printDataCar();

var user = new User("Jose Tapia", "VENEZ456");
user.printDataAccount();

var driver = new Driver("ceta martinez", "DESAFIOTHEBOX");
driver.printDataAccount();