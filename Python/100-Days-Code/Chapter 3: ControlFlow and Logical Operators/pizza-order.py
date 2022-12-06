
SMALL_PIZZA = 15
MEDIUM_PIZZA = 20
LARGE_PIZZA = 25

PEPPERONI_SMALL = 2
PEPPERONI_MEDIUM_LARGE = 3

CHEESE = 1


print("Welcome to Python Pizza Deliveries!")
size = input("What size pizza do you want? S, M, or L ")
add_pepperoni = input("Do you want pepperoni? Y or N ")
extra_cheese = input("Do you want extra cheese? Y or N ")

bill = 0

if size == "S":
    bill += SMALL_PIZZA
elif size == "M":
    bill += MEDIUM_PIZZA
else:
    bill += LARGE_PIZZA
    
if add_pepperoni == "Y":
    if size == "S":
        bill += PEPPERONI_SMALL
    else:
        bill += PEPPERONI_MEDIUM_LARGE

if extra_cheese == "Y":
    bill += CHEESE
    
print(f"Your final bill is: ${bill}.")