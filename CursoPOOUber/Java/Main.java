class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car("JSP123", new Account("Stiven Pulido", "1014652939"));
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QNH654", new Account("Andres Ovalle", "1022345678"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}