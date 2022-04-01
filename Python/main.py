from car import Car
from account import Account


def run():
   car = Car("GTHY369", Account("Andres Herrera", "ANDA876"))
   print(vars(car))
   print(vars(car.driver))


if __name__ == "__main__":
    run()