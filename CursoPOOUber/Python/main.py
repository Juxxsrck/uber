import imp
from car import Car
if __name__ == "__main__":
    print('Hola Mundo')
    car = Car()
    car.license = "GAP567"
    car.driver = "German Pulido"
    print(vars(car))

    car2 = Car()
    car2.license = 'MBM098'
    car2.driver = 'Melany Barreto'
    print(vars(car2))