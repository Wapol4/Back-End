# Create program Heads or Tails
# Import the random module
# Generate a random number between 0 and 1
# If the number is 0, then it's tails
# If the number is 1, then it's heads
# 
# Hint: Remember to import the random module first. All the methods you need are in the random module.

import random
random_number = random.randint(0, 1)
if random_number == 0:
    print('Heads')
else:
    print('Tails')