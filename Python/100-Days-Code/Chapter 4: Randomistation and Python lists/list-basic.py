states_of_america = ["Delaware", "Pennsylvania", "New Jersey", "Georgia"]
print(states_of_america)

# Change the first element of the list to "Washington"
states_of_america[0] = "Washington"
print(states_of_america)

# Add "Hawaii" to the end of the list
states_of_america.append("Hawaii")
print(states_of_america)

# Add "Alaska" to the beginning of the list
states_of_america.insert(0, "Alaska")
print(states_of_america)

fruits = ["Strawberries", "Nectarines", "Apples", "Grapes", "Peaches", "Cherries", "Pears"]
vegetables = ["Spinach", "Kale", "Tomatoes", "Celery", "Potatoes"]
 
dirty_dozen = [fruits, vegetables]
 
print(dirty_dozen[0][4])