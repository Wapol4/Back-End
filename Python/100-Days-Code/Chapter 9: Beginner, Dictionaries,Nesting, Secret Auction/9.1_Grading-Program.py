student_scores = {
    "Harry": 81,
    "Ron": 79,
    "Ran": 60,
    "Alice": 92,
    "Draco": 78,
}

student_grades = {}

for student in student_scores:
    # print(student)
    score = student_scores[student]
    if score > 90:
        student_grades[student] = "Outstanding"
    elif score > 80:
        student_grades[student] = "Exceeds Expectations"
    elif score > 70:
        student_grades[student] = "Acceptable"
    else:
        student_grades[student] = "Fail" 
    # if student_scores[key] ==]

print(student_grades)