class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        UberX uberX = new UberX("JSP123", new Account("Stiven Pulido", "1014652939", "stiven.pulido@correo.com", "123456")
        ,"Renault", "Twingo");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("ARP098", new Account("Andres Ovalle", "1022988234", "andres.ovalle@correo.com", "098345"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

        // Car car2 = new Car("QNH654", new Account("Andres Ovalle", "1022345678", "andres.ovalle@correo.com", "098765"));
        // car2.passenger = 3;
        // car2.printDataCar();
    }
}