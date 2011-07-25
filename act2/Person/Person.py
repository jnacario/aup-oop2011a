class Person():
	health=100
	name=''
	food=0
	def __init__(self,name,health):
		self.health=health
		self.name=name
	def eat(self,food):
		self.health=self.health+food
		if (self.health>=100):
			self.health=100
		if (self.health<=0):
			self.health=0
