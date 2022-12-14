letter_list = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']
symbol_list = ['!', '#', '$', '%', '&', '(', ')', '*', '+']
number_list = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0']

# Create program Password Generator
print('Welcome to the PyPassword Generator!')
letter = int(input('How many letters would you like in your password? '))
symbol = int(input('How many symbols would you like? '))
number = int(input('How many numbers would you like? '))

# Eazy Level - Order not randomised:
# e.g. 4 letter, 2 symbol, 2 number = JduE&!91
import random

# password = ""
password_list = []

for char in range(1, letter + 1):
    password_list += random.choice(letter_list)

for char in range(1, symbol + 1):
    password_list += random.choice(symbol_list)
    
for char in range(1, number + 1):
    password_list += random.choice(number_list)

print(password_list)
random.shuffle(password_list)
print(password_list)
      
password = " "
for char in password_list:
    password += char
    
print(f"Your Password is:{password}")