from class1 import std
f=[2,"ft",False]
g=["gh","funit"]
h=[4,5,2,3]
j=h.copy()
f.extend("f")
f.extend(g)
f.append("t")
f.append(g)
f.insert(1,"kelli")
f.remove("ft")
g.clear()
f.pop()
print(f.index(2))
print(f.count("kelli"))
print(f)
h.reverse()
print(h)
h.sort()
print(h)
print(j)

co=[(5,7),(5,6)]
print(co[0][1])

def hi(name):
	print("hello" +name)
hi("y")


def cube(num):
	return num*num*num
r=cube(4)
print(r)


ismale=False
isTall=False

if ismale or isTall:
	print("y")
else:
	print("h")
	
a=4
b=7
c=5
if a>b and a>c:
	print("a")
elif b>a and b>c:
	print("b")
else:
	print("c")

#num1=float(input("enter first num"))
#op=input("enter op")
#num2=float(input("enter 2nd num"))

#if op=="+":
#	print(num1+num2)
#elif op=="-":
#	print(num1-num2)
#else:
#	print("wrong operation")

mconv={
"jan": "january",
"feb": "february"
}
print(mconv.get("jan"))

i=1
while i<=5:
	print(i)
	i+=1
print("done")

y="giraffe"

for i in y:
	print(i)

t=10
for u in range(t):
	print(u)

std1= std(34, "si")
std2=std(56, "bh")

print(std1.age)
print(std2.name)
print(type(std1))
	

	