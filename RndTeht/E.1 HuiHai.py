for luku in range(1,101):
	if luku % 3 == 0:
		print("Hui")
	elif luku % 5 == 0:
		print("Hai")
	elif luku % 3 == 0 and luku % 5 == 0:
		print("HuiHai")
	else:
		print(luku)
