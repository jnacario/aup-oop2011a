class Person:
    max_health = 100
    health = 100
    name = ""
    
    def __init__(self, name):
        self.name = name
    
    def is_alive(self):
        if(self.health > 0):
            return True
        return False
    
    def eat(self, food):
        self.health += food.health
        if(self.health >= self.max_health):
            self.health = self.max_health
