# Create program tip calculator
# Tip = total bill * tip percentage
print("Welcome to the tip calculator.")
bill = float(input("What was the total bill? $"))
tip = int(input("What percentage tip would you like to give? 10, 12, or 15? "))
people = input("How many people to split the bill? ")

totalBill = float(bill + (bill * (tip/100)))
result = totalBill / int(people)

finalBill = round(result, 2)
print(f"Each person should pay: ${finalBill}")
