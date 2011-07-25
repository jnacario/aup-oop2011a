from Person.Person import *
from Foods.Food import *

me=Person('John',90)
print "Name: %s\nHealth: %i" % (me.name, me.health)
food=Food('kanin',10)
poison=Food('lason',-10)
me.eat(food.value)
print "Health is %s" % (me.health)
me.eat(poison.value)
print "Health is %s" % (me.health)
