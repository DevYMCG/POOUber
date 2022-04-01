 package Java;

class Car{

    Integer id;
    String license;
    Account driver;
    Integer passegenger;

    /*Constructor:
    
    Parametros obligatorios para que se cree mi objeto
    de tipo Car
    
    */

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar(){
        System.out.println("License: "+ license + " Driver: "+ driver);
    }
}