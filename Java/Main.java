package Java;

class Main {
    public static void main(String[] args){
        
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        car.passegenger = 5;
        car.printDataCar();

        Car car2 = new Car("YHGT123", new Account("Yohana Herrera", "TRE123"));
        car2.passegenger = 3;
        car2.printDataCar();

        User user = new User("Patricia Jimenez", "V23776489");
        user.printDataAccount();

        Driver driver = new Driver("Raul Bonilla", "V81345678");
        driver.printDataAccount();
    }
}