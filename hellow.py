a=[];

def insert():
    n=input()
    a.append(n)

def delete():
    a.pop()
    
def show():
    print(a)


cont='yes'
while cont=='yes':
    print("\"s\" for append \"n \"for pop")
    choice=input();
    if choice=='s':
        insert()
    elif choice=='n':
        delete()
    elif choice=='r':
        show()
    print("do you need to continue")
    cont=input()
else:
    print(a)


