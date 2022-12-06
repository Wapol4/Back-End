# Create program nested if
bill = 0
height = int(input("Enter your height in cm: "))

if height > 120:
    print("You can ride the rollercoaster!")
    age = int(input("What is your age? "))
    if age < 12:
        bill = 5
        print("Please pay $5.")
    elif age <= 18:
        bill = 7
        print("Please pay $7.")
    elif age >= 45 and age <= 55:
        print("Everything is going to be ok. Have a free ride on us!")
    else:
        bill = 12
        print("Please pay $12.")
    wants_photo = input("Do you want a photo taken? Y or N. ").lower()
    if wants_photo == "y":
        bill += 3
        print(f"Please pay {bill}.")
    else:
        print("Have a nice day!")
else:
    print("Sorry, you have to grow taller before you can ride.")