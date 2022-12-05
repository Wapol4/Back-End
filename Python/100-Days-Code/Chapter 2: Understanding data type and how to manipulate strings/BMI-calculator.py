# Create BMI calculator
# BMI = weight / height ** 2
# weight in kg
# height in meters
weight = input("Enter your weight in kg: ")
height = input("Enter your height in meters: ")
bmi = int(weight) / float(height) ** 2
print(int(bmi))