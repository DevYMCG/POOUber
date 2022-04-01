from car import Car


def run():
   car = Car()
   car.license = "GTHY369"
   car.driver = "Pablo Jóse"
   car.passengenger = 5
   print(vars(car))

   car2 = Car()
   car2.license = "BVCX123"
   car2.driver = "Ana Maria"
   car2.passengenger = 10
   print(vars(car2))


if __name__ == "__main__":
    run()