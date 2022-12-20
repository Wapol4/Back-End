# def my_function():
#     return 3 * 2

# print(my_function())

def format_name(f_name, l_name):
    if f_name == "" or l_name == "":
        return "You didnt provide valid input name."    

    formated_f_name  = f_name.title()
    formated_l_name = l_name.title()    
    return f"{formated_f_name} {formated_l_name}"

# formated_string = format_name("AnGEla", "YU")
# print(formated_string)

print(format_name(input("What is your first name?"), input("What is your last name ?")))