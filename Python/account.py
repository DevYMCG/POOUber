from ast import Str
from xml.dom.minidom import Document


class Account:
    id          = int
    name        = Str
    document    = Str
    email       = Str
    password    = Str

    def __init__(self, name, document):
        self.name = name
        self.document = document
