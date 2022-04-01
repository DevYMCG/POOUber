from ast import Str
from account import Account


class Car:
    id              = int
    license         = Str
    driver          = Account("", "")
    passengenger    = int

    def __init__(self, license, driver):
        self.license = license
        self.driver = driver
