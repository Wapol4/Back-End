age = input("What is your current age? ")

age_to_int = int(age)

years_remaining = 90 - age_to_int
days = years_remaining * 365
weeks = years_remaining * 52
months = years_remaining * 12

print(f"You have {days} days, {weeks} weeks, and {months} months left.")