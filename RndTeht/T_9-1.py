def summaa_luvut(lista):
	summa = sum(keruu)
	return	summa

def poimi_parittomat(lista):
	for luku in keruu:
		if luku % 2 == 1:
			print(luku, end = " ")
	print(" ")

def poimi_parilliset(lista):
	for luku in keruu:
		if luku % 2 == 0:
			print(luku, end = " ")
	print(" ")

def kysy_toiminto(keruu):
    kysymys = input("Mitä tehdään? [summa, parittomat, parilliset]: ")
    if kysymys == "summa":
    	print(summaa_luvut(keruu))
    elif kysymys == "parittomat":
    	poimi_parittomat(keruu)
    elif kysymys == "parilliset":
    	print(poimi_parilliset(keruu))
    else:
        kysy_toiminto(keruu)

keruu = []
while True:
    luku = input("Anna luku: ")
    if luku:
        keruu.append(int(luku))
    else:
        kysy_toiminto(keruu)
        keruu = []
