# Create program Banker Roulette
# Import the random module
# Create a list of names
# Generate a random number between 0 and the last index
# Use that number to select a random name from the list of names
# Print the name of the person who will pay the bill

names_string = input('Give me everybody\'s names, separated by a comma. ')
names = names_string.split(', ')
import random
random_number = random.randint(0, len(names - 1))
print(f'{names[random_number]} is going to buy the meal today!')
