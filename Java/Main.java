package Java;

class Main {
    public static void main(String[] args){
        System.out.println("Hola Mundo");
        Car car = new Car();
        car.license = "AMQ123";
        car.driver = "Andres Herrera";
        car.passegenger = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "YHGT123";
        car2.driver = "Yohana Herrera";
        car2.passegenger = 3;
        car2.printDataCar();
    }
}