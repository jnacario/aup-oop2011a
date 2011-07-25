from Person import *
import random

class Warrior(Person):
	max_health = 200
	damage = 10
    
	def attack(self, enemy):
		attacks = {
			1: 1,
			2: 0,
			3: 1.2,
		}
		attack_bonus = random.randrange(1,3)
		attack = self.damage * attacks[attack_bonus]
		enemy.health -= attack
        
		print "%s attacks %s damage: %d" % (self.name, enemy.name, attack)
