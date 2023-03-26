import calendar

year = int(input("Enter year: "))
month = int(input("Enter month: "))

cal = calendar.monthcalendar(year, month)

print(calendar.month_name[month], year)
print("Ma Ti Ke To Pe La Su")
for week in cal:
    for day in week:
        if day > 0:
            print(f"{day:2}", end=" ")
        else:
            print("  ", end=" ")
    print()