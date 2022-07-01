from car import Car
from account import Account

if __name__ == "__main__":
    print('Hola Mundo')
    
    car = Car("JSP123", Account("Stiven Pulido", "1014098765"))
    print(vars(car))
    print(vars(car.driver))