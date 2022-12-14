# Create program loops in range 1 to 100
total = 0

for x in range(2, 101, 2):
    # print(x)
    total += x
print(total)

total2 = 0
for number in range(1, 101):
    if number % 2 == 0:
        total2 += number
print(total2)