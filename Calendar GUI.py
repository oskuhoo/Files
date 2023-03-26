import calendar
import tkinter
import tkinter as tk

year = int(input("Enter year: "))
month = int(input("Enter month: "))

cal = calendar.monthcalendar(year, month)

root = tk.Tk()
month_label = tkinter.Label(root, text=f"{calendar.month_name[month]} {year}")
calendar_text = tkinter.Text(root, height=6, width=21, font=("Arial", 12))

for week in cal:
    for day in week:
        if day > 0:
            calendar_text.insert(tkinter.END, f" {day:2d} ")
        else:
            calendar_text.insert(tkinter.END, "   ")
    calendar_text.insert(tkinter.END, "\n")

month_label.grid(row=0, column=0, columnspan=7)
calendar_text.grid(row=2, column=0, columnspan=7)

root.mainloop()