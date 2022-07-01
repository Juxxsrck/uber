class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car();
        car.license = "JSP123";
        car.driver = "Stiven Pulido";
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license = "QNH654";
        car2.driver = "Andres Ovalle";
        car2.passenger = 3;
        car2.printDataCar();
    }
}