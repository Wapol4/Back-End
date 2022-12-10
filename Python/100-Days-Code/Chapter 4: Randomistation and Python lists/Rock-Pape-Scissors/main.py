# Create program Rock-Paper-Scissors
# Import the random module
# Generate a random number between 0 and 2
# Assign a move to each number
# Prompt the user for their move
# Compare the user's move to the computer's move
# Print the result
# 

rock = '''
    _______
---'   ____)
      (_____)
      (_____)
      (____)
---.__(___)
'''

paper = '''
    _______
---'   ____)____
          ______)
          _______)
         _______)
---.__________)
'''

scissors = '''
    _______
---'   ____)____
          ______)
       __________)
      (____)
---.__(___)
'''

game_images = [rock, paper, scissors]
import random
random_number = random.randint(0, 2)

user_move = int(input('What is your move? '))
print(f'User move: {user_move}')
print(game_images[user_move])
print(f'Computer move: {random_number}')
print(game_images[random_number])

if user_move >= 3 or user_move < 0:
    print('You typed an invalid number, you lose!')
elif user_move == 0 and random_number == 2:
    print('You win!')
elif random_number == 0 and user_move == 2:
    print('You lose')
elif random_number > user_move:
    print('You lose')
elif user_move > random_number:
    print('You win!')
elif random_number == user_move:
    print('It\'s a draw')
    
    