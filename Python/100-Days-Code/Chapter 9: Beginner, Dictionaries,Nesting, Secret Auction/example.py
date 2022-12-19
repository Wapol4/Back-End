# programming_dictionary = {
#     "Bug": "An error in a program that prevents the program from running as expected.", 
#     "Function": "A piece of code that you can easily call over and over again."
#     }

# # Retrivieving items from dictionary.
# # print(programming_dictionary["Bug"])
# # Adding new items to dictionary
# programming_dictionary["Loop"] = "The action of doing something over and over again"

# # print(programming_dictionary)
# # empty_dictionary = {}

# # programming_dictionary = {}

# # print(programming_dictionary)
# programming_dictionary["Bug"] = "A moth in your computer"

# # Loop through  a dictionary
# for key in programming_dictionary:
#     print(key)
#     print(programming_dictionary[key])


"""
    Nesting List and Dictionary    
"""

capitals = {
    "France": "Paris",
    "Germany": "Berlin",
}

travel_log = {
    "France": {
        "cities_visited": ["Paris","Lille", "Dijon"],
        "total_visits": 12
    },
     
    "Germany": ["Berlin","Hamburg", "Stuttgart"],
}

travel_log = [
    {   
      "country": "France",
      "cities_visited": ["Paris","Lille", "Dijon"],
      "total_visits": 12
    },
    {
      "country": "Germany", 
      "cities_visited": ["Berlin","Hamburg", "Stuttgart"],
      "total_visits": 4
    }
]
 
