package Java;

class Main {
    public static void main(String[] args){
        
        /*UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();*/

        UberVan uberVan = new UberVan("LIC1256", new Account("Carmen villalobos", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        /*Car car2 = new Car("YHGT123", new Account("Yohana Herrera", "TRE123"));
        car2.passegenger = 3;
        car2.printDataCar();

        User user = new User("Patricia Jimenez", "V23776489");
        user.printDataAccount();

        Driver driver = new Driver("Raul Bonilla", "V81345678");
        driver.printDataAccount();*/
    }
}