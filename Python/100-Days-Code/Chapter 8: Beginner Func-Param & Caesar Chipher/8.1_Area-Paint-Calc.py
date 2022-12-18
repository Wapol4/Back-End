import math

# Create program Area Paint Calculate
def calculate_cat(height, width, cover):
    area = height * width
    number_of_cans = math.ceil(area / cover)
    print(f"You'll need {number_of_cans} cans of paint.")

test_h = int(input("Height of wall: "))
test_w = int(input("Width of wall: "))
coverage = 5

calculate_cat(height=test_h, width=test_w, cover=coverage)