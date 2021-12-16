class gad:
	payrate=.8
	def __init__(self, price, quantity):
		self.p=price
		self.q=quantity
	
	def cal(self):
		return self.p*self.q*self.payrate

item=gad(100,7)
item.payrate=.5
print(item.cal())

items=gad(200,2)
print(items.cal())