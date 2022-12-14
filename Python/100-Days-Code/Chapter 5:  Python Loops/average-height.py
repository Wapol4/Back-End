# Create program loops with a list of heights
student_height = input('Input a list of student heights: ').split()
for n in range(0, len(student_height)):
    student_height[n] = int(student_height[n])
print(student_height)

total_height = sum(student_height)
number_of_student= len(student_height)
average_height = round(total_height / number_of_student)
print(average_height)

# Calculate the average height
# total_height = 0
# for height in student_height:
#     total_height += height
