from car import Car
from account import Account
from UberX import UberX


def run():
   car = Car("GTHY369", Account("Andres Herrera", "ANDA876"))
   print(vars(car))
   print(vars(car.driver))

   uberx = UberX("GTHY369", Account("Jose Carrero", "UYKM876"))
   print(vars(uberx))
   print(vars(uberx.driver))




if __name__ == "__main__":
    run()